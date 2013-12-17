<?php get_header(); ?>
   <div id="main-content" class="container">
      <div class="row">
         <div class="col-md-7">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <article>
               <header><h1><?php the_title() ?></h1></header>
               <?php the_content(); ?>
            </article>
            <?php endwhile; endif; ?>
         </div>
         <div class="col-md-4 col-md-offset-1">
            <?php get_sidebar() ?>
         </div>
      </div>
   </div>
<?php get_footer(); ?>