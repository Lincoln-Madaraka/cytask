import { createRouter, createWebHistory } from 'vue-router'
import Login from '@/pages/Login.vue'
import Dashboard from '@/pages/Dashboard.vue'
import Tasks from '@/pages/Tasks.vue'
import Users from '@/pages/Users.vue'

const routes = [
  { path: '/', name: 'Login', component: Login },
  { path: '/dashboard', name: 'Dashboard', component: Dashboard },
  { path: '/tasks', name: 'Tasks', component: Tasks },
  { path: '/users', name: 'Users', component: Users },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router