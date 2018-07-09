/*
author: Martin SangDo
process common javascript
 */

//========== CLASS
function Common_Front() { }

var common_front = new Common_Front();		//global object
//show/hide search box
Common_Front.prototype.toggle_search_box = function(){
    if ($('#ico_search').is(':visible')){
        //button is showing, hide it & display textbox
        $('#ico_search').addClass('hidden');
        $('#main_menu').addClass('hidden');
        $('#search_box').removeClass('hidden');
    } else {
        //button is not showing, show it & hide textbox
        $('#search_box').addClass('hidden');
        $('#ico_search').removeClass('hidden');
        $('#main_menu').removeClass('hidden');
    }
};
//save content in Contact page
Common_Front.prototype.save_contact = function(){
    if (submitting){
        return;
    }
    $(CONST.LBL_MESS).removeClass(CONST.LBL_MESS_INFO_CLASSNAME).removeClass(CONST.LBL_MESS_ERROR_CLASSNAME).text('');
    var name = $.trim($('#txt_name').val());
    var email = $.trim($('#txt_email').val());
    var content = $.trim($('#txt_content').val());
    var country = $.trim($('#txt_country').val());
    var phone = $.trim($('#txt_phone').val());
    if (common.isEmpty(name) || common.isEmpty(email) || common.isEmpty(content)){
        common.show_error_lbl(STR_MESS_FRONT.MISSING_INPUT);
        return;
    } else if (!common.isValidEmail(email)){
        common.show_error_lbl(STR_MESS_FRONT.INVALID_EMAIL);
        return;
    }
    //save to DB
    var params = {
        name: name,
        email: email,
        content: content,
        country: country,
        phone: phone
    };
    $(CONST.LBL_MESS).text(STR_MESS_FRONT.PROCESSING).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
    submitting = true;
    common.ajaxPost(API_URI.SAVE_CONTACT, params, function(resp){
        common.show_info_lbl(STR_MESS_FRONT.CONTACT_SAVED);
        //clear input
        $('#txt_name').val('');
        $('#txt_email').val('');
        $('#txt_content').val('');
        $('#txt_country').val('');
        $('#txt_phone').val('');
        submitting = false;
    }, function(err){
        common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
};
//save email in Newsletter
Common_Front.prototype.save_newsletter = function(){
    if (submitting){
        return;
    }
    $(CONST.LBL_MESS).removeClass(CONST.LBL_MESS_INFO_CLASSNAME).removeClass(CONST.LBL_MESS_ERROR_CLASSNAME).text('');
    var email = $.trim($('#txt_email').val());
    if (common.isEmpty(email) || !common.isValidEmail(email)){
        common.show_error_lbl(STR_MESS_FRONT.INVALID_EMAIL);
        return;
    }
    //save to DB
    var params = {
        email: email,
        opt_1: $('#chk_opt_1').is(':checked')?1:0,
        opt_2: $('#chk_opt_2').is(':checked')?1:0,
        opt_3: $('#chk_opt_3').is(':checked')?1:0,
        opt_4: $('#chk_opt_4').is(':checked')?1:0
    };
    $(CONST.LBL_MESS).text(STR_MESS_FRONT.PROCESSING).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
    submitting = true;
    common.ajaxPost(API_URI.SAVE_NEWSLETTER, params, function(resp){
        common.show_info_lbl(STR_MESS_FRONT.NEWSLETTER_SAVED);
        //clear input
        $('#txt_email').val('');
        submitting = false;
    }, function(err){
        common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
};
//load list of coins on the world
Common_Front.prototype.load_coin_price_list = function() {
    //check if data is saved in localStorage
    var myStorage = window.localStorage;
    var saved_coin_list = localStorage.getItem(CONST.LOCAL_KEY_COIN_LIST);
    if (saved_coin_list){
        //the list was saved in local storage, get 1 random coin from this
        common_front.get_coin_info();
    } else {
        //get list of coins from CoinMarketCap
        common.ajaxRawGet(CONST.API_COIN_LIST, function(msg){
            if (common.isset(msg.data)){
                //save to local storage
                var list = msg.data;
                var saved_coin = [];
                for (var i=0; i<list.length; i++){
                    saved_coin.push({
                        id: list[i]['id'],
                        symbol: list[i]['symbol']       //BTC, ETH, ...
                    });
                }
                localStorage.setItem(CONST.LOCAL_KEY_COIN_LIST, JSON.stringify(saved_coin));
                common_front.get_coin_info();
            }
        });
    }
};
//get price detail of a coin
Common_Front.prototype.get_coin_info = function() {
    var saved_coin_list = localStorage.getItem(CONST.LOCAL_KEY_COIN_LIST);
    saved_coin_list = $.parseJSON(saved_coin_list);
    var rand = Math.floor(Math.random()*saved_coin_list.length);
    var coin_info = saved_coin_list[rand];

    var params = {
        url: CONST.API_COIN_INFO + coin_info['id']
    };
    common.ajaxPost(API_URI.GET_COIN_PRICE, params, function(msg){
        if (common.isset(msg) && common.isset(msg.data)){
            var data = $.parseJSON(msg.data);
            console.log(data);
            //update data to UI

        }
    });

};
$(document).on('ready', function () {
    //assign event in search box
    $('#txt_search_keyword', $('#search_box')).unbind();
    $('#txt_search_keyword', $('#search_box')).keypress(function(e){
        if (e.which == 13){
            //press Enter
            //todo: implement search

        }
    });
    //load list of available coins
    common_front.load_coin_price_list();
});