<section id="mu-blog">
	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-blog-area">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="mu-blog-content">
				<!-- Start Single Blog Item -->
				@include('spicy.components.single_blog_item')
				<!-- End Single Blog Item -->
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-blog-pagination-area">
                      <nav>
                        <ul class="mu-blog-pagination">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span class="fa fa-long-arrow-left"></span>
                            </a>
                          </li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li class="active"><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span class="fa fa-long-arrow-right"></span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Start Blog Sidebar -->
              @include('spicy.components.blog_sidebar')
              <!-- End Blog Sidebar -->
            </div>
          </div>
        </div>
      </div>
    </div>
</section>