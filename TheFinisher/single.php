<?php get_header();?>

   <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">



        <div class="col-sm-8 blog-main">

        <?php if(have_posts()) : ?>

          <?php while(have_posts()) : the_post();?>

          <?php get_template_part('content');?>
          
        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Posts Found');?></p>
         <?php endif;?>

          

        </div><!-- /.blog-main -->





       
<?php get_footer();?>




























   