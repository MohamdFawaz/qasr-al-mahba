<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{route('dashboard')}}"><img src="{{asset('images/header_icon.png')}}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item @if(Request::segment(2) == 'dashboard') active @endif" >
                    <a href="{{route('dashboard')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == 'homepage-banner') active @endif" >
                    <a href="{{route('homepage_banner.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Homepage Banners</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == 'video-link') active @endif" >
                    <a href="{{route('video_link.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Video Link</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == 'partner') active @endif" >
                    <a href="{{route('partner.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Partners</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == 'mining-license') active @endif" >
                    <a href="{{route('mining-license.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Mining License Code</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == 'mining-resource') active @endif" >
                    <a href="{{route('mining-resource.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Mining Resource</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == 'animal-skin-category') active @endif" >
                    <a href="{{route('animal-skin-category.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Animal Skin Category</span>
                    </a>
                </li>
                <li class="sidebar-item @if(Request::segment(2) == 'product') active @endif" >
                    <a href="{{route('product.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Product</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="{{url('/translations')}}" class='sidebar-link'>
                        <i class="bi bi-wrench"></i>
                        <span>Translations</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
