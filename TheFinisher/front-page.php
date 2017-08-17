<?php get_header();?>

    <section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading','The Finisher Wordpress Theme');?></h1>
        <p><?php echo get_theme_mod('showcase_text','text');?></p>
        <a href="<?php echo get_theme_mod('showcase_btn_url','http://default.com');?>" class="btn btn-default"><?php echo get_theme_mod('showcase_btn_text','Read More');?></a>
      </div>
    </section>



    <section class="boxes">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            
              <?php if (is_active_sidebar('box1')):?>

                <?php dynamic_sidebar('box1');?>

              <?php endif;?>
 
          </div>

          <div class="col-md-4">
            
              <?php if (is_active_sidebar('box2')):?>

                <?php dynamic_sidebar('box2');?>

              <?php endif;?>
 
          </div>

          <div class="col-md-4">
            
              <?php if (is_active_sidebar('box3')):?>

                <?php dynamic_sidebar('box3');?>

              <?php endif;?>
 
          </div>

          <div class="col-md-4">
            
              <?php if (is_active_sidebar('box4')):?>

                <?php dynamic_sidebar('box4');?>

              <?php endif;?>
 
          </div>

          <div class="col-md-4">
            
              <?php if (is_active_sidebar('box5')):?>

                <?php dynamic_sidebar('box5');?>

              <?php endif;?>
 
          </div>

          <div class="col-md-4">
            
              <?php if (is_active_sidebar('box6')):?>

                <?php dynamic_sidebar('box6');?>

              <?php endif;?>
 
          </div>


        </div>
      </div>
    </section>


<?php get_footer();?>




























   