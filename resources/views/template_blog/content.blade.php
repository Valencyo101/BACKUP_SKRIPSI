@include('template_blog.head')

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div id="hot-post" class="row hot-post">
            <div>
                @yield('isi')
            </div>
            @include('template_blog.widget')

        </div>
    </div>
</div>
</div>
</div>
</div>
@include('template_blog.footer')
