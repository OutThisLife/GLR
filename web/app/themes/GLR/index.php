<?php
/**
 * Theme Name: GLR
 * Version: 1.0
 * Author: Talasan Nicholson
 * Author URI: http://www.nwsco.org
 */

get_header();
?>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content" role="main">
<div class="the-posts row wrapper news">
	<div class="center-align">
		<img src="<?=assetDir?>/img/news-events.png" />
		<h1>News + Events</h1>
	</div>

	<div class="articles">
	<?php
	if (have_posts()):
	while (have_posts()):
		the_post();
		get_template_part('build', get_post_type());
	endwhile;

	else:
		echo '<p>Sorry, there are no posts at the moment. Please check back again later!</p>';
	endif;
	?>
	</div>
</div>

<form class="filters">
<div class="wrapper">	
	<select>
		<option>Sort By All</option>
	</select>
	<select>
		<option>Sort By All</option>
	</select>
	<input type="text" id="search" class="search" name="s" />
</div>
</form>
</section>

<?php get_footer() ?>