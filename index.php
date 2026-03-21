<?php get_header(); ?>

<main>
  <section class="products_area">

    <!-- flexwrapで商品をならべる -->
    <ul class="product_content">
      <!-- 商品画像とタイトル、価格を表示  -->
      <?php
      $args = array('posts_per_page' => 8);
      ?>

      <?php $posts = get_posts($args); ?>
      <?php foreach ($posts as $post): ?>
        <?php setup_postdata($post); ?>
        <li class="product_item">
          <a href="<?php the_permalink(); ?>">
          <img class= "product_image" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
            <p class="product_title"><?php the_title() ?></p>
            <p class="product_price">¥<?php echo esc_html(get_post_meta($post->ID, 'price', true)) ?>+tax</p>
          </a>
        </li>
      <?php endforeach; ?>

      <?php wp_reset_postdata(); ?>






    </ul>
      <a class="view_more" 
      href="<?php echo esc_url(home_url('/category/products/'));?>"> VIEW MORE 
      </a>
  </section>
</main>

<?php get_footer(); ?>