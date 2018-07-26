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
//save email in Newsletter (normal type)
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
//save email in Newsletter (special type)
Common_Front.prototype.process_custom_newsletter = function(){
    if (submitting){
        return;
    }
    $(CONST.LBL_MESS_CUSTOM).removeClass(CONST.LBL_MESS_INFO_CLASSNAME).removeClass(CONST.LBL_MESS_ERROR_CLASSNAME).text('');
    var email = $.trim($('#txt_email_custom').val());
    var custom_request = $.trim($('#txt_custom_request').val());

    if (common.isEmpty(email) || !common.isValidEmail(email)){
        common.show_error_lbl_custom(STR_MESS_FRONT.INVALID_EMAIL);
        return;
    } else if (common.isEmpty(custom_request)){
        common.show_error_lbl_custom(STR_MESS_FRONT.EMPTY_CUSTOM_REQUEST_NEWSLETTER);
        return;
    }
    //save to DB
    var params = {
        email: email,
        opt_5: $('#rdo_opt_1').is(':checked')?1:0,
        opt_6: $('#rdo_opt_2').is(':checked')?1:0,
        custom_request: custom_request
    };
    $(CONST.LBL_MESS_CUSTOM).text(STR_MESS_FRONT.PROCESSING).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
    //save info to DB
    submitting = true;
    common.ajaxPost(API_URI.SAVE_NEWSLETTER_CUSTOM, params, function(resp){
        common.show_info_lbl(STR_MESS_FRONT.NEWSLETTER_SAVED);
        //clear input
        $('#txt_email').val('');
        submitting = false;
        //todo: move to payment page

    }, function(err){
        common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
};
//load list of coins on the world & get 1 random price
Common_Front.prototype.load_coin_price_randomly = function() {
    //check if data is saved in localStorage
    var saved_coin_list = localStorage.getItem(LOCAL_KEY.COIN_LIST);
    if (saved_coin_list){
        //the list was saved in local storage, then check the last time of getting prices
        var lasted_update_time = parseInt(localStorage.getItem(LOCAL_KEY.LAST_UPDATE_COIN_LIST_TIME));
        var now = new Date();
        if (now - lasted_update_time > 60*60*1000){
            //updated more than 1 hour, get the price again
            this.get_coin_from_outside();
        } else {
            //get the price from local storage
            common_front.get_coin_info();
            var timer = setInterval(common_front.get_coin_info, CONST.LOAD_RANDOM_PRICE_DURATION);
        }
    } else {
        //get list of coins from CoinMarketCap
        this.get_coin_from_outside();
    }
};
//get price detail of a coin
Common_Front.prototype.get_coin_from_outside = function() {
    var params = {
        url: CONST.API_COIN_LIST
    };
    console.log('get latest price because it is expired');
    common.ajaxPost(API_URI.GET_RAW_URL, params, function(msg){
        if (common.isset(msg) && common.isset(msg.data)){
            data = $.parseJSON(msg.data);
            //save to local storage
            var saved_coin = [];
            $.each(data, function(symbol, info){
                saved_coin.push({
                    symbol: symbol.substring(0,2),
                    latest_price: $.number(info['last'], 5 )
                });
            });
            localStorage.setItem(LOCAL_KEY.COIN_LIST, JSON.stringify(saved_coin));
            localStorage.setItem(LOCAL_KEY.LAST_UPDATE_COIN_LIST_TIME, $.now());
            common_front.get_coin_info();
            var timer = setInterval(common_front.get_coin_info, CONST.LOAD_RANDOM_PRICE_DURATION);
        }
    });
};
//get price detail of a coin
Common_Front.prototype.get_coin_info = function() {
    var saved_coin_list = localStorage.getItem(LOCAL_KEY.COIN_LIST);
    saved_coin_list = $.parseJSON(saved_coin_list);
    var rand = Math.floor(Math.random()*saved_coin_list.length);    //random position of coins

    $('#bb_random_price', $('#primary-menu')).text(saved_coin_list[rand]['symbol'] + ': ' + saved_coin_list[rand]['latest_price']);
    // if (saved_coin_list[rand]['change'] > 0){
    //     $('#bb_random_price', $('#primary-menu')).removeClass('g-color-red').addClass('g-color-green');
    // } else {
    //     $('#bb_random_price', $('#primary-menu')).removeClass('g-color-green').addClass('g-color-red');
    // }
};
$(document).on('ready', function () {
    //assign event in search box
    $('#txt_search_keyword', $('#search_box')).unbind();
    $('#txt_search_keyword', $('#search_box')).keypress(function(e){
        if (e.which == 13 && $.trim($('#txt_search_keyword', $('#search_box')).val()).length > 2){
            //press Enter
            common.redirect('/publicapi/search_article/'+$.trim($('#txt_search_keyword', $('#search_box')).val()));
        }
    });
    //load list of available coins
    common_front.load_coin_price_randomly();
});