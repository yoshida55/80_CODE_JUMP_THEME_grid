<?php get_header(); ?>

<main>
  <div class="content wrapper">
    <?php
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
    ?>
    <h1 class="page-title"><?php echo $catname; ?></h1>
    <ul class="product-list">
      <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="">
              <p><?php the_title(); ?></p>
              <p>&yen;<?php echo esc_html(get_post_meta($post->ID, 'price', true)); ?> +tax</p>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
    <?php
      if(function_exists("pagination")) {
        pagination($wp_query->max_num_pages);
      }
    ?>
  </div>
</main>

<?php get_footer(); ?>