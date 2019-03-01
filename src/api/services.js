export default {
  methods: {
    getAPIUrl(){
      return this.$api.config.API_URL
    },
    getPosts() {
      let url = getAPIUrl().concat('/wp/v2/posts')
      axios.get(url)
          .then(response => {
            console.log(response.data);
          });
    }
  }
}
