<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<aside id="sidebar">
  <?php   /* Widgetized sidebar, if you have the plugin installed. */
      if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

  <!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
  <section>
    <h2>Author</h2>
    <p>A little something about you, the author. Nothing lengthy, just an overview.</p>
  </section>
  -->
  <section>
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="fst-italic"><?php bloginfo('name') ?></h4>
      <p class="mb-0"><?php bloginfo('description') ?></p>
    </div>
  </section>

  <?php $args = array(
    'post_type' => 'page',
      'posts_per_page' => 3,
      'post_status' => array('publish'),
      'order' => 'ASC',
      'orderby' => 'menu_order',
      'tax_query' => array(
        array(
          'taxonomy' => 'category',
          'field'    => 'slug',
          'terms'    => array('show-in-sidebar') // These are the slugs of the categories you're interested in
        )
      )
    );

  $all_pages = new WP_Query($args);

  if ($all_pages) { ?>
  <section class="pt-2">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php while ($all_pages->have_posts()) {
      $all_pages->the_post(); ?>
      <div class="col w-100">
        <div class="d-inline-flex align-items-center w-100 justify-content-center text-bg-primary bg-gradient">
          <i class="fs-2 bi bi-collection p-2"></i>
          <h3 class="text-center mt-2"><?php the_title() ?></h3>
        </div>
        <div class="">
          <p class=""><?php $hero = get_post_meta(get_the_id(),'Hero caption',true); if ($hero) echo wp_strip_all_tags($hero); else echo wp_strip_all_tags( get_the_excerpt(get_the_ID()), true ); ?></p>
        </div>
        <div class="mt-auto">
          <a href="<?php echo get_page_link(get_the_ID()) ?>">
            Read more <i class="bi-arrow-right-circle"></i>
          </a>
        </div>
      </div>
  <?php } ?>
      </div>
      </section>
  <?php }

  wp_reset_postdata();

    ?>
    

  <?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?> 
  <section>
    
    <?php /* If this is a 404 page */ if (is_404()) { ?>
    <?php /* If this is a category archive */ } elseif (is_category()) { ?>
    <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for the day <?php the_time('l, F jS, Y'); ?>.</p>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for <?php the_time('F, Y'); ?>.</p>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for the year <?php the_time('Y'); ?>.</p>

    <?php /* If this is a search result */ } elseif (is_search()) { ?>
    <p>You have searched the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives
    for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

    <?php /* If this set is paginated */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a> blog archives.</p>

    <?php } ?>

  </section>
  <?php }?>
  


      <?php endif; ?>
</aside>

