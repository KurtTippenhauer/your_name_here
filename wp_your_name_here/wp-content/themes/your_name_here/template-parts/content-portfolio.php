<?php
/**
 * Template part for displaying page content in page-portfolio.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Your_Name_Here
 */

?>
<div class="outer-flex-div">
    <div class="portfolio-flex-div">
        <section class="section-portfolio">
            <?php 
// the portfolio project query
$portfolio_project_query = new WP_Query(array('post_type'=>'portfolio-project', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $portfolio_project_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $portfolio_project_query->have_posts() ) : $portfolio_project_query->the_post(); ?>
    <li style="background-image: linear-gradient( rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(<?php
        the_post_thumbnail_url();
        ?>)"><a class="the-porfolio-post" href="<?php the_permalink(); ?>"><h3 class="title-portfolio"><?php the_title();?></h3> <div class="portfolio-page-row" ><?php the_excerpt();?></div></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
        </section>
    </div>
</div>