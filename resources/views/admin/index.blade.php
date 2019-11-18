@extends('layouts.admin.main')

@section('title')
    Bảng điều khiển
@endsection

@section('content')
    <div class="pcoded-container navbar-wrapper" >
        <div id="sidebar" class="users p-chat-user showChat">
            <div class="had-container">
                <div class="p-fixed users-main">
                    <div class="user-box">
                        <div class="chat-search-box">
                            <a class="back_friendlist">
                                <i class="feather icon-x"></i>
                            </a>
                            <div class="right-icon-control">
                                <div class="input-group input-group-button">
                                    <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-friend-list">
                            <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="chat-header">Josephin Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Lary Doe</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-success"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alice</div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Alia
                                        <small class="d-block text-muted">10 min ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                <a class="media-left" href="#!">
                                    <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    <div class="live-status bg-default"></div>
                                </a>
                                <div class="media-body">
                                    <div class="f-13 chat-header">Suzen
                                        <small class="d-block text-muted">15 min ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="feather icon-x"></i> Josephin Doe
                </a>
            </div>
            <div class="main-friend-chat">
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                    </div>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">can you come with me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="chat-reply-box">
                <div class="right-icon-control">
                    <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Write hear . . ">
                        <div class="input-group-append">
                            <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-content">

            <div class="page-header card">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="feather icon-home bg-c-blue"></i>
                            <div class="d-inline">
                                <h5>Dashboard</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class=" breadcrumb breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-body">
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Số lượng bài hát</h6>
                                                    <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-eye bg-c-blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Số lượng người dùng</h6>
                                                    <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-eye bg-c-blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-12">
                                    <div class="card comp-card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-b-25">Impressions</h6>
                                                    <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-eye bg-c-blue"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card table-card">
                                        <div class="card-header">
                                            <h5>New Products</h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                    <li><i class="feather icon-maximize full-card"></i></li>
                                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                                    <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                    <li><i class="feather icon-trash close-card"></i></li>
                                                    <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block p-b-0">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Product Code</th>
                                                        <th>Customer</th>
                                                        <th>Status</th>
                                                        <th>Rating</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Sofa</td>
                                                        <td>#PHD001</td>
                                                        <td>
                                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff9e9d9cbf98929e9693d19c9092">[email&#160;protected]</a>
                                                        </td>
                                                        <td><label class="label label-danger">Out Stock</label></td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Computer</td>
                                                        <td>#PHD002</td>
                                                        <td>
                                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1073747350777d71797c3e737f7d">[email&#160;protected]</a>
                                                        </td>
                                                        <td><label class="label label-success">In Stock</label></td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile</td>
                                                        <td>#PHD003</td>
                                                        <td>
                                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="81f1f0f3c1e6ece0e8edafe2eeec">[email&#160;protected]</a>
                                                        </td>
                                                        <td><label class="label label-danger">Out Stock</label></td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Coat</td>
                                                        <td>#PHD004</td>
                                                        <td>
                                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5634352516313b373f3a7835393b">[email&#160;protected]</a>
                                                        </td>
                                                        <td><label class="label label-success">In Stock</label></td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Watch</td>
                                                        <td>#PHD005</td>
                                                        <td>
                                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9dadddaf9ded4d8d0d597dad6d4">[email&#160;protected]</a>
                                                        </td>
                                                        <td><label class="label label-success">In Stock</label></td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shoes</td>
                                                        <td>#PHD006</td>
                                                        <td>
                                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d5d5c5f6d4a404c4441034e4240">[email&#160;protected]</a>
                                                        </td>
                                                        <td><label class="label label-danger">Out Stock</label></td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
