<template>
    <span>
        <b-nav-item v-if="pageFetched.object == 'page'" href="#" @click="goPage" ><router-link :to="slug">{{ title }}</router-link></b-nav-item>
        <b-nav-item v-else :href="pageFetched.url">{{ title }}</b-nav-item>
    </span>
</template>
<script>
export default {
    props: ['pageFetched'],
    data() {
        return {
            id: '',
            title: '',
            slug: ''
        }
    },
    methods:{
        goPage(){
            this.$store.commit('loadPage', this.getPage(this.id))
        }
    },
    mounted(){
        if(this.pageFetched.object == 'page'){
            this.getPage(this.pageFetched.object_id).then(response => {
                let page = response.data
                this.id = this.pageFetched.object_id
                this.title = page.title.rendered
                this.slug = page.slug 
            })
            .catch(err => console.log(err))
        }else{
            this.id = this.pageFetched.ID;
            this.title = this.pageFetched.title;
            this.slug = this.pageFetched.post_name;
        }
    }
}
</script>

