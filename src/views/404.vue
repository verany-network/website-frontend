<template>
  <main class="main-content h-fullscreen d-flex align-items-center text-center text-light">
    <div class="container">
      <img src="assets/img/logo.png">
      <hr class="w-10 border-top-2 my-6 my-xl-7 border-warning">
      <h2 class="display-md-4">404 - Nothing to see here</h2>
      <p class="lead">You may have mistyped the address or the page may have moved.</p>
      <br>
      <router-link tag="button" type="button" to="/index" class="btn btn-warning btn-round"><i class="fas fa-arrow-left"></i> To Homepage</router-link>
    </div>
  </main>
</template>