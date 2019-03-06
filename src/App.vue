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

<style lang="scss">
@import url('https://fonts.googleapis.com/css?family=Overpass');
#app {
  font-family: 'Overpass', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  font-size: 17px;
}
#nav {
  a {
    font-weight: bold;
    color: #2c3e50;
    font-size: 15px;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
