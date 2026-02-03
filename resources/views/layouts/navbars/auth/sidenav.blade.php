<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2
    {{ $bg ?? ''}} {{ $box ?? ''}}"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
            href="{{ route('dashboards') }}">
            <img src="/assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">TAM Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link {{ (Route::currentRouteName() == 'dashboards' ) ? 'active' : '' }}"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10 tam-icon-text" ></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboards</span>
                </a>
                <div class="collapse  {{ (Route::currentRouteName() == 'dashboards' ) ? 'show' : '' }} " id="dashboardsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link {{ str_contains(request()->url(), 'admin-dashboard') == true ? 'active' : '' }}" href="{{ route('dashboards') }}">
                                <span class="sidenav-mini-icon"> AD </span>
                                <span class="sidenav-normal"> Admin Dashboard </span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
          <li class="nav-item">
                <a data-bs-toggle="collapse" href="#UserManagement" class="nav-link {{ (Route::currentRouteName() == 'website-setting' || Route::currentRouteName() == 'user-profile' || Route::currentRouteName() == 'slider-management' || Route::currentRouteName() == 'services-management' || Route::currentRouteName() == 'products-management' ) ? 'active' : '' }}"
                    aria-controls="UserManagement" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-end justify-content-center">
                        <i class="fa fa-user me-sm-1 tam-icon-text" aria-hidden="true"  style="color:#f4645f; font-size: large; font-weight: 500 "></i>
                    </div>
                    <span class="nav-link-text ms-1">Management</span>
                </a>
                <div class="collapse  {{ (Route::currentRouteName() == 'website-setting' || Route::currentRouteName() == 'user-profile' || Route::currentRouteName() == 'slider-management' || Route::currentRouteName() == 'services-management' || Route::currentRouteName() == 'products-management' ) ? 'show' : '' }} " id="UserManagement">
                    <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'user-profile' ? 'active' : '' }}" href="{{ route('user-profile') }}">
                                    <span class="sidenav-mini-icon"> UP </span>
                                    <span class="sidenav-normal"> User Profile </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'website-setting' ? 'active' : '' }}" href="{{ route('website-setting') }}">
                                    <span class="sidenav-mini-icon"> WS </span>
                                    <span class="sidenav-normal">Website Setting</span>
                                </a>
                            </li>                       
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'products-management' ? 'active' : '' }}" href="{{ route('products-management') }}">
                                    <span class="sidenav-mini-icon"> PM </span>
                                    <span class="sidenav-normal"> Product Management </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'services-management' ? 'active' : '' }}" href="{{ route('services-management') }}">
                                    <span class="sidenav-mini-icon"> SM </span>
                                    <span class="sidenav-normal"> Services Management </span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link {{ Route::currentRouteName() == 'slider-management' ? 'active' : '' }}" href="{{ route('slider-management') }}">
                                    <span class="sidenav-mini-icon"> L </span>
                                    <span class="sidenav-normal"> Slider Management </span>
                                </a>
                            </li>
                        
                    </ul>
                </div>
            </li>
           
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#consultationServicesExamples" class="nav-link {{ (Route::currentRouteName() == 'consultationServices' ) ? 'active' : '' }}"
                    aria-controls="consultationServicesExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10 tam-icon-text" ></i>
                    </div>
                    <span class="nav-link-text ms-1">Consultation Services</span>
                </a>
                <div class="collapse  {{ (Route::currentRouteName() == 'consultation-services-feature.index' || Route::currentRouteName() == 'consultation-services.index' ) ? 'show' : '' }} " id="consultationServicesExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item">
                            <a class="nav-link {{ str_contains(request()->url(), 'consultation-services.index') == true ? 'active' : '' }}" href="{{ route('consultation-services.index') }}">
                                <span class="sidenav-mini-icon"> CS </span>
                                <span class="sidenav-normal"> Consultation Services </span>
                            </a>
                            <a class="nav-link {{ str_contains(request()->url(), 'consultation-services-feature.index') == true ? 'active' : '' }}" href="{{ route('consultation-services-feature.index') }}">
                                <span class="sidenav-mini-icon"> SF </span>
                                <span class="sidenav-normal">Services Feature</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>
