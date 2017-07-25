<?php /* Smarty version 2.6.13, created on 2012-05-28 12:21:08
         compiled from marlboro/login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MARLBORO LIGHTS CONNECTOIONS</title>
<link type="text/css" rel="stylesheet" href="css/marlboro.css" />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js'></script>
<link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
<script type='text/javascript' src='js/queryLoader.js'></script>
<script type="text/javascript" src="js/jquery.fullbg.min.js"></script>
<script type="text/javascript" src="js/typeface-0.15.js"></script>
<script type="text/javascript" src="js/bebas_neue_regular.typeface.js"></script>
<script type="text/javascript" src="js/acit_jquery.js"></script> 
<script type="text/javascript" src="js/ui/ui.core.js"></script>
<script type="text/javascript" src="js/ui/ui.accordion.js"></script>
<script type="text/javascript" src="js/ui/effects.explode.js"></script>
<script type="text/javascript" src="js/ui/effects.scale.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script> 
<script type="text/javascript" src="js/jquery.pngFix.js"></script> 
<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css">![endif]-->

<?php echo '
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery(\'#mycarousel\').jcarousel({
        vertical: true,
        scroll: 2
    });
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(\'div\').pngFix( );
	});
</script>
<script type="text/javascript">
  $(document).ready(function(){
	$(".close-box").click(function() {
	  $("#welcome").effect("scale", { percent: 0});
	});
 });
</script>
'; ?>

</head>

<body>
<img src="images/bg.png" alt="" id="background" />
<div id="maincontent"  class="typeface-js">
	
	<!-- header -->
	
    <div id="content" style="position:relative;">
    
		<div style="position:absolute;bottom:50px;right:100px;">
			<?php if ($this->_tpl_vars['login_error']): ?>
				<script>
					alert("Maaf, username dan/atau password salah !");
				</script>
				<?php endif; ?>
				<form class="login-form" method="post" enctype="application/x-www-form-urlencoded">
					<label class="login-here">&nbsp;</label>
					
					<input name="username" id="username" type="text" value="Email" />
					<input name="password" id="password" type="password" value="" />
					<input name="login" id=""login"" type="hidden" value="1" />
					<input type="submit" value="&nbsp;Login " class="btn-login" />
					
				</form>
				<p><a href="register.php">Register</a></p>
		</div>
    </div><!-- #content -->
	
    <div id="footer">
    	<div id="site-info">
        	<span>Informasi dalam website ini di tujukan untuk perokok berusia 18 tahun atau lebih dan tinggal di wilayah Indonesia </span>
        </div>
        <div class="menu-footer">
			<a href="index.php">Halaman Utama</a>
			<a href="index.php?page=syarat-ketentuan">Syarat dan Ketentuan</a>
			<a href="index.php?page=daftar-pertanyaan">Daftar Pertanyaan</a>
			<a href="index.php?page=kontak-kami">Kontak KamI</a>
			<a href="index.php?page=perihal-merokok">Perihal Merokok</a>
        </div>
        <div id="hw">
        </div>
	</div><!-- #footer -->
    <script type='text/javascript'>
	QueryLoader.init();
	</script>

</div><!-- #main-content -->
<?php echo '
<script type="text/javascript">
$(window).load(function() {
	$("#background").fullBg();
});
</script>
'; ?>

</body>
</html>