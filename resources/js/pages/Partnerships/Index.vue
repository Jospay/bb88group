<script lang="ts" setup>
import { Link } from "@inertiajs/vue3";
import { home } from "@/routes"; 

// Structured array organizing categories, individual asset paths, and unique dimensional properties
const partnershipData = [
  {
    category: "Technology Partners:",
    logos: [
      { name: "mpowered", width: "w-55", height: "h-22" },
      { name: "ccnph", width: "w-32", height: "h-20" },
      { name: "elis", width: "w-20", height: "h-20" },
      { name: "epinoy", width: "w-20", height: "h-20" },
      { name: "bagsakan ecosystem", width: "w-20", height: "h-20" },
      { name: "bbtech", width: "w-25", height: "h-20" },
      { name: "ddgns", width: "w-35", height: "h-20" }
    ]
  },
  {
    category: "Media Partners:",
    logos: [
      { name: "npo", width: "w-20", height: "h-20" },
      { name: "adkoto", width: "w-40", height: "h-20" },
      { name: "chatkoto", width: "w-20", height: "h-20" },
      { name: "prepdi", width: "w-20", height: "h-20" }
    ]
  },
  {
    category: "University Partners:",
    logos: [
      { name: "hau", width: "w-20", height: "h-20" },
      { name: "psu", width: "w-20", height: "h-20" },
      { name: "spcf", width: "w-20", height: "h-20" },
      { name: "cca", width: "w-20", height: "h-20" },
      { name: "psau", width: "w-20", height: "h-20" },
      { name: "delasalle", width: "w-20", height: "h-20" },
      { name: "tsu", width: "w-20", height: "h-20" }
    ]
  }
];
</script>

<template>
  <div class="min-h-screen bg-slate-950 font-sans relative overflow-hidden antialiased text-white">
    
    <div class="absolute top-6 left-6 lg:left-20 z-50">
      <Link 
        :href="home()" 
        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-slate-200 hover:text-white text-sm font-medium transition-all group cursor-pointer"
      >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Back to Home
      </Link>
    </div>

    <section class="relative px-6 lg:px-20 pt-22 pb-20 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex items-center justify-center min-h-screen">
      <div class="max-w-7xl mx-auto flex flex-col w-full">
        
        <h2 class="text-4xl lg:text-5xl font-black leading-tight mb-6 max-w-4xl text-center mx-auto">
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">Partnership</span>
        </h2>

        <p class="text-slate-300 text-lg leading-relaxed mb-16 max-w-3xl text-center mx-auto">
          We collaborate with trusted partners to create shared value, combining strengths and resources to deliver better solutions and long-term growth.
        </p>

        <div class="space-y-5">
          <div 
            v-for="section in partnershipData" 
            :key="section.category" 
            class="relative bg-white/5 border border-white/10 backdrop-blur-xl rounded-3xl p-5"
          >
            <h3 class="text-2xl font-bold text-white mb-3 px-5">
              {{ section.category }}
            </h3>
            
            <div class="bg-slate-900/60 rounded-3xl p-6 border border-white/10">
              <div class="flex flex-wrap items-center justify-center gap-8">
                <img 
                  v-for="logo in section.logos" 
                  :key="logo.name"
                  :src="`assets/${logo.name}.png`" 
                  :alt="`${logo.name} logo`" 
                  class="object-contain filter transition-all duration-300 hover:brightness-110"
                  :class="[logo.width, logo.height]"
                />
              </div>
            </div>
          </div>
        </div>
                
      </div>
    </section>
  </div>
</template>