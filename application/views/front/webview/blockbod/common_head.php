<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="format-detection" content="telephone=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="Blockchain latest news and ICO detail papers. We provide free tutorial for your ICO sessions"/>
<meta name="robots" content="noindex,follow"/>
<meta name="author" content="Martin SangDo"/>
<meta http-equiv="Cache-control" content="public"/>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="format-detection" content="telephone=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="Blockchain latest news and ICO detail papers. We provide free tutorial for your ICO sessions"/>
<meta name="robots" content="noindex,follow"/>
<meta name="author" content="Martin SangDo"/>
<meta http-equiv="Cache-control" content="public"/>

<link rel="stylesheet" href="<?php echo PUBLIC_FOLDER; ?>css/pt.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo PUBLIC_FOLDER; ?>css/meanmenu.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo PUBLIC_FOLDER; ?>css/font-awesome.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo PUBLIC_FOLDER; ?>css/slick.css" type="text/css" media="all"/>
<link rel="stylesheet" href="/public/css/bootstrap.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo PUBLIC_FOLDER; ?>css/style.css" type="text/css" media="all"/>

<link rel="stylesheet" href="<?php echo PUBLIC_FOLDER; ?>css/custom.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php echo PUBLIC_FOLDER; ?>css/mobile_custom.css" type="text/css" media="all"/>

<style id="theia-sticky-sidebar-stylesheet-TSS">
    .theiaStickySidebar:after {content: ""; display: table; clear: both;}
</style>

<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/navigation.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/slick.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/wp-embed.min.js"></script>

<script type="text/javascript" src="/public/js/common.js"></script>
<script>
    //show/hide search box
    function toggle_search_box(){
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
    }

$(document).on('ready', function () {
        //assign event in search box
        $('#txt_search_keyword', $('#search_box')).unbind();
        $('#txt_search_keyword', $('#search_box')).keypress(function(e){
           if (e.which == 13){
               //press Enter
               //todo: implement search

           }
        });
});
</script>