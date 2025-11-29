<?php get_header(); ?>

<section class="section">
  <h1><?php bloginfo('name'); ?> Blog</h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('post-item'); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-meta">
          Posted on <?php the_time('F j, Y'); ?>
        </div>
        <div class="post-excerpt">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <div class="pagination">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
