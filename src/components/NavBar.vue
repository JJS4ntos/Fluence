<template>
    <div>
        <b-navbar toggleable="lg" type="light" variant="light">
            <b-navbar-brand href="#">NavBar</b-navbar-brand>
            <b-navbar-toggle target="nav_collapse" />
            <b-collapse is-nav id="nav_collapse">
                <b-navbar-nav>
                    <nav-bar-item v-for="page in pages" :page-id="page.object_id" :name="page.title" :key="page.id"></nav-bar-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>
<script>
import NavBarItem from '@/components/NavBarItem.vue'
export default {
    components: {
        NavBarItem
    },
    data() {
        return {
            pages: ''
        }
    },
    mounted() {
        this.getMenu().then( response => this.pages = response.data )
                      .catch(err => this.content = 'Unable to load menu')
    }
}
</script>