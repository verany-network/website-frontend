import Vue from 'vue'
import VueRouter from 'vue-router'

import App from './App.vue'

Vue.config.productionTip = false

Vue.use(VueRouter);

const routes = [
  {path: '*', redirect: '/404'},
  {path: '/', redirect: '/index'},
  {path: '/index', component: () => import('./views/Index')},
  {path: '/imprint', component: () => import('./views/Imprint')},
  {path: '/privacy', component: () => import('./views/Privacy')},
  {path: '/404', component: () => import('./views/404')}
]

const router = new VueRouter({
  mode: 'history',
  hash: false,
  routes
})

new Vue({
  el: '#app',
  render: h => h(App),
  router
})
