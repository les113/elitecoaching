<!-- bootstrap v3 menu -->   
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
		<?php /* function for dropdown menu */
			wp_nav_menu( array(
			  'menu' => 'top_menu',
			  'depth' => 2,
			  'container' => false,
			  'menu_class' => 'nav navbar-nav',
			  //Process nav menu using our custom nav walker
			  'walker' => new wp_bootstrap_navwalker())
			);
		?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- switch navbar from scroll to fixed on small screens -->
<script>
jQuery.noConflict();
    (function( $ ) {
        $(function() {
            (window).resize(function(){
               console.log('resize called');
               var width = $(window).width();
               if(width <= 760){
                   $('nav').removeClass('navbar-static-top').addClass('navbar-fixed-top');
               }
               else{
                   $('nav').removeClass('navbar-fixed-top').addClass('navbar-static-top');
               }
            })
            .resize();//trigger the resize event on page load.
        });
     });
</script>