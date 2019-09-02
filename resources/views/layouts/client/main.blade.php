<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Begin Head -->
<head>
@include('layouts.client.meta-header')
<!--Start Style -->
    @include('layouts.client.style')
</head>

<body>

<!--Main Wrapper Start---->
<div class="ms_main_wrapper">
    <!---Side Menu Start--->
@include('layouts.client.side-menu')
<!---Header--->
@include('layouts.client.header')
<!---Banner--->
@yield('banner')
<!---Main Content Start--->
    <div class="ms_content_wrapper padder_top80">
        @yield('content')
    </div>
    <!---Footer Start---->
@include('layouts.client.footer')
<!---Audio Player Section---->
    @include('layouts.client.player')
</div>

<!---Register Modal Start---->
@include('layouts.client.modal')

<!--Main js file Style-->
@include('layouts.client.script')
</body>

</html>
