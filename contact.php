<?php include_once("inc/header.php"); ?>
        
            <a name="content"></a>
            
            <div id="left-col">
            Left
            </div><!--/Left Col-->
            
            <div id="mid-col">
            <h1>Contact Us</h1>
            
            	<form id="enquiry-form" method="post" class="clearfix">			
										
					<p class="success" style="display:none;"><img src="img/tick.png" width="50" height="50" align="left" alt="Tick" /><strong>Thank you, your enquiry has been sent successfully. A BNI representative will be in touch as soon as possible.</strong></p>
				
					<div class="formfade clearfix">
				
						<div class="form-group clearfix">
							<div class="clearfix">
							<label for="name">Name *</label>
							<input type="text" name="name" id="name" tabindex="1" class="global-form-input" />
							</div>
							<div class="clearfix">
							<label for="phone">Contact Number *</label>
							<input type="text" name="phone" id="phone" tabindex="2" class="global-form-input" />
							</div>
							<div class="clearfix">
							<label for="email">E-mail Address *</label>
							<input type="text" name="email" id="email" tabindex="3" class="global-form-input" />
							</div>
							<div class="clearfix">
							<label for="category">Type of Business *</label>
							<input type="text" name="category" id="category" tabindex="4" class="global-form-input" />
							</div>
						</div><!--/Form Group-->
					
						<div class="form-group clearfix">
							<div class="clearfix">
							<span class="red">Please indicate your preferred venue:</span>
							</div>
							<input type="radio" name="group" id="Bradford" value="Bradford" tabindex="5" class="global-form-radio" />Campanile - Bradford <br />
							<input type="radio" name="group" id="Carwood-Park" value="Carwood-Park" tabindex="6" class="global-form-radio" />Carwood Park - Leeds <br />
							<input type="radio" name="group" id="Keighley" value="Keighley" tabindex="7" class="global-form-radio" />Central Hall - Keighley <br />
							<input type="radio" name="group" id="Cookridge" value="Cookridge" tabindex="8" class="global-form-radio" />Cookridge Golf Club - Leeds <br />
							<input type="radio" name="group" id="Crowne-Plaza" value="Crowne-Plaza" tabindex="9" class="global-form-radio" />Crowne Plaza - Leeds <br />
							<input type="radio" name="group" id="Oulton-Hall" value="Oulton-Hall" tabindex="10" class="global-form-radio" />Oulton Hall - Leeds <br />
							<input type="radio" name="group" id="Radisson" value="Radisson" tabindex="11" class="global-form-radio" />Radisson Hotel - Leeds <br />
							<input type="radio" name="group" id="Sandal-Wakefield" value="Sandal-Wakefield" tabindex="12" class="global-form-radio" />Sandal Rugby Club - Wakefield <br />
							<input type="radio" name="group" id="Ilkley" value="Ilkley" tabindex="13" class="global-form-radio" />Tennis Club - Ilkley <br />
							<input type="radio" name="group" id="Weetwood" value="Weetwood" tabindex="14" class="global-form-radio" />Weetwood Hall - Leeds <br />
							<input type="radio" name="group" id="YSP-Wakefield" value="YSP-Wakefield" tabindex="15" class="global-form-radio" />Yorkshire Sculpture Park - Wakefield
						</div><!--/Form Group-->
					
						<div class="submitdiv clearfix">
						<div id="sp_verify">
						<label for="userverify">User</label>
						<input type="text" id="userverify" name="userverify" tabindex="11" />
						</div>
						
						<input type="file" name="sample" id="sample" />
						
						<input type="checkbox" name="radiosample" value="yes" />
						
						
						<input type="submit" name="submit" id="submit" value="Submit Enquiry"  class="global-form-submit" onClick="_gaq.push(['_trackEvent', 'Enquiry', 'Submit', 'Form Enquiry']);" />
						</div>
					
					</div><!--formfade-->

				</form>
            </div><!--/Middle Col-->
            
            <div id="right-col">
            Right
            </div><!--/Right Col-->
            
<?php include_once("inc/footer.php"); ?>
