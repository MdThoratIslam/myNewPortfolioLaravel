@include('backend.layouts.head')
@include('backend.layouts.left_side_nav')
@include('backend.layouts.top_navbar')
<div class="content-wrapper">
    @yield('content')
</div>
@include('backend.layouts.footer')
