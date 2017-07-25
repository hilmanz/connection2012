<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/connection2012.css" />
    <link rel="stylesheet" type="text/css" href="css/skins/connection/skin.css" />
    <link rel="stylesheet" type="text/css" href="css/skins/ie7/skin.css" />
    <link rel="stylesheet" type="text/css" href="css/scrollbar.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery-animate-css-rotate-scale.js"></script>
    <script src="js/jquery-css-transform.js"></script>
    <script src="js/connection.js"></script>
    <script src="js/custom-form-elements.js"></script>
	<script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
	<title>MARLBORO CONNECTIONS</title>
</head>

<body>
    <div id="body">
        <div id="universal">
           <div id="header">
            	<div id="logo">
                	<a class="logo" href="index.php?menu=about">&nbsp;</a>
                </div>
                <div id="navigation">
                	<ul class="nav">
                    	<li><a <?php if($_GET['menu']=='prizes'){ ?> class="current" <?php } ?> 
                     		   <?php if($_GET['menu']=='howtoplay'){ ?> class="current" <?php } ?> 
                     		   <?php if($_GET['menu']=='tos'){ ?> class="current" <?php } ?> 
                     		   <?php if($_GET['menu']=='about'){ ?> class="current" <?php } ?> 
                        		href="index.php?menu=about">About Connections</a>
                        	<ul>
                            	<li><a <?php if($_GET['menu']=='prizes'){ ?> class="current" <?php } ?> href="index.php?menu=prizes">Prizes</a></li>
                            	<li><a <?php if($_GET['menu']=='howtoplay'){ ?> class="current" <?php } ?> href="index.php?menu=howtoplay">How To Play</a></li>
                            	<li><a <?php if($_GET['menu']=='tos'){ ?> class="current" <?php } ?> href="index.php?menu=tos">Terms &amp; Conditions</a></li>
                            	<li><a href="#"></a></li>
                            </ul>
                        </li>
                    	<li><a <?php if($_GET['menu']=='update-clues'){ ?> class="current" <?php } ?> 
                        		<?php if($_GET['menu']=='connection-activity'){ ?> class="current" <?php } ?> 
                        		href="index.php?menu=update-clues">Update&nbsp;Clues</a>
                        	<ul>
                            	<li><a <?php if($_GET['menu']=='update-clues'){ ?> class="current" <?php } ?> href="index.php?menu=update-clues">Clues &amp; Hot News</a></li>
                            	<li><a <?php if($_GET['menu']=='connection-activity'){ ?> class="current" <?php } ?> href="index.php?menu=connection-activity">Connections Activity</a></li>
                            </ul>
                        </li>
                    	<li><a  <?php if($_GET['menu']=='badge-trade'){ ?> class="current" <?php } ?> 
								<?php if($_GET['menu']=='badges'){ ?> class="current" <?php } ?> 
                                <?php if($_GET['menu']=='badge-auction'){ ?> class="current" <?php } ?>
								<?php if($_GET['menu']=='redeem'){ ?> class="current" <?php } ?> 
                                href="index.php?menu=badges">Badges</a>
                        	<ul>
                            	<li><a <?php if($_GET['menu']=='badge-trade'){ ?> class="current" <?php } ?> href="index.php?menu=badge-trade">Badge Trade</a></li>
                            	<li><a <?php if($_GET['menu']=='badge-auction'){ ?> class="current" <?php } ?> href="index.php?menu=badge-auction">Badge Auction</a></li>
                            	<li><a <?php if($_GET['menu']=='redeem'){ ?> class="current" <?php } ?> href="index.php?menu=redeem">Redeem Badge</a></li>
                            </ul>
                        </li>
                    	<li><a <?php if($_GET['menu']=='game'){ ?> class="current" <?php } ?> href="index.php?menu=game">Games</a></li>
                    	<li class="last"><a <?php if($_GET['menu']=='input-codes'){ ?> class="current" <?php } ?> href="index.php?menu=input-codes">Input Codes</a></li>
                    </ul>
                </div>
            </div><!-- end #header -->
            <div id="container">
            	<div id="subnavigation">
                	<a <?php if($_GET['menu']=='myprofile'){ ?> class="current" <?php } ?> href="index.php?menu=myprofile">My Profile</a>
                	<a <?php if($_GET['menu']=='messages'){ ?> class="current" <?php } ?> href="index.php?menu=messages">Messages</a>
                	<a href="#" onClick="(alert('LINK TO MOP!'))">Refer a Friend</a>
                	<a href="#">Sign Out</a>
                </div>
				<?php 
                if($_GET['menu']=='about'){
                    include("about.php");
                }else if($_GET['menu']=='prizes'){ 
                    include("prizes.php");
                }else if($_GET['menu']=='howtoplay'){ 
                    include("howtoplay.php");
                }else if($_GET['menu']=='tos'){ 
                    include("tos.php");
                }else if($_GET['menu']=='update-clues'){ 
                    include("update-clues.php");
                }else if($_GET['menu']=='yellow-cab-hunt'){ 
                    include("yellow-cab-hunt.php");
                }else if($_GET['menu']=='connection-activity'){ 
                    include("connection-activity.php");
                }else if($_GET['menu']=='badges'){ 
                    include("badges.php");
                }else if($_GET['menu']=='badge-auction'){ 
                    include("badge-auction.php");
                }else if($_GET['menu']=='badge-auction-bid'){ 
                    include("badge-auction-bid.php");
                }else if($_GET['menu']=='badge-trade'){ 
                    include("badge-trade.php");
                }else if($_GET['menu']=='badge-trade-list'){ 
                    include("badges-trade-list.php");
                }else if($_GET['menu']=='redeem'){ 
                    include("redeem.php");
                }else if($_GET['menu']=='redeem-form'){ 
                    include("redeem-form.php");
                }else if($_GET['menu']=='redeem-success'){ 
                    include("redeem-success.php");
                }else if($_GET['menu']=='game'){ 
                    include("game.php");
                }else if($_GET['menu']=='input-codes'){ 
                    include("input-codes.php");
                }else if($_GET['menu']=='messages'){ 
                    include("messages.php");
                }else if($_GET['menu']=='myprofile'){ 
                    include("myprofile.php");
                }else{ 
                    include("home.php");
                }?>
			</div><!-- end #container -->
        </div><!-- end #universal -->
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
    </div><!-- end #body -->
</body>


</body>
</html>
