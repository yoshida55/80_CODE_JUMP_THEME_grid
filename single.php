<?php get_header(); ?>

<main class="main_area">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- 商品と説明を左右にわけるflex -->
      <section class="detail_area">
        <div class="detail_wrapper">

          <!-- サムネイルを表示 -->
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>

        </div>
        <div class="detail_wrapper">
          <h3 class="detail_text"><?php the_title(); ?></h3>
          <?php the_content(); ?>
          <p class="detail_text">¥<?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?></p>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>

</main>


<?php get_footer(); ?>