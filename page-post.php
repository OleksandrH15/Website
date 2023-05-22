<?php
/*
Template Name: Post
Template Post Type: post
*/
?>
<?php get_header(); ?>




<?php
// Loop through the posts
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta">
                <span class="post-date"><?php the_date(); ?></span>
                <span class="post-author"><?php the_author(); ?></span>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>
<?php
    endwhile;
else :
    echo 'No posts found.';
endif;
?>

<?php
    

     // Виведення коментарів
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
?>


<?php get_footer(); ?>
