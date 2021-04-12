<!-- Footer -->
		<div class="row footer">
		    <!-- Upper Footer Box -->
		    <div class="row ufooter">
		        <!-- Upper Footer Container -->
		        <div class="col-md-12">
		            <!-- Spacer -->
		            <div class="col-md-1"></div>
		            
		            <!-- Upper Footer Wrap -->
		            <div class="col-md-10">
		                <!-- UFooter Row -->
		                <div class="row">
		                    <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-3 col-sm-offset-0 col-xs-10 col-xs-offset-2">
		                        <h4>ABOUT US</h4>
		                        <p>
		                            Congo Freedom Alliance (CFA) is a 501 C 4 tax exempt nonprofit corporation approved by the United States Internal Revenue Service.
		                        </p>
		                        <p>
		                            <address>
		                                Congo Freedom Alliance<br />
                                        PO Box 246<br />
                                        Euless, Texas 76039-3661<br />
		                            </address>
		                            Email: <a data-ajax="false" href="mailto:congofreedomalliance@gmail.com">congofreedomalliance@gmail.com</a>
		                        </p>
		                    </div>
		                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4" style="border-left:solid 1px rgba(255,255,255,0.10);">
		                        <h4>MENU</h4>
		                        <ul class="footer-ul">
		                            <li><a data-ajax="false" href="index.php">Home</a></li>
		                            <li><a data-ajax="false" href="boards.php">Boards</a></li>
		                            <li><a data-ajax="false" href="mission.php">Mission</a></li>
		                            <li><a data-ajax="false" href="protest.php">Protest</a></li>
		                            <li><a data-ajax="false" href="about.php">About</a></li>
		                            <li><a data-ajax="false" href="library.php">Library</a></li>
		                        </ul>
		                    </div>
		                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4" style="border-left:solid 1px rgba(255,255,255,0.10);">
		                        <h4>CONTACT FORM</h4>
		                        <form role="form" action="./comp/mail.php" method="post" id="contact">
                                <br style="clear:both">
                            				<div class="form-group">
                        						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        					</div>
                        					<div class="form-group">
                        						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        					</div>
                                            <div class="form-group">
                                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" rows="7"></textarea>
                                                <span class="help-block"></span>                    
                                            </div>
                                    
                                <button type="button" id="submit" name="submit" class="btn btn-success">Submit</button>
                                </form>
                                <br />
                                <div class="alert alert-danger" style="display:none;" id="errorMessage" role="alert">
                                  <strong>Error:</strong> Not all fields have been filled in.
                                </div>
                                <div class="alert alert-success" style="display:none;" id="successMessage" role="alert">
                                  <strong>Sent:</strong> Your inquiry has been sent!
                                </div>
		                    </div>
		                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4" style="border-left:solid 1px rgba(255,255,255,0.10);">
		                        <h4>SOCIAL MEDIA</h4>
		                        <a data-ajax="false" href="https://facebook.com/congoalliance"><img height="50px" src="./images/facebook.png" /></a>
				                <a data-ajax="false" href="https://twitter.com/congoalliance"><img height="50px" src="./images/twitter.png" /></a>
		                    </div>
		                </div>
		            </div>
		            
		            <!-- Spacer -->
		            <div class="col-md-1"></div>
		        </div>
		    </div>
		    
		    <!-- Copyright Information -->
		    <div class="row footercopyright">
		        <div class="col-md-5 col-md-offset-1 col-xs-5 col-xs-offset-1">
		            Copyright &copy; 2017 Congo Freedom Alliance
		        </div>
		        <!-- Spacer -->
		        <div class="col-md-1"></div>
		        
		        <div class="col-md-5 footerwatermark col-xs-5">
		            Created by <a data-ajax="false" href="http://tidwell.xyz/">Leighton Tidwell</a> &dash; <a data-ajax="false" href="sitemap.xml">Sitemap</a>
		        </div>
		    </div>
		</div>
		<script type="text/javascript">
		    $("#submit").click( function() {
                if( $("#name").val() && $("#email").val() && $("#message").val() ) {
                    $("#errorMessage").hide();
                    $("#successMessage").show();
                    $.post( "http://congofreedom.org/comp/mail.php", $("form#contact").serialize(), function(data) {
                        console.log(data);
                        $('#contact')[0].reset();
                       }
                    );
                }
                else{
                    $("#errorMessage").show();
                }
                
            });
		</script>