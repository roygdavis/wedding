<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>
<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="p-4 p-md-5 mb-4 rounded text-bg-primary">
        <div class="col-md-6 px-0">
            <h1 class="display-4"><?php the_title(); ?></h1>
            <p class="lead my-3"><?php $hero= get_post_meta(get_the_id(),'Hero caption',true); if ($hero) echo $hero; ?></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            </div>
            <div class="col-md-4">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php endwhile;
    endif; ?>
    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    <?php // comments_template(); ?>
</div>
<?php get_footer(); ?>