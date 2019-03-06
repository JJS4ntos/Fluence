import config from '../config'
import axios from 'axios'

export default {
  methods: {
    getPosts() {
      let url = config.API_URL.concat('/wp/v2/posts')
      return axios.get(url)
    },
    getMenu(){
      let url = config.API_URL.concat('/fluence/menu')
      return axios.get(url)
    },
    getPage(id){
      let url = config.API_URL.concat('/wp/v2/pages/'.concat(id))
      return axios.get(url)
    },
    getWebsiteTitle(){
      let url = config.API_URL.concat('/fluence/title')
      return axios.get(url)
    }
  }
}
