<?php
/* the template for pages */
?>
<?php get_header(); ?>

<body class="subpage">

<!-- menu -->   
<?php include('inc/menu.php') ?>

<!-- header -->
<div class="subpageheaderwrap" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_url' ); ?>/img/bg.png"><!-- header -->
		   
	<div class="container">
		<header>
			<div class="row">
				<div id="headersubpage" class="col-sm-12">
					<a href="<?php echo site_url(); ?>"><img class="logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt="logo"/></a>
				</div>
			</div>
		</header>
	</div> <!-- end container -->
		
</div> <!-- end wrapper -->

   <!-- content -->
<div id="pageContent">
	<div class="wrapper">
		<div class="container"> 
			<div class="row">	
				<div id="content" class="col-sm-9">

				<!-- Start the Loop. --> 
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- Display the Post's Content -->

				<div><h1><?php the_title(); ?></h1></div>
				<div class="dashedline"></div>
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
                     
				</div>
				<div id="sidebar" class="col-sm-3 marginTop marginBottom">
					<?php get_sidebar();?>  <!-- this is sidebar 1 -->
					<div><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
			    </div>			
			</div>           
		</div><!-- end page container --> 
	</div>
</div>

<?php get_footer(); ?>