<h1 style="color:brown; background: pink">ERIC!</h1>

<?php
$homepageEvents = new WP_Query(array(
  'posts_per_page' => 10,
  'post_type' => 'event'
));

while ($homepageEvents->have_posts()) {

  $homepageEvents->the_post(); ?>

  <div class="event-summary">
    <a href="#" class="event-summary__date t-center">
      <span class="event-summary__month">Mar</span>
      <span class="event-summary__day">25</span>
    </a>
    <div class="event-summary__content">
      <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
      <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
    </div>
  </div>

<?php }

?>


TUTWORK: Following Brad Schiff (LearnWebCode) Udemy course: Become a WordPress Developer: Unlocking Power With Code [https://www.udemy.com/course/become-a-wordpress-developer-php-javascript]. This is the wp-content folder as we are creating custom post types with plugins and themes. (2022)