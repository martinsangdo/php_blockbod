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
        $('.ico_search').addClass('hidden');
        $('#main_menu').addClass('hidden');
        $('.meanmenu-reveal', $('#masthead')).addClass('hidden');
        $('#search_box').removeClass('hidden');
    } else {
        //button is not showing, show it & hide textbox
        $('#search_box').addClass('hidden');
        $('.ico_search').removeClass('hidden');
        $('#main_menu').removeClass('hidden');
        $('.meanmenu-reveal', $('#masthead')).removeClass('hidden');
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
//save payer information to local storage for verification after payment
Common_Front.prototype.begin_payment_process = function(email, custom_request, item_number, price) {
    //create random string for access payment info from local storage
    var random_str = common.rand_str();
    var payer_info = {
        email: email,
        custom_request: custom_request
    };
    localStorage.setItem(random_str, JSON.stringify(payer_info));
    //
    var $frm_pay = $('#frm_pay');
    //setup return url
    $('#amount', $frm_pay).val(price);      //in USD
    $('#item_number', $frm_pay).val(item_number);  //unique
    $('#item_name', $frm_pay).val(email);  //name of payment
    $('#return', $frm_pay).val(SERVER_URI + '/publicapi/newsletter_pay_success?code='+random_str);  //after successful payment
    $('#cancel_return', $frm_pay).val(SERVER_URI + '/publicapi/newsletter_pay_cancel?code='+random_str);  //after cancel payment
    $frm_pay.submit();
};
//save email in Newsletter (special type - custom request)
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
    $(CONST.LBL_MESS_CUSTOM).text(STR_MESS_FRONT.PROCESSING).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
    submitting = true;
    //check if this email existed in system
    common.ajaxPost(API_URI.CHECK_EXISTED_NEWSLETTER_CUSTOM, {email: email}, function(resp){
        if (resp['code'] == RESP_MESS.PAYMENT_EMPTY || resp['code'] == RESP_MESS.USER_IS_NOT_EXISTED){
            //overwrite custom or register new user
            var item_number = CONST.NEWSLETTER_NEW_PREFIX + common.rand_str();       //to distinct requests
            var params = {
                email: email,
                custom_request: custom_request,
                item_number: item_number
            };
            //save info to DB
            common.ajaxPost(API_URI.SAVE_NEWSLETTER_CUSTOM, params, function(resp){
                //clear input
                $('#txt_email').val('');
                submitting = false;
                //process payment
                common_front.begin_payment_process(email, custom_request, item_number, CONST.CUSTOM_NEWSLETTER_PRICE_NEW);
            }, function(err){
                common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
                submitting = false;
            });
        } else {
            //user was existed, user must pay to modify request
            if ($("input[name='rdo_subscribe_type']:checked"). val() == "modify"){
                //user knew he must pay to change request
                common_front.agreed_modify_custom_newsletter();
            } else {
                //show dialog to confirm
                $('#btn_show_modal').trigger('click');
            }
            $(CONST.LBL_MESS_CUSTOM).text('');      //clear message
            submitting = false;
        }
    }, function(err){
        common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
};
//process payment after user agreed to modify request of Newsletter
Common_Front.prototype.agreed_modify_custom_newsletter = function() {
    var email = $.trim($('#txt_email_custom').val());
    var custom_request = $.trim($('#txt_custom_request').val());
    var item_number = CONST.NEWSLETTER_MODIFY_PREFIX + common.rand_str();       //to distinct requests
    var params = {
        email: email,
        modify_request: custom_request      //temporarily save it
    };
    submitting = true;
    //save info to DB
    common.ajaxPost(API_URI.MODIFY_NEWSLETTER_REQUEST, params, function(resp){
        //clear input
        $('#txt_email').val('');
        submitting = false;
        //process payment
        common_front.begin_payment_process(email, custom_request, item_number, CONST.CUSTOM_NEWSLETTER_PRICE_MODIFY);
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
    // console.log('get latest price because it is expired');
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

    $('#bb_random_price', $('#primary-menu')).text('Coin price: ' + saved_coin_list[rand]['symbol'] + ': ' + saved_coin_list[rand]['latest_price']);
    // if (saved_coin_list[rand]['change'] > 0){
    //     $('#bb_random_price', $('#primary-menu')).removeClass('g-color-red').addClass('g-color-green');
    // } else {
    //     $('#bb_random_price', $('#primary-menu')).removeClass('g-color-green').addClass('g-color-red');
    // }
};
//verify if current page belongs to newsletter payment
Common_Front.prototype.check_newsletter_payment = function() {
    var current_page_url = window.location.href;
    if (current_page_url.indexOf('/publicapi/newsletter_pay_success?code=') > 0){
        //user paid successfully
        //load what user input
        var code = common.get_url_param('code');
        common.show_info_lbl_custom(STR_MESS_FRONT.CUSTOM_NEWSLETTER_SAVED);
        //clear local storage
        localStorage.removeItem(code);
    } else if (current_page_url.indexOf('/publicapi/newsletter_pay_cancel?code=') > 0){
        //user cancelled payment (unpaid)
        //load what user input
        var code = common.get_url_param('code');
        var saved_payer_info = localStorage.getItem(code);
        saved_payer_info = $.parseJSON(saved_payer_info);
        //load saved info into form
        $('#txt_email_custom').val(saved_payer_info['email']);
        $('#txt_custom_request').val(saved_payer_info['custom_request']);
        localStorage.removeItem(code);
    }
};
//
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
    //
    common_front.check_newsletter_payment();
});