<?php get_header(); ?>
   <div id="main-content" class="container">
      <div class="row">
         <div class="col-md-7">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <article>
               <header class="row">
                  <div class="col-xs-2 timestamp">
                     <time><span class="day"><?php echo get_the_date('j') ?></span> <span class="month"><?php echo get_the_date('M') ?> </span><span class="year"><?php echo get_the_date('Y'); ?></span></time>
                  </div>
                  <h1 class="col-xs-10"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               </header>
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-2">
                     <?php the_content(); ?>
                  </div>
              </div>
            </article>
         <?php endwhile; endif; ?>
         </div>
         <div class="col-md-4 col-md-offset-1">
            <?php get_sidebar() ?>
         </div>
      </div>
   </div>
<?php get_footer(); ?>