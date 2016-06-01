
<header id="mu-header">
	    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('food_asset/assets/img/logo.png')}}" alt="Logo img"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="#mu-slider">HOME</a></li>
            <li><a href="#mu-make-order">MAKE ORDER</a></li>
            @if(Auth::check())
              <li><a href="#mu-all-order">ALL ORDER</a></li>
            @endif
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">PAGE <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <!-- <li><a href="blog-archive.html">BLOG</a></li>
                          <li><a href="blog-single.html">BLOG DETAILS</a></li>
                          <li><a href="404.html">404 PAGE</a></li>  -->
                  @if(Auth::check())
                    <!-- <li><a href="man.men">MANAGE MENUS</a></li>  -->
                    <li><a href="log.out">LOG OUT</a></li>
                  @else
                    <li><a href="ad.min">ADMIN</a></li> 
                  @endif 
              </ul>
            </li>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav>                                
</header>