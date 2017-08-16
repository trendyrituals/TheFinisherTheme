<?php get_header();?>

   <div class="blog-header">
      <div class="container">
        <h1 class="blog-title"><?php bloginfo('name');?></h1>
        <p class="lead blog-description"><?php bloginfo('discription');?></p>
      </div>
    </div>

    <div class="container">

      <div class="row">



        <div class="col-sm-8 blog-main">

        <?php if(have_posts()) : ?>

          <?php while(have_posts()) : the_post();?>

          <div class="blog-post">
            <h2 class="blog-post-title">
              
              <?php the_title();?>
                
              </h2>
            

            

            <?php the_content();?>
           
          </div><!-- /.blog-post -->
        <?php endwhile; ?>
        <?php else : ?>
            <p><?php __('No Page Found');?></p>
         <?php endif;?>

          

        </div><!-- /.blog-main -->





        

<?php get_footer();?>




























   