<template>
  <div id="app">
    <div id="nav">
      <nav-bar></nav-bar>
    </div>
    <div>
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
import NavBar from '@/components/NavBar.vue'
import Page from '@/views/Page.vue'

export default {
  components: {
    NavBar, Page
  },
  data() {
    return {
      pageId: ''
    }
  }
}
</script>
