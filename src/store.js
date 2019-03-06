import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    page: {
      content: {
        rendered: ''
      }
    }
  },
  mutations: {
    loadPage(state, promisePage){
      promisePage.then(response => state.page = response.data)
    }
  },
  actions: {

  },
  getters: {
    pageRendered: state => {
      return state.page.content.rendered
    }
  }
})
