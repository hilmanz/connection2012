<?php /* Smarty version 2.6.13, created on 2012-05-28 17:07:34
         compiled from marlboro/redeem-form.html */ ?>
<div id="badgesRedeem">
    <div id="content">
    	<div class="post postRedeem">
        	<h1>you have chosen <span class="blue">SAMSUNG GALAXY S2</span><br />
				please confirm or update the following delivery address </h1>
             <form id="redeemForm" action="index.php?page=redeem-success" method="post">
             	<div class="redeemForm">
                    <div class="row">
                        <label>Street</label>
                        <input type="text" name="street" />
                    </div>
                    <div class="row">
                        <label>Complex</label>
                        <input type="text" name="complex" />
                    </div>
                    <div class="row">
                        <label>Province</label>
                        <input type="text" name="province" />
                    </div>
                    <div class="row">
                        <label>City</label>
                        <input type="text" name="city" />
                    </div>
                    <div class="row">
                        <label>Phone</label>
                        <input type="text" name="phone" />
                    </div>
                    <div class="row">
                        <label>Mobile</label>
                        <input type="text" name="mobile" />
                    </div>
                    <div class="row agree">
                        <input type="checkbox" class="styled" />
                        <label>Agree to the <a href="index.php?page=tos" target="_blank">terms and conditions</a></label>
                       <input type="submit" value="Confirm &amp; Redeem" class="button" />
                    </div>
                </div><!-- end .redeemForm -->
             </form>
             <div id="requireBadge">
             	<h2>REQUIRED BADGES</h2>
                <div class="boxBadge">
                    <img src="img/badge/badge1.png" />
                    <input type="checkbox" class="styled" checked="checked" disabled="disabled" />
                </div>
                <div class="boxBadge">
                    <img src="img/badge/badge4.png" />
                    <input type="checkbox" class="styled" checked="checked" disabled="disabled" />
                </div>
                <div class="boxBadge">
                    <img src="img/badge/badge10.png" />
                    <input type="checkbox" class="styled" checked="checked" disabled="disabled" />
                </div>
                <div class="boxBadge">
                    <img src="img/badge/badge2.png" />
                    <input type="checkbox" class="styled" checked="checked" disabled="disabled" />
                </div>
             </div>
        	<div class="imgRedeem"></div>
        </div><!-- end .post -->
    </div><!-- end #content -->
</div><!-- end #badgesRedeem -->