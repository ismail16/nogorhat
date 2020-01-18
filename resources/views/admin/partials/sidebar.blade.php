<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-secondary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{asset('backend_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">NOGORHAT</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{Request::is('admin/dashboard*') ? 'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.customer.index') }}" class="nav-link {{Request::is('admin/customer*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-users"></i>
                        <p>Customer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.order.index') }}" class="nav-link {{Request::is('admin/order*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-cart-plus"></i>
                        <p>Order</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.payment.index') }}" class="nav-link {{Request::is('admin/payment*') ? 'active':''}}">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Payment</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.category.index') }}" class="nav-link {{Request::is('admin/category*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-bars"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('admin.subcategory.index') }}" class="nav-link {{Request::is('admin/subcategory*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-list-ol"></i>
                        <p>Sub-Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.supplier.index') }}" class="nav-link {{Request::is('admin/supplier*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-list-ol"></i>
                        <p>Brand/Supplier</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.product.index') }}" class="nav-link {{Request::is('admin/product*') ? 'active':''}}">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>Product</p>
                    </a>
                </li> 

                <li class="nav-item">
                    <a href="{{ route('admin.contact.index') }}" class="nav-link {{Request::is('admin/contact*') ? 'active':''}}">
                        <i class="nav-icon far fa-comments"></i>
                        Message
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.allSubscribtion') }}" class="nav-link {{Request::is('admin/subscribtions*') ? 'active':''}}">
                        <i class="nav-icon fas fa-envelope-open-text"></i>
                        Subscribtion
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.setting.edit',1) }}" class="nav-link {{Request::is('admin/subscribtions*') ? 'active':''}}">
                        <i class="nav-icon fas fa-tools"></i>
                        Settings
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.slider.index') }}" class="nav-link {{Request::is('admin/slider*') ? 'active':''}}">
                        <i class="nav-icon fas fa-image"></i>
                        Sliders
                    </a>
                </li>

{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-plus-square"></i>--}}
{{--                        <p>--}}
{{--                            Product--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Add Product</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </nav>
    </div>
</aside>

<div class="content-wrapper">
    <div class="content-header" style="padding: 5px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                <h5 class="text-dark">@yield('title')</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb breadcrumb-sm float-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
