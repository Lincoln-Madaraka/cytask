<template>
  <div class="min-h-screen dark bg-primary text-light flex">
    <!-- Sidebar -->
    <Sidebar
      :isOpen="sidebarOpen"
      :isMobile="isMobile"
      @close="sidebarOpen = false"
    />

    <div class="flex flex-col flex-1 min-h-screen ml-0 md:ml-64">
      <!-- Topbar for mobile -->
      <Topbar @toggleSidebar="sidebarOpen = !sidebarOpen" />

      <!-- Main content -->
      <main class="flex-1 p-6 pt-20 md:pt-6 overflow-auto">
        <router-view />
      </main>

      <!-- Footer -->
      <footer class="bg-black/40 text-sm text-light px-4 py-2 flex flex-col sm:flex-row justify-between items-center">
        <div class="flex space-x-4 mb-2 sm:mb-0">
          <a href="https://twitter.com/yourhandle" target="_blank" class="hover:text-accent">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="mailto:you@example.com" class="hover:text-accent">
            <i class="fas fa-envelope"></i>
          </a>
          <a href="https://instagram.com/yourhandle" target="_blank" class="hover:text-accent">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <div>
          © {{ new Date().getFullYear() }} | <span>{{ time }}</span> | All rights reserved.
        </div>
      </footer>
    </div>
  </div>
</template>

<script>
import Sidebar from './components/Sidebar.vue'
import Topbar from './components/Topbar.vue'

export default {
  components: { Sidebar, Topbar },
  data() {
    return {
      sidebarOpen: false,
      isMobile: false,
      time: new Date().toLocaleTimeString(),
    }
  },
  mounted() {
    this.checkMobile()
    window.addEventListener('resize', this.checkMobile)
    setInterval(() => (this.time = new Date().toLocaleTimeString()), 1000)
  },
  beforeUnmount() {
    window.removeEventListener('resize', this.checkMobile)
  },
  methods: {
    checkMobile() {
      this.isMobile = window.innerWidth < 768
      if (!this.isMobile) this.sidebarOpen = true
    },
  },
}
</script>
