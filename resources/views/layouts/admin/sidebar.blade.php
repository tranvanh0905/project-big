<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li>
        <a href="{{route('admin.home')}}">
            <i class="fa fa-circle-o text-aqua"></i><span>Bảng điều khiển</span>
        </a>
    </li>

    <li class="treeview @if (Request::is('admin/*')) active menu-open @endif" style="height: auto;">
        <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Bài hát</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu" style="display: @if (Request::is('admin/*')) block @endif;">
            <li class="@if (Request::is('admin/songs')) active @endif"><a href="{{route('songs.home')}}"><i
                        class="fa fa-circle-o"></i> Tất cả bài hát</a></li>
            <li class="@if (Request::is('admin/songs/add')) active @endif"><a href="{{route('songs.add')}}"><i
                        class="fa fa-circle-o"></i> Thêm bài hát mới</a></li>
            <li class="@if (Request::is('admin/artists')) active @endif"><a href="{{route('artists.home')}}"><i
                        class="fa fa-circle-o"></i> Ca sĩ</a></li>
            <li class="@if (Request::is('admin/playlists')) active @endif"><a href="{{route('playlists.home')}}"><i
                        class="fa fa-circle-o"></i> Playlists</a></li>
            <li class="@if (Request::is('admin/albums')) active @endif"><a href="{{route('albums.home')}}"><i
                        class="fa fa-circle-o"></i> Albums</a></li>
            <li class="@if (Request::is('admin/countries')) active @endif"><a href="{{route('countries.home')}}"><i
                        class="fa fa-circle-o"></i> Quốc gia</a></li>
        </ul>
    </li>
</ul>
