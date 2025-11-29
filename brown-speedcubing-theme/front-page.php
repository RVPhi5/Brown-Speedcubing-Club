<?php get_header(); ?>

<section class="hero">
  <div class="hero-inner">
    <h1>Brown Speedcubing Club</h1>
    <p>Speedsolving, community, and competitions at Brown University.</p>
    <div class="hero-buttons">
      <a class="btn" href="<?php echo esc_url(site_url('/join')); ?>">Join the Club</a>
      <a class="btn btn-secondary" href="<?php echo esc_url(site_url('/events')); ?>">Upcoming Events</a>
    </div>
  </div>
</section>

<section class="section section-columns">
  <div class="section-column">
    <h2>What we do</h2>
    <p>
      We meet regularly to practice solves, share tips, and help new cubers get faster.
      We welcome all skill levels, from complete beginners to sub-10 solvers.
    </p>
  </div>
  <div class="section-column">
    <h2>Competitions</h2>
    <p>
      We organize and attend WCA competitions in the region, and work with campus
      groups to host speedcubing events at Brown.
    </p>
  </div>
  <div class="section-column">
    <h2>Community</h2>
    <p>
      Our club is a space to meet other puzzle enthusiasts, collaborate on projects,
      and build a supportive, nerdy community on campus.
    </p>
  </div>
</section>

<section class="section">
  <h2>Latest updates</h2>
  <?php
  $latest_posts = new WP_Query(array(
    'posts_per_page' => 3,
  ));
  ?>

  <?php if ($latest_posts->have_posts()) : ?>
    <div class="cards">
      <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
        <article <?php post_class('card'); ?>>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="card-meta">
            <?php the_time('F j, Y'); ?>
          </div>
          <div class="card-body">
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  <?php else : ?>
    <p>No posts yet. Stay tuned for updates!</p>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
