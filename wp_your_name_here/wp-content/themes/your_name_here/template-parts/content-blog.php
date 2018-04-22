<?php
/**
 * Template part for displaying page content in page-blog.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Your_Name_Here
 */

?>
<div class="outer-flex-div">
    <div class="blog-flex-div">
        <section class="section-blog">
            <h1 class="header-title-blog">Blog</h1>
            <?php 
// the query
$the_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <li><a class="the-blog-post" href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3> <div class="blog-page-row"><?php the_post_thumbnail(); the_excerpt();?></div></a></li>
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