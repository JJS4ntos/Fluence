<template>
    <b-navbar toggleable="lg" type="light">
        <b-navbar-brand href="#">
            <span v-html="title" id="logo"></span>
        </b-navbar-brand>
        <b-navbar-toggle target="nav_collapse" />
        <b-collapse is-nav id="nav_collapse">
            <b-navbar-nav>
                <nav-bar-item v-for="page in pages" :page-fetched="page" :key="page.id"></nav-bar-item>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
</template>
<script>
import NavBarItem from '@/components/NavBarItem.vue'
export default {
    components: {
        NavBarItem
    },
    data() {
        return {
            pages: '',
            title: ''
        }
    },
    mounted() {
        this.getMenu().then( response => this.pages = response.data )
                      .catch(err => this.content = 'Unable to load menu')
        this.getWebsiteTitle().then( response => this.title = response.data )
                            .catch(err => console.log(err))
    }
}
</script>