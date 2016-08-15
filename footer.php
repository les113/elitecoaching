    <div class="prefooterwrap"><!-- footer -->
        <div class="container">  
            
            <div id="prefooter">
            </div>
            
 		</div> <!-- end container -->
    </div> <!-- end wrapper -->           
            
            
    <div class="footerwrap"><!-- footer -->
        <div class="container">  

			<footer id="footer" class="marginTop marginBottom">
				<div class="row">
					  <div class="col-md-3">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
                        <ul id="social-links">
                            <li><a href="https://twitter.com/RogergRawlinson" target="_blank" class="fa fa-twitter"><h2>Twitter</h2></a></li>
                            <li><a href="https://www.facebook.com/roger.rawlinson" target="_blank" class="fa fa-facebook"><h2>Facebook</h2></a></li>
                            <li><a href="http://uk.linkedin.com/pub/roger-rawlinson/24/3b/a09" target="_blank" class="fa fa-linkedin"><h2>Linkedin</h2></a></li>
						</ul>
					  </div>                      
                      
					  <div class="col-md-9 affiliationlogos">
						<h5>Affiliated to:</h5>
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					  </div>
				</div>
                
				<div class="row">
                    <div class="col-sm-10">
					   <h5 class="copyright">Copyright <?php echo date("Y"); ?> Elite Coaching</h5>
                    </div>
					<div class="col-sm-2" >
						<div><a href="http://www.lamtha2.co.uk" target="_blank"><span class="designedBy"></span></a></div>
					</div>
				</div>
			</footer>
     
		</div> <!-- end container -->
    </div> <!-- end wrapper -->

	<noscript>
		<div class="container" style="text-align:center; font-size:24px;">
			<div style="position: fixed; top: 0px; left: 0px; z-index: 3000; height: 100%; width: 100%; background-color: #FFFFFF;">
				<p>This website requires Javascript to be enabled in your browser.</p>
				<p>Please follow the instructions to enable Javascript at <a href="http://www.enable-javascript.com/" target="_blank">http://www.enable-javascript.com/</a></p>
			</div>
		</div>
	</noscript>
	
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap JavaScript plugins -->
    <script src="<?php bloginfo( 'template_url' ); ?>/bootstrap-3.3.1/js/bootstrap.min.js"></script>

    <!-- smooth scroll script -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/smoothscroll.js" type="text/javascript" ></script>

    <!-- mob menu hide on scroll -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/menu.js"></script>

    <!-- To Top scripts http://www.mattvarone.com/web-design/uitotop-jquery-plugin/ -->
    <!-- the necessary css for UItoTop -->	
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url' ); ?>/jquery.ui.totop/css/ui.totop.css" />
    <!-- easing plugin ( optional ) -->
    <script src="<?php bloginfo( 'template_url' ); ?>/jquery.ui.totop/js/jquery.easing.js" type="text/javascript"></script>
    <!-- UItoTop plugin -->
    <script src="<?php bloginfo( 'template_url' ); ?>/jquery.ui.totop/js/jquery.ui.totop.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>

	<!-- parallax background -->
	<script  src="<?php bloginfo( 'template_url' ); ?>/parallax.js-1.4.2/parallax.min.js" type="text/javascript" ></script>
	
<!-- statcounter -->
<?php include('inc/statcounter.php') ?>

<?php wp_footer();?>

</body>
</html>


	

