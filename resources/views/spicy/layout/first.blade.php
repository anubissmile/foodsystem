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

  <!-- Start slider  -->
  @include('spicy.components.slider')
  <!-- End slider  -->

  <!-- Start Order -->
  @include('spicy.components.make_order')
  <!-- End Order -->

  <!-- Start Gallery -->
  {{-- @include('spicy.components.gallery') --}}
  <!-- End Gallery -->
  
  <!-- Start About us -->
  {{-- @include('spicy.components.aboutus') --}}
  <!-- End About us -->

  <!-- Start Counter Section -->
  {{-- @include('spicy.components.counter') --}}
  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  {{-- @include('spicy.components.our_menu') --}}
  <!-- End Restaurant Menu -->

  <!-- Start Reservation section -->
  {{-- @include('spicy.components.reservation') --}}  
  <!-- End Reservation section -->
  
  <!-- Start Client Testimonial section -->
  {{-- @include('spicy.components.client_testimonial') --}}
  <!-- End Client Testimonial section -->

  <!-- Start Subscription section -->
  {{-- @include('spicy.components.subscription') --}}
  <!-- End Subscription section -->

  <!-- Start Chef Section -->
  {{-- @include('spicy.components.chef') --}}
  <!-- End Chef Section -->

  <!-- Start Latest News -->
  {{-- @include('spicy.components.latest_news') --}}
  <!-- End Latest News -->

  <!-- Start Contact section -->
  {{-- @include('spicy.components.contact') --}}
  <!-- End Contact section -->

  <!-- Start Map section -->
  {{-- @include('spicy.components.map') --}}
  <!-- End Map section -->

  <!-- Start Footer -->
  @include('spicy.components.footer')
  <!-- End Footer -->
  
  <!-- Start Script -->
  @include('spicy.asset.script')
  <!-- End Script -->
  </body>
</html>