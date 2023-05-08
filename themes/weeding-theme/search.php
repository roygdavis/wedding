<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-primary">
    <div class="col-md-6 px-0">
        <h1 class="display-4">Search results</h1>
    </div>
  </div>
  <nav>
    <div><?php next_posts_link('&laquo; Older Entries') ?></div>
    <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php if (have_posts()) : ?>  
        <?php while (have_posts()) : the_post(); ?>
        <div class="row">
          <div class="col">
            <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_strip_all_tags( get_the_excerpt(get_the_ID()), true ); //echo get_the_excerpt(get_the_ID()); ?></p>
          </div>
        </div>
        <?php endwhile; ?>
        <nav>
          <div><?php next_posts_link('&laquo; Older Entries') ?></div>
          <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </nav>
        <?php else : ?>
        <div class="row">
          <div class="col">  
            <h2>No posts found. Try a different search?</h2>
            <?php get_search_form(); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
