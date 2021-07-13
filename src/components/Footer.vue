<template>
  <footer class="footer footer-dark bg-dark py-9">
    <div class="container">
      <div class="row gutters-y">
        <div class="col-6 col-lg-3">
          <a href="#" class="logo d-block mb-4"><img src="assets/img/logo.png" alt="Logo" class="logo-dark"></a>
          <p>Verany is a server with the aim of offering innovative game add-ons with an engaging gaming experience
            for everyone. </p>
          <div class="social-buttons">
            <a class="social-mail" href="mailto:contact@verany.net"><i class="far fa-envelope"></i></a>
            <a class="social-teamspeak" href="ts3server://verany.net"><i class="fab fa-teamspeak"></i></a>
            <a class="social-discord" href="https://discord.gg/Yn9Ws9w6d5"><i class="fab fa-discord"></i></a>
            <a class="social-twitter" href="https://twitter.com/VeranyNET"><i class="fab fa-twitter"></i></a>
            <a class="social-youtube" href="https://www.youtube.com/channel/UCduDElXYi8zPjZMTIxCT45A"><i
                class="fab fa-youtube"></i></a>
          </div>
        </div>

        <div class="col-6 col-lg-2">
          <h6 class="text-uppercase fw-600 mb-4">Useful links</h6>
          <div class="nav flex-column">
            <a class="nav-link" href="./rules/rules.html">Rules & Policies</a>
            <a class="nav-link" href="./rules/terms.html">Terms of Service</a>
            <router-link tag="a" class="nav-link" to="/privacy">Privacy Policy</router-link>
            <router-link tag="a" class="nav-link" to="/imprint">Impressum</router-link>
          </div>
        </div>

        <div class="col-6 col-lg-2">
          <h6 class="text-uppercase fw-600 mb-4">Services</h6>
          <div class="nav flex-column">
            <a class="nav-link" href="#">Home</a>
            <a class="nav-link" href="https://support.verany.net">Support</a>
            <a class="nav-link" href="https://apply.verany.net">Jobs</a>
          </div>
        </div>

        <div class="col col-lg-3 order-lg-last">
          <div class="mb-6">
            <h6 class="text-uppercase fw-600 mb-4">Ways to pay</h6>
            <div class="text-light lead-5 lh-1">
              <a href="https://www.paypal.com/" class="mr-2"><i class="fab fa-cc-paypal"></i></a>
              <a href="https://www.apple.com/de/apple-pay/" class="mr-2"><i class="fab fa-cc-apple-pay"></i></a>
              <a href="https://pay.amazon.de/" class="mr-2"><i class="fab fa-cc-amazon-pay"></i></a>
              <a href="https://www.visa.de/" class="mr-2"><i class="fab fa-cc-visa"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>
</template>