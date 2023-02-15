<!--Start Footer-->
<footer>
       <div class="container">
           <div class="row">
               <!--Start copyright-->
               <div class="col-md-6 col-sm-6 col-xs-6">
               
               <?php echo dynamic_sidebar( 'footer-1' ); ?>
               </div>
               <!--End copyright-->
               
               <!--start social icons-->
               <div class="col-md-6 col-sm-6 col-xs-6">
               <?php echo dynamic_sidebar( 'footer-2' ); ?>
               </div>
               <!--End social icons-->
           </div> <!-- /.row-->
       </div> <!-- /.container-->
   </footer>
   <!--End Footer-->

   <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/easing.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/jquery.appear.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assests/js/custom.js"></script>

    <?php wp_footer() ?>
    
 </body>
</html>