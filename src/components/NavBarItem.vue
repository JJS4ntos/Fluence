<template>
    <span>
        <b-nav-item href="#"><router-link to="/">{{ name }}</router-link></b-nav-item>
    </span>
</template>
<script>
export default {
    props: ['pageId', 'name']
}
</script>

