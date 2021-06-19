
<div class="err"></div>
<div class="success"></div>
<div class="container">
<form id="mobile-verification">
	<div class="mobile-row">
		<label>OTP is sent to Your Mobile Number</label>		
	</div>
	<div class="mobile-row">
		<input type="number"  id="mobileOtp" class="mobile-input" placeholder="Enter the OTP">	
	</div>
    <div id="loading-image">
		<img src="ajax-loader.gif" alt="ajax loader">
		</div>
	<div class="mobile-row">
		<input id="verify" type="button" class="btnVerify" value="Verify" onClick="verifyOTP();">		
	</div>
</form>
</div>
