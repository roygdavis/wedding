<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-primary">
        <div class="col-md-6 px-0">
            <h1 class="display-4">Latest News</h1>
        </div>
    </div>
    <section class="pt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="row gy-4 row-cols-1 row-cols-md-1">
                    <?php if (have_posts()) : ?>
                    <?php $switch=false; ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php $switch = !$switch; ?>
                    <?php if ($switch) : ?>
                    <div class="col">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="w-100">
                            <!--<img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">-->
                                <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'rounded img-fluid d-block w-100 fit-cover', 'style' => 'height: 200px;' ) ); ?>
                            </div>
                            <div class="py-4 py-lg-0 px-lg-4">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <?php the_content('Read the rest of this entry &raquo;'); ?>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <div class="col">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="py-4 py-lg-0 px-lg-4">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <h4><?php the_title(); ?></h4>
                                </a>
                                <?php the_content('Read the rest of this entry &raquo;'); ?>
                            </div>
                            <div class="w-100">
                            <!--<img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">-->
                                <?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'rounded img-fluid d-block w-100 fit-cover', 'style' => 'height: 200px;' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <nav>
                        <div><?php next_posts_link('&laquo; Older Entries') ?></div>
                        <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
                    </nav>
                    <?php else : ?>
                    <h2>Not Found</h2>
                    <p>Sorry, but you are looking for something that isn't here.</p>
                    <?php get_search_form(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>