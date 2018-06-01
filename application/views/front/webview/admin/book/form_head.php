<link rel="stylesheet" href="/public/trumbowyg/ui/trumbowyg.min.css"/>

<script src="/public/js/jquery.form.js"></script>
<script src="/public/trumbowyg/trumbowyg.min.js"></script>
<script src="/public/admin/js/admin_book.js"></script>

<script>
    $(document).on('ready', function () {
        common.init_editor($('#txt_content'));      //
        var $form_input = $('#frm_input');
        //reset all input events
        $('input[type="text"]', $form_input).unbind();
        //set event to each input
        common.set_length_handler($('#txt_title', $form_input), $('#lbl_title_len', $form_input), function(){
            //handle to create slug automatically
            $('#txt_slug', $form_input).val(common.to_slug($.trim($('input[type="text"]', $form_input).val())));
            $('#lbl_slug_len', $form_input).text($.trim($('#txt_slug', $form_input).val()).length);
        });
        common.set_length_handler($('#txt_slug', $form_input), $('#lbl_slug_len', $form_input));
        common.set_length_handler($('#txt_excerpt', $form_input), $('#lbl_excerpt_len', $form_input));
        common.set_length_handler($('#txt_author_name', $form_input), $('#lbl_author_name_len', $form_input));
        //calculate length of data in text boxes (when update detail)
        $('#lbl_title_len', $form_input).text($.trim($('#txt_title', $form_input).val()).length);
        $('#lbl_slug_len', $form_input).text($.trim($('#txt_slug', $form_input).val()).length);
        $('#lbl_excerpt_len', $form_input).text($.trim($('#txt_excerpt', $form_input).val()).length);
        $('#lbl_author_name_len', $form_input).text($.trim($('#txt_author_name', $form_input).val()).length);
    });
</script>