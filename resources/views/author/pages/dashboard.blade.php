
@extends('frontend/layouts/master')

@section('content')
<div class="breadcrumbs_area bread_about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <div class="breadcrumb_header">
                        <a href="index.html"><i class="fa fa-home"></i></a>
                        <span><i class="fa fa-angle-right"></i></span>
                        <span> Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div  class="container-fluid">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="nav-side-menu">
                            <div class="brand">Customer Dashboard</div>
                            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                            <div class="menu-list">
                                <ul id="menu-content" class="menu-content collapse out">
                                    <li>
                                        <a href="#"><i class="fa fa-cart-plus fa-lg "></i> Orders </a>
                                    </li>
                                    <li>
                                        {{-- <a href="{{ route('author.profile',Auth::user()->id) }}"><i class="fa fa-user-circle fa-lg"></i> Profile </a> --}}
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-key fa-lg"></i> Logout </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1 card">
                        <h4 class="text-center">Welcome To Customer Dashboard Panel :)</h4>
                        {{ Auth::user()->name }}
                        <div class="row w-100 mb-4">
                            <div class="col-md-3">
                                <div class="card border-info mx-sm-1 p-3">
                                    <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>
                                    <div class="text-info text-center mt-3"><h4>Cars</h4></div>
                                    <div class="text-info text-center mt-2"><h1>234</h1></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-success mx-sm-1 p-3">
                                    <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                                    <div class="text-success text-center mt-3"><h4>Eyes</h4></div>
                                    <div class="text-success text-center mt-2"><h1>9332</h1></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-danger mx-sm-1 p-3">
                                    <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                                    <div class="text-danger text-center mt-3"><h4>Hearts</h4></div>
                                    <div class="text-danger text-center mt-2"><h1>346</h1></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card border-warning mx-sm-1 p-3">
                                    <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                                    <div class="text-warning text-center mt-3"><h4>Inbox</h4></div>
                                    <div class="text-warning text-center mt-2"><h1>346</h1></div>
                                </div>
                            </div>
                        </div>

                        <div class="row w-100 mb-4">
                            <div class="container">
                                <div class="table-responsive table-striped">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row w-100 mb-4">
                            <div class="container emp-profile">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="profile-img" style="width: 200px;">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                                            </div>
                                            <br>
                                            <h5> Kshiti Ghelani</h5>
                                            <h6>Web Developer and Designer</h6>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="tab-content profile-tab" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <div class="row">
                                                        <label class="col-md-2">Name </label>
                                                        <p class="col-md-10">{{ Auth::user()->name }}</p>
                                                        <label class="col-md-2">Email </label>
                                                        <p class="col-md-10">{{ Auth::user()->email }}</p>
                                                        <label class="col-md-2">Phone </label>
                                                        <p class="col-md-10">{{ Auth::user()->Phone }}</p>
                                                        <label class="col-md-2">Address </label>
                                                        <p class="col-md-10">{{ Auth::user()->address }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <style>

                    </style>

                    <style>
                        .my-card
                        {
                            position:absolute;
                            left:40%;
                            top:-20px;
                            border-radius:50%;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .nav-side-menu {
        overflow: auto;
        font-family: verdana;
        font-size: 12px;
        font-weight: 200;
        background-color: #2e353d;
        /*position: fixed;*/
        top: 0px;
        /*width: 300px;*/
        height: 100%;
        color: #e1ffff;
    }
    .nav-side-menu .brand {
        background-color: #23282e;
        line-height: 50px;
        display: block;
        text-align: center;
        font-size: 14px;
    }
    .nav-side-menu .toggle-btn {
        display: none;
    }
    .nav-side-menu ul,
    .nav-side-menu li {
        list-style: none;
        padding: 0px;
        margin: 0px;
        line-height: 35px;
        cursor: pointer;
        /*
          .collapsed{
             .arrow:before{
                       font-family: FontAwesome;
                       content: "\f053";
                       display: inline-block;
                       padding-left:10px;
                       padding-right: 10px;
                       vertical-align: middle;
                       float:right;
                  }
           }
      */
    }
    .nav-side-menu ul :not(collapsed) .arrow:before,
    .nav-side-menu li :not(collapsed) .arrow:before {
        font-family: FontAwesome;
        content: "\f078";
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        vertical-align: middle;
        float: right;
    }
    .nav-side-menu ul .active,
    .nav-side-menu li .active {
        border-left: 3px solid #d19b3d;
        background-color: #4f5b69;
    }
    .nav-side-menu ul .sub-menu li.active,
    .nav-side-menu li .sub-menu li.active {
        color: #d19b3d;
    }
    .nav-side-menu ul .sub-menu li.active a,
    .nav-side-menu li .sub-menu li.active a {
        color: #d19b3d;
    }
    .nav-side-menu ul .sub-menu li,
    .nav-side-menu li .sub-menu li {
        background-color: #181c20;
        border: none;
        line-height: 28px;
        border-bottom: 1px solid #23282e;
        margin-left: 0px;
    }
    .nav-side-menu ul .sub-menu li:hover,
    .nav-side-menu li .sub-menu li:hover {
        background-color: #020203;
    }
    .nav-side-menu ul .sub-menu li:before,
    .nav-side-menu li .sub-menu li:before {
        font-family: FontAwesome;
        content: "\f105";
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        vertical-align: middle;
    }
    .nav-side-menu li {
        padding-left: 0px;
        border-left: 3px solid #2e353d;
        border-bottom: 1px solid #23282e;
    }
    .nav-side-menu li a {
        text-decoration: none;
        color: #e1ffff;
    }
    .nav-side-menu li a i {
        padding-left: 10px;
        width: 20px;
        padding-right: 20px;
    }
    .nav-side-menu li:hover {
        border-left: 3px solid #d19b3d;
        background-color: #4f5b69;
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
    @media (max-width: 767px) {
        .nav-side-menu {
            position: relative;
            width: 100%;
            margin-bottom: 10px;
        }
        .nav-side-menu .toggle-btn {
            display: block;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 10 !important;
            padding: 3px;
            background-color: #ffffff;
            color: #000;
            width: 40px;
            text-align: center;
        }
        .brand {
            text-align: left !important;
            font-size: 22px;
            padding-left: 20px;
            line-height: 50px !important;
        }
    }
    @media (min-width: 767px) {
        .nav-side-menu .menu-list .menu-content {
            display: block;
        }
    }
    body {
        margin: 0px;
        padding: 0px;
    }

</style>
@endsection
