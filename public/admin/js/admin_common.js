/**
 * Process common functions of Admin, used in every Admin pages
 * author: Martin SangDo
 */
//========== CLASS
function AdminCommon() { }

var adminCommon = new AdminCommon();		//global object
//logout
AdminCommon.prototype.logout = function(){
    common.ajaxPost(ADMIN_API_URI.LOGOUT, {}, function(resp){
        //correct authentication
        common.redirect(ADMIN_CONTROLLER+'login');
    }, function(err){
        //show alert
        alert('Something wrong when logout, try it later');
    });
};
//publish/unpublish record, used in some list
AdminCommon.prototype.toggle_publish = function(ico, id, api_uri){
    if (submitting){
        return;
    }
    var $ico = $(ico);
    var params = {
        id: id
    };
    if ($('.ico_publish', $ico).hasClass('icon_active')){
        //being publishing
        params['status'] = 0;       //unpublish it
    } else {
        //being unpublishing
        params['status'] = 1;       //publish it
    }
    submitting = true;
    common.ajaxPost(api_uri, params, function(resp){
        submitting = false;
        $('.ico_publish', $ico).toggleClass('icon_active');
    }, function(err){
        submitting = false;
    });
};
//move index of row up/down by 1 unit
AdminCommon.prototype.move_row_step = function(ico, step_unit, api_uri) {
    if (submitting){
        return;
    }
    var $tbl_container = $('#tbl_container');
    $current_row = $(ico).closest('tr');
    var old_index = parseInt($current_row.attr('data-index'));  //index of current row
    //get index & id of closest row
    if (step_unit > 0){
        //move row down to bottom
        var $swap_row = $current_row.next();
    } else {
        //move row up to top
        var $swap_row = $current_row.prev();
    }
    //swap index
    var params = {
        id: parseInt($current_row.attr('data-id')),
        new_index: parseInt($swap_row.attr('data-index')),
        swap_id: parseInt($swap_row.attr('data-id')),
        swap_index: old_index   //other row will replaced by this index
    };
    submitting = true;
    common.ajaxPost(api_uri, params, function(resp){
        //update index of 2 rows
        $current_row.attr('data-index', $swap_row.attr('data-index'));
        $swap_row.attr('data-index', old_index);
        if (step_unit > 0){
            //move row down to bottom
            $current_row.insertAfter($swap_row);
            if ($current_row.next().length == 0){
                //there is no more row below, hide btn Down
                $('.ico_down', $current_row).addClass('hidden');
            }
            $('.ico_up', $current_row).removeClass('hidden');
            //
            if ($swap_row.prev().length == 0){
                //there is no more row above, hide btn Up
                $('.ico_up', $swap_row).addClass('hidden');
            }
            $('.ico_down', $swap_row).removeClass('hidden');
        } else {
            //move row up to top
            $current_row.insertBefore($swap_row);
            if ($current_row.prev().length == 0){
                //there is no more row above, hide btn Up
                $('.ico_up', $current_row).addClass('hidden');
            }
            $('.ico_down', $current_row).removeClass('hidden');
            //
            if ($swap_row.next().length == 0){
                //there is no more row below, hide btn Down
                $('.ico_down', $swap_row).addClass('hidden');
            }
            $('.ico_up', $swap_row).removeClass('hidden');
        }
        submitting = false;
    }, function(err){
        submitting = false;
    });
};
//get no. of unread messages/contact & show it in top bar
AdminCommon.prototype.get_unread_message = function() {
    common.ajaxPost(ADMIN_API_URI.GET_UNREAD_MESS_NUM, {}, function(resp){
        if (resp.num > 0){
            $(ADMIN_CONST.BADGE_MESS_NUM).removeClass('hidden').text(resp.num);
        }
    }, function(err){
    });
};
//==========
$(document).on('ready', function () {
    //todo: get new Ad requests

    //get new messages/contact
    adminCommon.get_unread_message();
    //todo: get new analysis & commentation


});