<template>
  <div id="app">
    <NavBar />
  <router-view />
  </div>
</template>

<script  type="text/javascript">
import NavBar from "./components/NavBar.vue";
export default {
  components: {
    NavBar, // register component
  },
};
</script>

<style scoped>
#app {
  color: #63a35c;
}
</style>
