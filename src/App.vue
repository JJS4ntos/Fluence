<template>
  <div id="app">
    <!--<div id="nav">
      <router-link to="/">Home</router-link>
      <router-link to="/about">About</router-link>
    </div>-->
    <div id="nav">
      <nav-bar></nav-bar>
    </div>
    <div>
      <page :page-id="pageId"></page>
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
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 30px;
  a {
    font-weight: bold;
    color: #2c3e50;
    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
