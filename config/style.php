<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

<link rel="stylesheet" href="<?php echo url_for('css/jquery-ui.css'); ?>" />
<link rel="stylesheet" href="<?php echo url_for('css/bootstrap.css'); ?>" /><!-- bootstrap-CSS -->
<link rel="stylesheet" href="<?php echo url_for('css/font-awesome.css'); ?>" /><!-- Fontawesome-CSS -->
<link rel="stylesheet" href="<?php echo url_for('css/menu.css'); ?>" /> <!-- menu style --> 
<link rel="stylesheet" href="<?php echo url_for('css/style.css'); ?>" />	
<link rel="stylesheet" href="<?php echo url_for('css/easy-responsive-tabs.css'); ?>" />
<link rel="stylesheet" href="<?php echo url_for('css/intlTelInput.css'); ?>">
<link rel="stylesheet" href="<?php echo url_for('css/owl.carousel.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo url_for('css/owl.theme.default.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo url_for('css/matrimony.css'); ?>" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type='text/javascript' src='<?php echo url_for('js/jquery-2.2.3.min.js'); ?>'></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('optionpen');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>

