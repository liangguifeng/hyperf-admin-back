<html>
{{--引入头部文件--}}
@include('admin.layouts.header')

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        {{--侧边栏--}}
        @section('sidebar')
            @include('admin.layouts.sidebar')
            @include('admin.layouts.setting')
        @show

        {{--content--}}
        <div class="right_col" role="main">
            @yield('content')
        </div>

        {{--底部--}}
        @section('footer')
            @include('admin.layouts.footer')
        @show
    </div>
</div>

</body>
</html>
