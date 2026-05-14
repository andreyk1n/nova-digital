<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

<main>
    <?php
    if (have_rows('flexible_content')):
        while (have_rows('flexible_content')):
            the_row();
            get_template_part(
                'template-parts/components/' . get_row_layout()
            );

        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>