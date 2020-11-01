<div>

    @php
    $menuItems= [
    'dashboard'=>['name'=>'Dashboard', 'route'=>'admin.dashboard', 'icon-class'=>'fa-tachometer-alt' ],
    'product'=>['name'=>'Product', 'route'=>'admin.products.index','icon-class'=>'fa-tachometer-alt','params'=>[] ,'child_items'=>[
        ['name'=>'Tags', 'route'=>'admin.tags.index','icon-class'=>'fa-tachometer-alt','params'=>[]],
        ['name'=>'Categories', 'route'=>'admin.categories.index','icon-class'=>'fa-tachometer-alt','params'=>[]],
        ['name'=>'Brands', 'route'=>'admin.brand.index','icon-class'=>'fa-tachometer-alt','params'=>[]],
        ['name'=>'Add New', 'route'=>'admin.products.index','icon-class'=>'fa-tachometer-alt','params'=>[]],
        ]],
    'brand'=>['name'=>'Brand', 'route'=>'admin.brand.index','icon-class'=>'fa-tachometer-alt' ],
    'coupon'=>['name'=>'Coupon', 'route'=>'admin.coupons.index','icon-class'=>'fa-tachometer-alt' ],
];

    @endphp
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
            <div class="sidebar-brand-icon">
                <img src="img/logo/logo2.png" alt="{{ config('app.name') }}">
            </div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>
        <hr class="sidebar-divider my-0">
        @foreach($menuItems as $item)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route($item['route'],isset($item['params'])) }}"
                   @if(isset($item['child_items']))
                   data-toggle="collapse" data-target="#collapse{{ $item['name'] }}"
                   aria-expanded="true" aria-controls="collapse{{ $item['name'] }}"
                    @endif
                >
                    <i class="fas fa-fw {{ $item['icon-class'] }}"></i>
                    <span>{{ $item['name'] }}</span></a>
                @if(isset($item['child_items']))
                    <div id="collapse{{ $item['name'] }}" class="collapse" aria-labelledby="heading{{ $item['name'] }}" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Order</h6>
                            <a class="collapse-item" href="{{ route($item['route'],isset($item['params'])) }}">{{ $item['name'] }}</a>
                            @foreach($item['child_items'] as $item)
                                <a class="collapse-item" href="{{ route($item['route'],isset($item['params'])) }}">{{ $item['name'] }}</a>
                            @endforeach

                        </div>
                    </div>

                @endif
            </li>
        @endforeach
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
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTools" aria-expanded="false"
               aria-controls="collapsePage">
                <i class="fas fa-fw fa-columns"></i>
                <span>Tools</span>
            </a>
            <div id="collapseTools" class="collapse" aria-labelledby="headingTools" data-parent="#accordionSidebar">                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.menus.index') }}">Menu Builder</a>
                    <a class="collapse-item" href="#">Database</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Settings</span></a>
        </li>

        <hr class="sidebar-divider">
        <div class="version">something</div>
    </ul>
</div>
