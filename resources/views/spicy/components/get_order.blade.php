<section id="mu-blog">
	<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-blog-area">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="mu-blog-content mu-blog-details">
                @include('spicy.components.blog_detail')
                </div>
                <!-- Start Blog navigation -->
                @include('spicy.components.blog_detail_navigation')
                <!-- End Blog navigation -->
                <!-- Start related news -->
                @include('spicy.components.relate_menu')
                <!-- End related news -->
                <!-- Start Blog comments thread -->
                @include('spicy.components.comment')
                <!-- Start Blog comments thread -->
                <!-- Start comments box -->
                @include('spicy.components.leave_comment')
                <!-- End comments box -->
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