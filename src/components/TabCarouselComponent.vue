<template>

  <section class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light">
    <div class="container">
      <div class="position-relative">
        <!-- nav tabs -->
        <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap"
            id="most_popular_products-carousel" role="tablist">
          <li v-for="item in items" :key="item.id" class="nav-item text-fnwp relative">
            <a class="nav-link" :id="'mp-'+item.id+'-tab'" data-toggle="tab" :href="'#mp-'+item.id+'-c'" role="tab"
               :aria-controls="'mp-'+item.id+'-c'"
               aria-selected="false">{{ item.name }}</a>
          </li>
        </ul>
        <div id="color_sel_Carousel-content" class="tab-content fl-scn relative w-100">
          <div v-for="item in items" :key="item.id" class="tab-pane fade" :id="'mp-'+item.id+'-c'" role="tabpanel"
               :aria-labelledby="'mp-'+item.id+'-tab'">
            <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true"
                 data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
              <TabCarouselItemComponent v-for="piece in item.items" :key="piece.id" :object="piece"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>

import TabCarouselItemComponent from "./TabCarouselItemComponent";

export default {
  components: {TabCarouselItemComponent},
  props: {
    items: {
      type: Array
    }
  },
  mounted() {
    document.getElementsByClassName("tab-pane")[0].classList.add("show", "active");
  }
}

</script>