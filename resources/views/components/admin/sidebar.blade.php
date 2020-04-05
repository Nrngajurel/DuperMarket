<div>
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
            <div class="sidebar-brand-icon">
                <img src="img/logo/logo2.png">
            </div>
            <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder"
               aria-expanded="true" aria-controls="collapseOrder">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Order</span>
            </a>
            <div id="collapseOrder" class="collapse" aria-labelledby="headingOrder" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Order</h6>
                    <a class="collapse-item" href="#">Alerts</a>
                    <a class="collapse-item" href="#">Buttons</a>

                </div>
            </div>
        </li>

        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
               aria-expanded="true" aria-controls="collapseProduct">
                <i class="fas fa-fw fa-columns"></i>
                <span>Product</span>
            </a>
            <div id="collapseProduct" class="collapse" aria-labelledby="headingProduct" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Products</h6>
                    <a class="collapse-item" href="#">Add new</a>
                    <a class="collapse-item" href="#">Category</a>
                    <a class="collapse-item" href="#">Tag</a>
                    <a class="collapse-item" href="{{ route('admin.brands.index') }}">Brands</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="false"
               aria-controls="collapseUsers">
                <i class="fas fa-fw fa-columns"></i>
                <span>Users</span>
            </a>
            <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Users</a>
                    <a class="collapse-item" href="#">Add New</a>
                    <a class="collapse-item" href="#">Roles</a>
                    <a class="collapse-item" href="#">Tag</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="false"
               aria-controls="collapsePage">
                <i class="fas fa-fw fa-columns"></i>
                <span>Tools</span>
            </a>
            <div id="collapseTools" class="collapse" aria-labelledby="headingTools" data-parent="#accordionSidebar">                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">Menu Builder</a>
                    <a class="collapse-item" href="#">Database</a>
                    <a class="collapse-item" href="#">Tag</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Settings</span></a>
        </li>

        <hr class="sidebar-divider">
        <div class="version">something</div>
    </ul>
</div>
