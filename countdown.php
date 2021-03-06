<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	<link rel="stylesheet" type="text/css" href="css/connection2012-countdown.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>MARLBORO CONNECTIONS</title>
</head>

<body>
	<div id="countdown">
		<div id="countdown_dashboard">
			<div class="dash weeks_dash">
				<span class="dash_title">weeks</span>
				<div class="digit">0</div>
				<div class="digit">0</div>
			</div>

			<div class="dash days_dash">
				<span class="dash_title">days</span>
				<div class="digit">0</div>
				<div class="digit">0</div>
			</div>

			<div class="dash hours_dash">
				<span class="dash_title">hours</span>
				<div class="digit">0</div>
				<div class="digit">0</div>
			</div>

			<div class="dash minutes_dash">
				<span class="dash_title">minutes</span>
				<div class="digit">0</div>
				<div class="digit">0</div>
			</div>

			<div class="dash seconds_dash">
				<span class="dash_title">seconds</span>
				<div class="digit">0</div>
				<div class="digit">0</div>
			</div>

		</div>
		<script language="javascript" type="text/javascript">
			jQuery(document).ready(function() {
				$('#countdown_dashboard').countDown({
					targetDate: {
						'day': 		10,
						'month': 	06,
						'year': 	2012,
						'hour': 	11,
						'min': 		0,
						'sec': 		0
					}
				});
				
				$('#email_field').focus(email_focus).blur(email_blur);
				$('#subscribe_form').bind('submit', function() { return false; });
			});
		</script>
	</div>
    <div id="footer">
        <div id="site-info">
            <span>Informasi dalam website ini di tujukan untuk perokok berusia 18 tahun atau lebih dan tinggal di wilayah Indonesia </span>
        </div>
        <div class="menu-footer">
            <a href="">Halaman Utama</a>|
            <a href="https://login.marlboro.co.id/Templates/Termsandconditions.aspx" target="_blank">Syarat dan Ketentuan</a>|
            <a href="https://login.marlboro.co.id/Templates/RemoveMe.aspx" target="_blank">Hapus Saya</a>|
            <a href="https://login.marlboro.co.id/Templates/FAQ.aspx" target="_blank">Daftar Pertanyaan</a>|
            <a href="https://login.marlboro.co.id/Templates/Contactus.aspx" target="_blank">Kontak Kami</a>|
            <a href="http://www.pmi.com/id/smokingandhealth" target="_blank">Perihal Merokok</a>
        </div>
        <div id="hw">
        </div>
    </div><!-- #footer --> 
	<script type="text/javascript">
      var _gaq = _gaq || [];
    
      _gaq.push(['_setAccount', 'UA-867847-35']);
    
      _gaq.push(['_trackPageview']);
    
      (function() {
    
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    
      })();
    </script>
</body>

</html>
