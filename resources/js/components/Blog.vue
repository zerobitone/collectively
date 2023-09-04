<template>
  <div id="blog-home">
    <div>
      <h1>Blog Posts</h1>
      <ul>
        <li v-for="post in posts" :key="post.id">
          {{ post && post.title ? post.title : 'No Title' }}
        </li>
      </ul>
    </div>
  </div>
</template>

<style scoped>

</style>

<script>
export default {
//  name: 'Blog',
  data() {
    return {
      posts: [],
    };
  },
  created() {
    this.fetchPosts();
  },
  methods: {
    async fetchPosts() {
      try {
        const response = await axios.get('http://laravel.test/api/posts'); // Passe die API-URL an deine Konfiguration an
        console.log('Response:', response);
        this.posts = response.data.data;
      } catch (error) {
        console.error('Error fetching posts:', error);
      }
    },
  },
};
</script>
