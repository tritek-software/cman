<?php

/**
 * Template Name: About
 *
 * @package WP Pro Real Estate 7
 * @subpackage Template
 */

get_header();

// Hero Search

?>

<div class="container inner-page">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/" class="link-default">Главная</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
    </ol>
  </nav>

  <h1 class="page-title"><?php the_title(); ?></h1>


  <?php if(get_field('inner-img')) : ?>
    <img src="<?php the_field('inner-img'); ?>" alt="<?php the_title(); ?>" class="aboutteam__thumb">
  <?php endif; ?>

  <div class="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;?>
    <?php endif;?>
  </div> <!-- //.content -->



  <?php if (have_rows('sotrudnik')) : ?>
    <div class="aboutteam row">
        <h2 class="section-title"><?php the_field('team-title'); ?></h2>
        <div class="row">

          <?php while (have_rows('sotrudnik')) : the_row(); ?>
            <div class="col-6 col-sm-6 col-lg-4 col-xl-3">
              <div class="aboutteam__item ">
                <div class="aboutteam__img">
                  <img src="<?php the_sub_field('photo'); ?>" alt="">
                </div>
                <div class="aboutteam__info">
                  <div class="aboutteam__name"><?php the_sub_field('name'); ?></div>
                  <div class="aboutteam__prof"><?php the_sub_field('who'); ?></div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>

        </div> <!-- //.row -->
    </div> <!-- //.section-features -->
  <?php endif; ?>

  

  <?php if (have_rows('feat')) : ?>
    <section class="section-features">
        <h2 class="section-title"><?php the_field('feat-title'); ?></h2>
        <div class="row">

            <?php while (have_rows('feat')) : the_row(); ?>
            <div class="col-md-4 mb-5">
                <div class="bg-grey">
                <div class="row feature-item">
                    <div class="col-3 col-md-3">
                    <img src="<?php the_sub_field('icon'); ?>" alt="" class="float-md-left">
                    </div>
                    <div class="col-8 col-md-9">
                    <h4><?php the_sub_field('title'); ?></h4>
                    <p><?php the_sub_field('descr'); ?></p>
                    </div>
                </div>
                </div> <!-- //.bg-grey -->
            </div> <!-- //.col -->
            <?php endwhile; ?>

        </div> <!-- //.row -->
    </section> <!-- //.section-features -->
  <?php endif; ?>

  <?php get_template_part('/includes/contacts-tabs'); ?>

</div> <!-- //.container -->



<!-- //Hero Search -->
<?php


get_footer(); ?>