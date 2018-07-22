/**
 * Process functions about Advertisement
 * author: Martin SangDo
 */
//========== CLASS
function AdminAdvertisement() { }

var adminAdvertisement = new AdminAdvertisement();		//global object
//replace Home banner
AdminAdvertisement.prototype.update_home_banner = function(){
    if (submitting){
        return;
    }
    var $form_input = $('#frm_input');
    var url = $.trim($('#txt_url', $form_input).val());
    //update either url or image banner
    if (common.isset(url) && !common.isUrlValid(url)){
        $('#mess_submit').text(STR_MESS.INVALID_URL);
        return;
    } else if (!common.isset(url) && document.getElementById("file_attach").files.length == 0) {
        $('#mess_submit').text(STR_MESS.EMPTY_HOME_BANNER_DETAIL);
        return;
    }

    //submit to save in DB
    $('#mess_submit').text(STR_MESS.PROCESSING);
    submitting = true;
    $form_input.ajaxForm({
        data:{},
        url: ADMIN_API_URI.UPDATE_HOME_BANNER,
        type:'post',
        success:function(res,status,xhr){
            $('#mess_submit').text(STR_MESS.UPDATE_COMPLETED);
            $('#txt_title', $form_input).val('');       //clear it
            if (!common.isEmpty(res.data) && !common.isEmpty(res.data.filename)){
                //uploaded new home image
                $('#img_home_banner').attr('src', res.data.filename);
            }
            if (common.isset(url)){
                $('#current_url').attr('href', url).text(url);
            }
            submitting = false;
        }, error: function(err){
            $('#mess_submit').text(STR_MESS.GENERAL_BAD_REQUEST);
            submitting = false;
        }
    }).submit();
};