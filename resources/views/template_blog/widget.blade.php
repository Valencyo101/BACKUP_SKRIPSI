<div class="col-md-4">
    <!-- ad widget-->
    <div class="aside-widget text-center">
        <a href="#" style="display: inline-block;margin: auto;">
            <img class="img-responsive" src="./img/ad-3.jpg" alt="">
        </a>
    </div>
    <!-- /ad widget -->

    <!-- social widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Social Media</h2>
        </div>
        <div class="social-widget">
            <ul>
                <li>
                    <a href="#" class="social-facebook">
                        <i class="fa fa-facebook"></i>
                        <span>FACEBOOK</span>
                    </a>
                </li>
                <li>
                    <a href="" class="social-twitter">
                        <i class="fa fa-twitter"></i>
                        <span>TWITER</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/kopisrikandi/" class="social-instagram">
                        <i class="fa fa-instagram"></i>
                        <span>INSTAGRAM</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /social widget -->

    <!-- category widget -->
    <div class="aside-widget">
        <div class="section-title">
            <h2 class="title">Categories</h2>
        </div>
        <div class="category-widget">
            <ul>
                @foreach ($category_widget as $hasil)
                    <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }}
                            <span>{{ $hasil->posts->count() }}</span></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /category widget -->
</div>
<!-- /post widget -->
