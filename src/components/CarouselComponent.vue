<template>
  <section>
    <div id="carousel_main" class="carousel carousel-header slide carousel-fade fl-scn" data-ride="carousel">
      <div class="po_carousel__wrapper">
        <ol class="list-unstyled carousel-indicators def po_carousel-indicators">
          <li v-for="item in items" :key="item.id" data-target="#carousel_main" :data-slide-to="item.id"
              class="slides"></li>
        </ol>
      </div>
      <div class="carousel-inner a-cont">
        <CarouselItemComponent v-for="item in items" :key="item.id" :object="item"></CarouselItemComponent>
      </div>
      <div class="carousel-control-prev a-out-t"><a class="text-light" href="#carousel_main" data-slide="prev"><span
          class="icon-cl-prev text-shadow pe-7s-angle-left"></span></a></div>
      <div class="carousel-control-next a-out-t"><a class="text-light" href="#carousel_main" data-slide="next"><span
          class="icon-cl-next text-shadow pe-7s-angle-right"></span></a></div>
    </div>
  </section>
</template>
<script>

import CarouselItemComponent from "./CarouselItemComponent";

export default {
  components: {CarouselItemComponent},
  props: {
    items: {
      type: Array
    }
  },
  mounted() {
    document.getElementsByClassName("slides")[0].classList.add("active");
    document.getElementsByClassName("carousel-item")[0].classList.add("active");
  }

}

</script>