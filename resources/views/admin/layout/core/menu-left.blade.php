<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="text-center font-weight-light">NUYSHOP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ \Illuminate\Support\Facades\Auth::user()->getUserImage() }}" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="{{route('admin.dashboard')}}" class="d-block">
                    {{\Illuminate\Support\Facades\Auth::user()->user_name}}
                    <br>
                    <i>Role: <b>{{\Illuminate\Support\Facades\Auth::user()->role->name}}</b></i>
                </a>
                <a href="">Dashboard</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('admin.dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(\Request::is('admin/orders') || \Request::is('admin/customers')) menu-is-opening menu-open @endif">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('orders.index')}}" class="nav-link @if(\Request::is('admin/orders')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Order List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('customers.index')}}" class="nav-link @if(\Request::is('admin/customers')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Customers</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                <li class="nav-item @if(\Request::is('admin/users') || \Request::is('admin/users/create')) menu-is-opening menu-open @endif">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.create')}}" class="nav-link @if(\Request::is('admin/users/create')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link @if(\Request::is('admin/users')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item @if(\Request::is('admin/category') || \Request::is('admin/category/create')) menu-is-opening menu-open @endif">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('category.create')}}" class="nav-link @if(\Request::is('admin/category/create')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link @if(\Request::is('admin/category')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if(\Request::is('admin/product') || \Request::is('admin/product/create')) menu-is-opening menu-open @endif">
                    <a class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Product
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('product.create')}}" class="nav-link @if(\Request::is('admin/product/create')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('product.index')}}" class="nav-link @if(\Request::is('admin/product')) active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">LOGOUT</li>
                <li class="nav-item">
                    <a href="{{route('auth.logout')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Log out</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
