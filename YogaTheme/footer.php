 <?php if(!is_front_page()) : ?>

<div class="col-sm-3 offset-sm-1 blog-sidebar">

        <?php if (is_active_sidebar('sidebar')):?>

          <?php dynamic_sidebar('sidebar');?>

        <?php endif;?>
   
        </div><!-- /.blog-sidebar -->

<?php endif;?>

      </div><!-- /.row -->

    </div><!-- /.container -->



    <footer class="blog-footer">
        <p>&copy; <?php echo Date('Y');?> <?php bloginfo('name');?></p>
        <p>
          <a href="#">Back to top</a>
        </p>
      </footer>
      <?php wp_footer();?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
  </body>
</html>