<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4 col-sm-3 col-md-1 mr-auto">
          <router-link tag="a" class="navbar-brand logo" to="/index">
            <img src="assets/img/logo.png" alt="Logo" class="logo-light mx-auto">
          </router-link>
        </div>
        <div class="nav-items mr-auto col">
          <div class="input-group-append">
            <button class="navbar-toggler navbar-toggler-fixed" style="transform: translateY(-20px);" type="button"
                    data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar"
                    aria-expanded="false" aria-label="Toggle navigation">☰
            </button>
            <div class="collapse navbar-collapse" id="collapsingNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <router-link tag="a" class="nav-link" to="/index">Home</router-link>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://forum.verany.net/">Forums</a>
                  <div class="-" aria-labelledby="dropdownGaming_software">
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://store.verany.net/">Store</a>
                  <div class="-" aria-labelledby="dropdownGaming_community">
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://apply.verany.net/">Apply</a>
                  <div class="-" aria-labelledby="dropdownGaming_community">
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://support.verany.net/">Support</a>
                  <div class="-" aria-labelledby="dropdownGaming_community">
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--<div class="col-4 col-sm-8 col-md-8 col-lg-6 col-xl-4 ml-auto text-right">
          <a class="btn btn-sm btn-light text-secondary mr-2" href="#" data-toggle="modal" data-target="#userSignIn">Sign in</a>
          <a class="btn btn-sm text-light d-none d-sm-inline-block" href="#" data-toggle="modal" data-target="#userSignUp">Sign up</a>
        </div>-->
      </div>
    </div>
  </nav>
</template>