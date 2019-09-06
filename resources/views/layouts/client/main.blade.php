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
@yield('custom')
<!---Main Content Start--->
    @if (\Request::is('album-single'))
        <div class="ms_content_wrapper ms_album_content">
            @elseif(\Request::is('artist-single'))
                <div class="ms_content_wrapper ms_artist_content">
                    @else
                        <div class="ms_content_wrapper padder_top80">
                            @endif
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
