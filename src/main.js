import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import services from './api/services'

Vue.config.productionTip = false

Vue.extend({
  mixins:[services]
})

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
