@php
    $currentRouteName = Route::currentRouteName();
@endphp
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-5 fw-bold text-uppercase border-bottom"><i class="bi bi-mastodon"></i> masterBarang</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-transparent second-text nav-link @if($currentRouteName == 'home') active @endif"><i class="bi bi-house-door-fill"></i> Home</a>
                <a href="{{ route('barangs.index') }}" class="list-group-item list-group-item-action bg-transparent second-text nav-link @if($currentRouteName == 'barangs.index') active @endif">
                    <i class="bi bi-diagram-3-fill"></i> List Barang
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="bi bi-text-left primary-text fs-5 me-3 " id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">{{ $pageTitle }}</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="border border-3 border-primary rounded-3">
                            <a class="nav-link second-text fw-bold nav-link @if($currentRouteName == 'profile') active @endif" href="{{ route('profile') }}" >
                                <i class="bi-person-circle me-1"></i> My Profile
                            </a>

                        </li>
                    </ul>
                </div>
            </nav>

