<script lang="ts" setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'

// 1. Wayfinder structures its outputs by directory paths or controller mappings.
// Import the 'index' action from your generated solutions directory
import { index as solutionsIndex } from '@/routes/solutions' 
import { home, innovation, partnerships } from '@/routes' // For root level ones

const isMobileMenuOpen = ref(false)

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}
</script>
<template>
  <div class="mb-12 mx-auto max-w-7xl relative">
    <!-- Nav Bar -->
    <nav class="flex items-center justify-between gap-4 py-4 border-b border-white/10">
      <!-- Logo -->
      <div class="flex-shrink-0">
        <Link :href="home()">
          <img src="/assets/bb88.png" alt="logo" class="h-10 sm:h-12 w-auto">
        </Link>
      </div>
      
      <!-- Navigation Links (Hidden on Mobile, Visible on Desktop) -->
      <div class="hidden md:flex items-center gap-8">
        <!-- 2. Pass the executed Wayfinder functions to the :href binding -->
<Link :href="solutionsIndex()" class="text-sm font-medium text-slate-300 hover:text-emerald-400 transition-colors">
  Solutions
</Link>        <Link :href="innovation()" class="text-sm font-medium text-slate-300 hover:text-emerald-400 transition-colors">Innovation</Link>
        <a href="#news" class="text-sm font-medium text-slate-300 hover:text-emerald-400 transition-colors">News</a>
        <Link :href="partnerships()" class="text-sm font-medium text-slate-300 hover:text-emerald-400 transition-colors">Partnerships</Link>
        <a href="#contact" class="text-sm font-medium text-slate-300 hover:text-emerald-400 transition-colors">Contact</a>
      </div>

      <!-- Right Side Actions -->
      <div class="flex items-center gap-4">
        <Link :href="innovation()" class="hidden sm:inline-block bg-emerald-500 hover:bg-emerald-400 text-black font-semibold text-xs md:text-sm px-5 py-2.5 rounded-xl transition shadow-lg shadow-emerald-500/20 cursor-pointer whitespace-nowrap">
          Start Innovation Journey Today?
        </Link>

        <!-- Mobile Menu Button (Hamburger) -->
        <div class="md:hidden">
          <button @click="toggleMobileMenu" class="text-white hover:text-emerald-400 focus:outline-none cursor-pointer p-1">
            <svg v-if="!isMobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg v-else class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </nav>

    <!-- Mobile Dropdown Menu -->
    <div v-if="isMobileMenuOpen" class="md:hidden absolute top-20 left-6 right-6 bg-slate-900/95 border border-white/10 backdrop-blur-xl rounded-2xl p-6 z-50 shadow-2xl flex flex-col gap-4">
      <Link :href="solutionsIndex()" @click="isMobileMenuOpen = false" class="text-base font-medium text-slate-300 hover:text-emerald-400 transition-colors py-2 border-b border-white/5">Solutions</Link>
      <Link :href="innovation()" @click="isMobileMenuOpen = false" class="text-base font-medium text-slate-300 hover:text-emerald-400 transition-colors py-2 border-b border-white/5">Innovation</Link>
      <a href="#news" @click="isMobileMenuOpen = false" class="text-base font-medium text-slate-300 hover:text-emerald-400 transition-colors py-2 border-b border-white/5">Research</a>
      <Link :href="partnerships()" @click="isMobileMenuOpen = false" class="text-base font-medium text-slate-300 hover:text-emerald-400 transition-colors py-2 border-b border-white/5">Partnerships</Link>
      <a href="#contact" @click="isMobileMenuOpen = false" class="text-base font-medium text-slate-300 hover:text-emerald-400 transition-colors py-2 mb-2">Contact</a>
      
      <!-- CTA Button Inside Mobile Menu -->
      <Link :href="innovation()" @click="isMobileMenuOpen = false" class="sm:hidden w-full bg-emerald-500 hover:bg-emerald-400 text-black font-semibold text-sm py-3 rounded-xl transition shadow-lg shadow-emerald-500/20 cursor-pointer text-center">
        Start Innovation Journey Today?
      </Link>
    </div>
    
    <!-- Status Badge -->
    <div class="mt-6 flex justify-start">
      <div class="inline-flex items-center gap-3 bg-white/10 border border-white/20 px-4 py-2 rounded-full backdrop-blur-sm">
        <span class="text-emerald-400 animate-pulse">●</span>
        <span class="text-[10px] sm:text-sm tracking-wide uppercase text-white font-medium">
          Sustainable Innovation Ecosystem
        </span>
      </div>
    </div>
  </div>
</template>