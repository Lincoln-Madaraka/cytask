<template>
  <nav
    :class="['bg-primary text-light w-64 min-h-screen p-6 flex flex-col justify-between fixed md:relative z-20 transform transition-transform duration-300', { '-translate-x-full': !isOpen && isMobile }]"
  >
    <div>
      <h2 class="text-xl font-bold mb-6">Menu</h2>
      <ul class="space-y-4">
        <li>
          <router-link
            to="/dashboard"
            class="block px-3 py-2 rounded hover:bg-accent hover:text-black transition"
            active-class="bg-accent text-black font-semibold"
          >
            Dashboard
          </router-link>
        </li>
        <li>
          <router-link
            to="/tasks"
            class="block px-3 py-2 rounded hover:bg-accent hover:text-black transition"
            active-class="bg-accent text-black font-semibold"
          >
            Tasks
          </router-link>
        </li>
        <li>
          <router-link
            to="/users"
            class="block px-3 py-2 rounded hover:bg-accent hover:text-black transition"
            active-class="bg-accent text-black font-semibold"
          >
            Users
          </router-link>
        </li>
      </ul>
    </div>

    <!-- Mobile close button -->
    <button
      v-if="isMobile"
      @click="$emit('close')"
      class="mt-6 px-3 py-2 bg-accent text-black rounded hover:bg-yellow-500 transition"
    >
      Close
    </button>
  </nav>
</template>

<script>
export default {
  props: ['isOpen', 'isMobile'],
}
</script>

<style scoped></style>
