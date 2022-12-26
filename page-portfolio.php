<?php
/**
 * Template Name: page-portfolio
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">

<?php
          $loop = new WP_Query(array('post_type' => 'jobs',
          'posts_per_page' => 36,
          // 'orderby'=>'title',
           'order'=>'ASC',
          ));
     ?>
     <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
     <?php    
          $custom = get_post_custom($post->ID);
          $screenshot_url = $custom["screenshot_url"][0];
          $website_url = $custom["website_url"][0];
     ?>
             
          <div class="module-portfolio">
          <h3 class="module-header"><?php the_title(); ?></h3>
          <a href="<?=$website_url?>"><?php the_post_thumbnail(); ?> </a>
          <?php the_content(); ?>
          </div>
          

<?php endwhile; ?>

					</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
