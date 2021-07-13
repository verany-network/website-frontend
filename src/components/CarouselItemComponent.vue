<template>
  <div class="carousel-item">
    <div class="h-fullscreen__page bs-c br-n ow-h"
         :style="`background-image: url('${object.background}');`">
      <div class="w-100 d-flex jc-c overlay">
        <!-- sm-overlay -->
        <div class="overlay bg-light_A-20 d-lg-none"></div>
        <div class="overlay bg-dark_A-50 d-lg-none"></div>
        <!-- lg-overlay -->
        <div
            class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2"
            data-carousel-animation="fade"></div>
        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms"
             data-carousel-animation="fade"></div>
      </div>
      <div class="d-flex align-items-center h-100">
        <div class="container">
          <div class="row align-items-center h-100">
            <div class="col-12 mr-auto ml-lg-0 col-lg-5">
              <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">

                <h2 class="carousel__heading text-light fadeInDown ad-500ms">{{ object.name }}</h2>
                <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">{{ object.description }}</p>
                <div class="d-flex fadeInLeft ad-900ms">
                  <a class="disabled btn btn-lg bg-dark_A-50 o-1 text-light br-round-0tr br-round-0br parallelogram un_text mb-0"><span
                      class="carousel__discount td-lt text-light"><i :class="object.leftButtonIcon"></i></span></a>
                  <a :href="object.rightButtonHref"
                     class="btn btn-lg btn-light parallelogram br-round-0tl br-round-0bl un_text mb-0"><span
                      class="d-block">{{ object.rightButtonText }}</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {

  props: {
    object: {
      type: Object
    }
  }

}

</script>