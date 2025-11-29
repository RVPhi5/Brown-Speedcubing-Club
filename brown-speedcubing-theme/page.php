<?php get_header(); ?>

<section class="section">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('page'); ?>>
        <h1><?php the_title(); ?></h1>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Page not found.</p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
