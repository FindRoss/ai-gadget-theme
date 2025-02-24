<?php get_header(); ?>

<!-- 
What we need: 
- Heading
- Excerpt
- Image
- Publish Date
- Category
- Content
-->

<?php  require locate_template('breadcrumbs.php'); ?>

<div class="container">

  <article>

    <!-- Heading -->
    <section class="heading">
      <div class="heading__content">
        <h1><?php the_title(); ?></h1>
        <div class="date">Updated Jan 25</div>
      </div>
      <div class="heading__image">
        <?php if (has_post_thumbnail()): ?>
          <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" />
        <?php endif; ?>
      </div>
    </section>

    <!-- Section -->
    <section class="content">  
      <?php the_content(); ?>
    </section>

  </article>


  <?php 
    $args = array(
      'post_type'      => 'post', 
      'posts_per_page' => 3,
      
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :

      echo '<div class="cards card-grid">';
      

         while ($query->have_posts()) : $query->the_post(); 

          require locate_template('card.php');
  
      endwhile;
      echo '</div>';
    endif; ?>


</div>



<?php get_footer(); ?>

