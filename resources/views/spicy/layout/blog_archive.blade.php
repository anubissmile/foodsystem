<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Start Metadata -->
    @include('spicy.asset.metadata')
    <!-- End Metadata -->
    
    <!-- Start Style -->
    @include('spicy.asset.style')
    <!-- End Style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
  <!-- Pre Loader -->
  @include('spicy.components.preloader')
  <!-- PRE LOADER -->

  <!--START SCROLL TOP BUTTON -->
  @include('spicy.components.scrolltotop')
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  @include('spicy.components.menuheader')
  <!-- End header section -->

  <!-- Start Blog banner  -->
  @include('spicy.components.our_menu_banner')
  <!-- End Blog banner -->  
  
  <!-- Start Blog -->
  @include('spicy.components.blog_archive')
  <!-- End Blog -->
  
  <!-- Start Footer -->
  @include('spicy.components.footer')
  <!-- End Footer --> 
  
  <!-- Start Script -->
  @include('spicy.asset.script')
  <!-- End Script -->

  </body>
</html>