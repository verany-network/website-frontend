<template>
  <div class="item">
    <div class="item-cont">
      <figure class="owl_item_review">
        <div>
          <div class="position-relative overflow-hidden">
            <img class="m-0-auto" :src="object.imagelink"
                 alt="Games Store">
            <div class="review_h text-light">
              <a :href="object.clicklink">
                <i v-if="object.type === 'buy'" class="item_icon_cart fas fa-shopping-cart"></i>
                <i v-else></i>
                <span v-if="object.type === 'buy'" class="item_atc_text">BUY</span>
                <span v-else class="item_atc_text">MORE</span>
              </a>
            </div>
          </div>
          <div>
            <h5 class="owl_item_title text-lt"><a href="">{{object.name}}</a></h5>
            <div class="relative small-1">
              <span v-if="object.type === 'buy'" class="owl_item_price">{{ object.price }}</span>
              <span v-else>{{ object.text }}</span>
            </div>
          </div>
        </div>
      </figure>
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