<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wicodus - Private Messaging</title>

    <!-- CSS -->
    <link href="assets/css/fonts/etline-font.min.css" rel="stylesheet">
    <link href="assets/css/fonts/fontawesome/all.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/fonts/themify-icons.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="page-body">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 mr-auto">
            <a class="navbar-brand logo" href="#">
              <img src="assets/img/logo-gaming.png" alt="Wicodus" class="logo-light mx-auto">
            </a>
          </div>
          <div class="col-4 d-none d-lg-block mx-auto">
            <form class="input-group border-0 bg-transparent">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </form>
          </div>
          <div class="col-8 col-sm-8 col-md-8 col-lg-6 col-xl-4 ml-auto text-right">
            <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle small text-capitalize" href="#" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/avatar/2.jpg" class="img-xs rounded-circle mr-2" alt="Avatar">Sakuras </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="dropdownUser">
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-user"></i></span>My Profile</a>
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-wallet"></i></span>Wallet</a>
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-cog"></i></span>Settings</a>
                  <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle small" href="#" id="dropdownGaming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mr-2 fas fa-globe"></i>EN </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="dropdownGaming">
                  <a class="dropdown-item" href="#">English</a>
                  <a class="dropdown-item" href="#">Deutsch</a>
                  <a class="dropdown-item" href="#">Español</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link small" href="" data-toggle="offcanvas" data-target="#offcanvas-cart">
                  <span class="p-relative d-inline-flex">
                    <span class="badge-cart badge badge-counter badge-warning position-absolute l-1">2</span>
                    <i class="fas fa-shopping-cart"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle pl-lg-0" href="#" id="dropdownGaming_games" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_games">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Adventure</a>
                <a class="dropdown-item" href="#">Cooperative</a>
                <a class="dropdown-item" href="#">MMO</a>
                <a class="dropdown-item" href="#">RPG</a>
                <a class="dropdown-item" href="#">Simulation</a>
                <a class="dropdown-item" href="#">Economy</a>
                <a class="dropdown-item" href="#">Horror</a>
                <a class="dropdown-item" href="#">Arcade</a>
                <a class="dropdown-item" href="#">Hack & Slash</a>
                <a class="dropdown-item" href="#">Puzzle</a>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownGaming_software" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Software </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_software">
                <a class="dropdown-item" href="#">Animation & Modeling</a>
                <a class="dropdown-item" href="#">Audio Production</a>
                <a class="dropdown-item" href="#">Design & Illustration</a>
                <a class="dropdown-item" href="#">Education</a>
                <a class="dropdown-item" href="#">Game Development</a>
                <a class="dropdown-item" href="#">Photo Editing</a>
                <a class="dropdown-item" href="#">Utilities</a>
                <a class="dropdown-item" href="#">Video Production</a>
                <a class="dropdown-item" href="#">Web Publishing</a>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownGaming_community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_community">
                <a class="dropdown-item" href="#">Discussions</a>
                <a class="dropdown-item" href="#">Workshop</a>
                <a class="dropdown-item" href="#">Market</a>
                <a class="dropdown-item" href="#">Broadcasts</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Support</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- main content -->
    <main class="main-content gradient-lg position-relative">

      <!-- overlay -->
      <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
      <!-- /.overlay -->

      <!-- content area -->
      <div class="content-section pt-6 pb-8 text-light">
        <div class="container">
          <header class="header mb-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb-product breadcrumb breadcrumb-nowrap breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Private Messaging</li>
              </ol>
            </nav>
          </header>
          <div class="position-relative">
            <div class="row no-gutters entry-content border border-secondary rounded">
              <div class="col-12">
                <div class="row no-gutters">
                  <div class="order-1 col-xl-3 border-xl-right border-secondary">
                    <div class="chat-sch h-100 d-flex align-items-center justify-content-center py-4 py-xl-0 px-4 border-bottom border-secondary">
                      <form class="input-light w-100">
                        <div class="input-group input-transparent bg-transparent rounded">
                          <div class="input-group-prepend input-group-prepend">
                            <a class="input-group-text lead-1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="far fa-user"></i>
                            </a>
                          </div>
                          <input type="text" class="form-control">
                          <div class="input-group-append ml-3">
                            <button class="btn btn-lg btn-warning px-4" type="button" style="z-index: 1;"><i class="fas fa-comment-medical"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="order-3 order-xl-2 col-xl-9 char-sFill px-4 msg-fill border-bottom border-secondary border-top border-xl-top-0">
                    <header class="h-100 d-flex align-items-center py-3">
                      <div class="d-flex align-items-center justify-content-center w-100">
                        <div class="lead-1 fw-500 lh-1 text-center py-1">
                          <span class="d-flex align-items-center justify-content-center mb-2">
                            <a href="#" class="d-block">Qiretha</a>
                          </span>
                          <span class="small-3 fw-100 o-80">Last message 8 months ago</span>
                        </div>
                      </div>
                    </header>
                  </div>
                  <div class="order-2 order-xl-3 col-xl-3 border-xl-right border-secondary">
                    <div class="d-flex flex-column chat-cat-list sVH" data-scrollbar="tab">
                      <!-- item -->
                      <div class="chat-cat-item active">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-60">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="chat-cat-item">
                        <a href="#">
                          <div class="px-5 py-4 d-flex align-items-center">
                            <div class="d-xl-none d-lp-inline chat-dialogue-avatar">
                              <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                <div class="chat-user-status-border"></div>
                              </div>
                              <div class="chat-user-status active"></div>
                            </div>
                            <div class="flex-1 pl-4 pl-xl-0 pl-lp-4 lh-6">
                              <div class="mb-1">
                                <span class="lead-1 fw-500">Rambozld</span>
                              </div>
                              <div class="small-3 lh-3 o-80">
                                <span>Hehe, I thought you would like..</span>
                              </div>
                            </div>
                            <div class="pl-4 pl-xl-0 pl-lp-4">
                              <div class="mb-2">
                                <span class="small-3 fw-400 ml-auto">10:34 AM</span>
                              </div>
                              <div class="d-flex">
                                <div class="ml-auto position-relative">
                                  <div class="chat-dialogue-avatar-st position-relative bg-warning text-secondary">12+</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                    </div>
                  </div>
                  <div class="order-4 col-xl-9 char-sFill pl-lg-0 msg-fill">
                    <div class="d-flex h-100">
                      <div class="flex-1 py-4 pr-xl-4">
                        <div class="px-4" data-scrollbar="chat">
                          <div class="chat-dialogue-sc sVHF">
                            <ul class="chat-list-section list-unstyled text-center py-4 pr-xl-6 mb-0">
                              <!-- welcome -->
                              <li class="text-left fw-500 mb-6">
                                <div class="chat-dialogue-sm-avatar position-relative mb-2">
                                  <div class="w-100 h-100 p-absolute l-0 t-0 rounded-circle bp-c bs-c br-n overflow-hidden" style="background: url(assets/img/avatar/2.jpg)">
                                    <div class="chat-user-status-border"></div>
                                  </div>
                                  <div class="chat-user-status active"></div>
                                </div>
                                <span class="d-block lead-1 fw-600">Qiretha</span>
                                <span class="text-light fw-300 o-80">Welcome to the beginning of the <a href="profile.html" class="fw-600">@Qiretha</a> group.</span>
                              </li>
                              <!-- /.welcome -->
                              <!-- time -->
                              <li class="d-block small-3 o-70 fw-500 mt-6 mt-xl-7 mb-6 mb-xl-8">
                                <div class="hr-text">
                                  March 21, 2020
                                </div>
                              </li>
                              <!-- /.time -->
                              <!-- message -->
                              <li class="chat-dialogue-item d-flex align-items-center justify-content-end mb-6">
                                <div class="chat-dialogue-me">
                                  Hello there. Thanks for the follow. Did you notice, that I am an egg? A talking egg? Damn!
                                </div>
                                <div class="align-self-start">
                                  <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/2.jpg)"></div>
                                </div>
                              </li>
                              <!-- /.message -->
                              <!-- message -->
                              <li class="chat-msg-item mb-6">
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="align-self-start">
                                    <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/1.jpg)"></div>
                                  </div>
                                  <div class="chat-dialogue-me">
                                    Hello there. Thanks for the follow. Did you notice, that I am an egg? A talking egg? Damn!
                                  </div>
                                </div>
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="chat-dialogue-me">
                                    Why didn't he come and talk to me himself?
                                  </div>
                                </div>
                              </li>
                              <!-- /.message -->
                              <!-- time -->
                              <li class="d-block my-6 my-xl-8 small-3 o-70 fw-500 mb-6">
                                <div class="hr-text">
                                  10 minutes ago
                                </div>
                              </li>
                              <!-- /.time -->
                              <!-- message -->
                              <li class="chat-dialogue-item d-flex align-items-center justify-content-end mb-6">
                                <div class="chat-dialogue-me">
                                  I never meant to come between you and him.
                                </div>
                                <div class="align-self-start">
                                  <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/2.jpg)"></div>
                                </div>
                              </li>
                              <!-- /.message -->
                              <!-- message -->
                              <li class="chat-msg-item mb-6">
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="align-self-start">
                                    <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/1.jpg)"></div>
                                  </div>
                                  <div class="chat-dialogue-me">
                                    If you do this, you will be dead to me.
                                  </div>
                                </div>
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="chat-dialogue-me">
                                    I knew you wouldn't be able to see it through.
                                  </div>
                                </div>
                              </li>
                              <!-- /.message -->
                              <!-- time -->
                              <li class="d-block my-6 my-xl-8 small-3 o-70 fw-500 mb-6">
                                <div class="hr-text">
                                  30 minutes ago
                                </div>
                              </li>
                              <!-- /.time -->
                              <!-- message -->
                              <li class="chat-dialogue-item d-flex align-items-center justify-content-end mb-6">
                                <div class="chat-dialogue-me">
                                  Hello there. Thanks for the follow. Did you notice, that I am an egg? A talking egg? Damn!
                                </div>
                                <div class="align-self-start">
                                  <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/2.jpg)"></div>
                                </div>
                              </li>
                              <!-- /.message -->
                              <!-- message -->
                              <li class="chat-msg-item mb-6">
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="align-self-start">
                                    <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/1.jpg)"></div>
                                  </div>
                                  <div class="chat-dialogue-me">
                                    Hello there. Thanks for the follow. Did you notice, that I am an egg? A talking egg? Damn!
                                  </div>
                                </div>
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="chat-dialogue-me">
                                    Why didn't he come and talk to me himself?
                                  </div>
                                </div>
                              </li>
                              <!-- /.message -->
                              <!-- message -->
                              <li class="chat-dialogue-item d-flex align-items-center justify-content-end mb-6">
                                <div class="chat-dialogue-me">
                                  I never meant to come between you and him.
                                </div>
                                <div class="align-self-start">
                                  <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/2.jpg)"></div>
                                </div>
                              </li>
                              <!-- /.message -->
                              <!-- time -->
                              <li class="chat-time my-6 my-xl-8 small-3 o-70 fw-500 mb-6">
                                <div class="hr-text">
                                  1 hour ago
                                </div>
                              </li>
                              <!-- /.time -->
                              <!-- message -->
                              <li class="chat-msg-item mb-6">
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="align-self-start">
                                    <div class="chat-dialogue-avatar rounded-circle bp-c bs-c br-n" style="background: url(assets/img/avatar/1.jpg)"></div>
                                  </div>
                                  <div class="chat-dialogue-me">
                                    If you do this, you will be dead to me.
                                  </div>
                                </div>
                                <div class="chat-dialogue-item d-flex align-items-center">
                                  <div class="chat-dialogue-me">
                                    I knew you wouldn't be able to see it through.
                                  </div>
                                </div>
                              </li>
                              <!-- /.message -->
                            </ul>
                          </div>
                          
                        </div>
                        <div id="sVHF_form" class="chat-ct-form pr-4 pr-xl-0 pl-4 pt-4">
                          <form class="msg-snd input-light">
                            <div class="input-group input-transparent bg-transparent">
                              <div class="input-group-prepend input-group-prepend">
                                <a class="input-group-text lead-1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="far fa-smile-beam"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-top shadow-1 position-absolute mt-1">
                                  <a class="dropdown-item" href="#"><i class="far fa-smile-beam"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-smile-wink"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-surprise"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-tired"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-sad-tear"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-grin-tongue-squint"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-grin-tears"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-angry"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-meh"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-grimace"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-grin"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-grin-hearts"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-grin-stars"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-kiss"></i></a>
                                  <a class="dropdown-item" href="#"><i class="far fa-meh-rolling-eyes"></i></a>
                                </div>
                              </div>
                              <input type="text" class="form-control">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="icon-paperclip"></i></span>
                              </div>
                              <div class="input-group-append ml-3">
                                <button class="btn btn-lg btn-warning px-4" type="button"><i class="fas fa-paper-plane mr-1"></i></button>
                              </div>
                            </div>
                          </form>
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
      <!-- /.content area -->

    </main>

    <!-- footer -->
    <footer class="footer footer-dark bg-dark py-9">
      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="#" class="logo d-block mb-4"><img src="assets/img/logo-gaming.png" alt="Wicodus" class="logo-dark"></a>
                <p>Wicodus is a online store where you can find digital goods at the best prices.</p>
                <div class="social-buttons">
                  <a class="social-twitter" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="social-dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                  <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">About</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="about.html">Our team</a>
                  <a class="nav-link" href="about.html">Careers</a>
                  <a class="nav-link" href="about.html">Cookie Policy</a>
                  <a class="nav-link" href="about.html">Privacy Policy</a>
                  
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Community</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="news.html">Forum</a>
                  <a class="nav-link" href="news.html">Blog</a>
                  <a class="nav-link" href="news.html">News</a>
                  <a class="nav-link" href="news.html">Team</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Help</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                  <a class="nav-link" href="contact.html">Support</a>
                  <a class="nav-link" href="contact.html">Terms & conditions</a>
                  <a class="nav-link" href="contact.html">Refund policy</a>
                </div>
              </div>
              
              <div class="col col-lg-3 order-lg-last">
                <div class="mb-6">
                  <h6 class="text-uppercase fw-600 mb-4">Ways to pay</h6>
                  <div class="text-light lead-5 lh-1">
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-paypal"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-visa"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-amazon-pay"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-stripe"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-jcb"></i></a>
                  </div>
                </div>
                <div>
                  <h6 class="mb-2">Reviews</h6>
                  <div class="text-warning lead-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star text-secondary"></i>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </footer>
    <!-- /.footer -->

    <!-- sign Up -->
    <div class="modal fade" id="userLogin" tabindex="-1" role="dialog" aria-labelledby="userLoginTitle" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header border-secondary">
            <h5 class="modal-title" id="userLoginTitle">Log in</h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
              <div class="text-center my-6"> 
                <a class="btn btn-circle btn-sm btn-google mr-2" href=""><i class="fab fa-google"></i></a>
                <a class="btn btn-circle btn-sm btn-facebook mr-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-circle btn-sm btn-twitter" href=""><i class="fab fa-twitter"></i></a>
              </div>
              <span class="hr-text small my-6">Or</span>
            </div>
            <form class="input-transparent">
              <div class="form-group">
                <input type="text" class="form-control border-secondary" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control border-secondary" name="password" placeholder="Password">
              </div>
              <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked="" id="rememberMeCheck">
                  <label class="custom-control-label" for="rememberMeCheck">Remember me</label> 
                </div>
                <a class="small-3" href="#">Forgot password?</a>
              </div>
              <div class="form-group mt-6">
                <button class="btn btn-block btn-warning" type="submit">Login</button>
              </div>
            </form>
            <span class="small">Don't have an account? <a href="#">Create an account</a></span>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sign Up -->

    <!-- offcanvas-cart -->
    <div id="offcanvas-cart" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
      <div>
        <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <hr class="border-light o-20 mt-8 mb-4">
      </div>
      <div class="offcanvas-cart-body flex-1">
        <div class="offcanvas-cart-list row align-items-center no-gutters">
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
              </div>
              <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</span></a>
                <div class="position-relative lh-1">
                  <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="row align-items-center h-100 no-gutters">
                  <div class="ml-auto text-center">
                    <a href="#"><i class="far fa-trash-alt"></i></a><br>
                    <span class="fw-500 text-warning">€44.99</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
              </div>
              <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</span></a>
                <div class="position-relative lh-1">
                  <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="row align-items-center h-100 no-gutters">
                  <div class="ml-auto text-center">
                    <a href="#"><i class="far fa-trash-alt"></i></a><br>
                    <span class="fw-500 text-warning">€27.59</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <a href="checkout-order.html" class="btn btn-lg btn-block btn-outline-light">View cart</a>
      </div>
    </div>
    <!-- /.offcanvas-cart -->

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- nicescroll -->
    <script src="assets/plugins/scrollbar/jquery.nicescroll.min.js"></script>
    <script src="assets/plugins/scrollbar/jquery.nicescroll.conf.js"></script>

    <!-- User JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>
  </body>
</html>