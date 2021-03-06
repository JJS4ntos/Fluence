import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import services from './api/services'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import './css/app.scss'

Vue.config.productionTip = false

Vue.use(BootstrapVue)

Vue.mixin(services)

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
