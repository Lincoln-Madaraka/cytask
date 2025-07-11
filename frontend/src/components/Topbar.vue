<template>
  <header class="bg-primary text-light flex items-center justify-between p-4 fixed w-full md:hidden z-30 shadow-md">
    <div class="flex items-center gap-3">
      <img src="/logo.png" alt="logo" class="w-8 h-8" />
      <div>
        <h1 class="text-lg font-bold">Cytask</h1>
        <p class="italic text-xs">Organize, Execute, Achieve.</p>
      </div>
    </div>
    <button @click="$emit('toggleSidebar')" aria-label="Toggle menu" class="text-accent text-2xl">
      <i class="fas fa-bars"></i>
    </button>
  </header>
</template>
