<template>
  <div class="col-12 mb-8">
    <div class="row">
      <div class="col-lg-4 mb-6 mb-lg-0">
        <div class="card">
          <div class="img__news_wrapper"><img :src="imagehref" :alt='imagealt'>
          </div>
          <div class="badges badges-left badges-bottom text-white">
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <h4 class="text-uppercase mb-3">{{ headline }}</h4>
        <div class="mb-3 small text-info">
          <span><i class="fas fa-tags"></i> {{ type }}</span> <span class="mx-1">-</span>
          <span>{{ date }}</span>
        </div>
        <p>{{ teaser }}</p>
        <a href="news/news-article.html" class="btn btn-outline-light">Read</a>
      </div>
    </div>
  </div>
</template>

<script>

export default {

  name: 'LatestNewsComponent',
  props: {
    imagehref: {
      type: String,
      required: true
    },
    imagealt: {
      type: String
    },
    headline: {
      type: String,
      required: true
    },
    type: {
      type: String,
      required: true,
    },
    date: {
      type: String,
      required: true,
    },
    teaser: {
      type: String,
      required: true,
    },
  }

}

</script>