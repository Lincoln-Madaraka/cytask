<template>
  <div class="flex flex-col justify-center items-center min-h-[80vh]">
    <div class="max-w-sm w-full p-6 bg-black/60 backdrop-blur-md rounded-xl shadow-lg text-white animate-fade-in-up">
      <h2 class="text-2xl font-bold mb-4 text-center text-accent">Login to Cytask</h2>

      <form @submit.prevent="handleLogin" class="space-y-4">
        <input
          v-model="email"
          type="email"
          placeholder="Email"
          class="w-full p-3 rounded bg-gray-800 border border-gray-700 focus:outline-none focus:border-accent transition"
        />
        <input
          v-model="password"
          type="password"
          placeholder="Password"
          class="w-full p-3 rounded bg-gray-800 border border-gray-700 focus:outline-none focus:border-accent transition"
        />

        <button class="w-full bg-accent text-black py-2 rounded hover:bg-yellow-500 transition">
          Login
        </button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
    }
  },
  methods: {
    handleLogin() {
      // Simple role routing
      if (this.email && this.password) {
        if (this.email.includes("admin")) {
          this.$router.push('/dashboard')
        } else {
          this.$router.push('/tasks')
        }
      } else {
        alert('Please enter both email and password.')
      }
    }
  }
}
</script>

<style scoped>
@keyframes fade-in-up {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.animate-fade-in-up {
  animation: fade-in-up 0.6s ease-out;
}
</style>