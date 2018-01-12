<?php
/**
 * GLR
 *
 * Template Name: About
 */

get_header();
the_post();
?>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content" role="main">
<div class="row wrapper">
	<!-- Page -->
	<div id="page" class="col s12" itemprop="MainContentOfPage">
		<div class="center-align">
			<img src="<?=assetDir?>/img/strive.png" />
			
			<h2>Mission</h2>
			<p class="skinny">Our Mission is the most important thing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>

			<a href="javascript:;" class="btn blue">Learn More</a>

			<hr />
			<img src="<?=assetDir?>/img/partnerships.png" />
			
			<h2>Partnerships</h2>
			<p class="skinny">Our Mission is the most important thing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>

			<a href="javascript:;" class="btn blue">Learn More</a>

			<hr />
			<img src="<?=assetDir?>/img/leaderships.png" />
			
			<h2>Leadership</h2>
			<p class="skinny">Our Mission is the most important thing. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>

			<a href="javascript:;" class="btn blue">Learn More</a>			
		</div>
	</div>
</div>

<div class="join-callout dark-blue center-align">
	<div class="wrapper">
		<img src="<?=assetDir?>/img/emblem-light.png" />

		<h2>Join Georgians for Lawsuit Reform</h2>
		<p class="skinny">Joining the GLR will make you awesome. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>

		<a href="javascript:;" class="btn light-blue">Join Now</a>
	</div>
</div>
</section>

<?php get_footer() ?>