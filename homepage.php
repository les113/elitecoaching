<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>

	<body class="homepage">

	<!-- menu -->   
	<?php include('inc/menu.php') ?>
	
    <!-- header -->
	<div class="headerwrap" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/bg.png"><!-- header -->      
		<div class="container">
			<header>
				<div class="row">
					<div class="header col-sm-12">
						<div class="sitelogo">
							<a href="<?php echo site_url(); ?>"><img alt="Elite Coaching Logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.png"/></a>
						</div>
						<div class="strapline">
									<h1 class="site-description"><?php bloginfo('description'); ?></h1>
									<div class="quote"><?php echo get_post_meta($post->ID, "quote", true); ?></div>
						</div>
						<div class="scrolldown">
							<a href="#content"><i class="fa fa-caret-down"></i></a>
						</div>
					</div>
				</div>
			</header>
		</div> <!-- end container -->     
	</div> <!-- end wrapper -->

	<!-- content -->
	<div id="pageContent">
		<div id="slide2" class="wrapper">
			<div class="container"> <!-- page content -->
				<section><a id="content" class="anchor"></a> <!-- page content -->
					<div class="row">	
						<div class="col-md-6">
							<!-- pull in homepage content -->
							<div class="content">
							<?php
							$page_id = 47;
							$post_id = get_post($page_id);
							$content = $post_id->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo $content;
							?>
							</div>
							<span class="btn"><a href="<?php echo site_url(); ?>/executive-coaching/">Learn more<i class="fa fa-caret-right"></i></a></span>
						</div>	 
						
						<div class="col-md-6">
							<div id="sect2"></div>
							<!-- pull in homepage content -->
							<div class="content">
							<?php
							$page_id = 58;
							$post_id = get_post($page_id);
							$content = $post_id->post_content;
							$content = apply_filters('the_content', $content);
							$content = str_replace(']]>', ']]>', $content);
							echo $content;
							?>
							</div>
							<span class="btn"><a href="<?php echo site_url(); ?>/organisational-development-consultancy/">Learn more<i class="fa fa-caret-right"></i></a></span>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<div id="slide3" class="wrapper">
			<div class="container"> 
				<section>
					<div class="row">	
						<div class="col-md-12 center">
							<h2>Case Studies</h2>
						</div>	  
					</div>
					<div class="row casestudies marginTop">	
						<div class="col-sm-6 col-md-3">
							<div class="casestudyBox">
							<div class="casestudyTitle box1">
								<i class="fa fa-user"></i>
								<h3><?php echo get_post_meta($post->ID, "feat1-heading", true); ?></h3>
							</div>
								<p><?php echo get_post_meta($post->ID, "feat1-content", true); ?></p>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="casestudyBox">
							<div class="casestudyTitle box2">
								<i class="fa fa-road"></i>
								<h3><?php echo get_post_meta($post->ID, "feat2-heading", true); ?></h3>
							</div>
								<p><?php echo get_post_meta($post->ID, "feat2-content", true); ?></p>							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="casestudyBox">
							<div class="casestudyTitle box3">
								<i class="fa fa-sitemap"></i>
								<h3><?php echo get_post_meta($post->ID, "feat3-heading", true); ?></h3>
							</div>
								<p><?php echo get_post_meta($post->ID, "feat3-content", true); ?></p>							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="casestudyBox">
							<div class="casestudyTitle box4">
								<i class="fa fa-users"></i>
								<h3><?php echo get_post_meta($post->ID, "feat4-heading", true); ?></h3>
							</div>
								<p><?php echo get_post_meta($post->ID, "feat4-content", true); ?></p>							</div>
						</div>				
					</div>
					<div class="row">
						<div class="col-md-12 marginTop center">
						<span class="btn"><a href="<?php echo site_url(); ?>/case-studies/">Learn more<i class="fa fa-caret-right"></i></a></span>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<div id="slide4" class="wrapper">
			<div class="container">
				<section>
					<div class="row">	
						<div class="col-md-6 center">
							<div class="circleImg"></div>
							<div class="marginTop">Roger Rawlinson</div>
						</div>	  
						<div class="col-md-6">
							<!-- Start the Loop. --> 
							 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							 <!-- Display the Post's Content -->

							 <?php the_content(); ?>

							 <!-- Stop The Loop (but note the "else:" - see next line). -->
							 <?php endwhile; else: ?>

							 <!-- The very first "if" tested to see if there were any Posts to -->
							 <!-- display.  This "else" part tells what do if there weren't any. -->
							 <h1>Page not found</h1>
							 <p>Sorry, that page no longer exists. The page may have been removed or you have followed an obsolete link.
							 Please use the site's navigation menus to try again.</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

							 <!-- REALLY stop The Loop. -->
							 <?php endif; ?>

							<!-- /post -->
							
							<span class="btn"><a href="<?php echo site_url(); ?>/about-elite-coaching/">Learn more<i class="fa fa-caret-right"></i></a></span>
						</div> 
					</div>
				</section>
			</div>
		</div>	
	</div>
	<!-- end page container -->   

<?php get_footer(); ?>