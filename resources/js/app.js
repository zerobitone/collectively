import './bootstrap'
import {createApp} from 'vue'
import {createRouter, createWebHistory} from 'vue-router'
import App from './App.vue';
import Blog from './components/Blog.vue';
import About from './components/About.vue';

const routes = [
  { path: '/blog', component: Blog },
  { path: '/about', component: About },
];

const router = createRouter(
  {
    history: createWebHistory(),
    routes,
  }
)

createApp(App)
  .use(router)
  .mount("#app")
