<?php get_header(); ?>

<main>
    <h1><?php single_cat_title(); ?></h1>
    <section class="products_area">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <div class="product_content">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large', ['class' => 'product_img']); ?>
                    </a>
                    <div class="product-description">
                        <h2 class="product_name"><?php the_title(); ?></h2>
                        <p class="product_price"><?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?>円</p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>