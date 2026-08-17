<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

// Reactive states for the expandable grid sections
const isSolutionsExpanded = ref(false)
const isBenefitsExpanded = ref(false)
</script>

<template>

    <div class="absolute top-6 left-6 lg:left-20 z-50">
       <Link 
         href="/solutions" 
         class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-slate-200 hover:text-white text-sm font-medium transition-all group"
       >
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
         </svg>
         Back to Solutions
       </Link>
    </div>
  <div class="bg-slate-950 text-slate-100 min-h-screen font-sans relative">
    
    <section class="relative px-6 lg:px-20 pt-32 pb-16 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex flex-col items-center min-h-screen">
       <div class="max-w-7xl mx-auto w-full flex flex-col items-center">
         
         <div class="text-center max-w-7xl mx-auto mb-2">
           <h2 class="text-4xl lg:text-5xl text-white font-black mb-2 leading-tight">
             <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
                Cyber security &
            </span>
             Data protection
           </h2>    
           <p class="text-base lg:text-lg text-slate-400 max-w-3xl mx-auto">
                IT infrastructure, data, and user operations. 
           </p>
         </div>

         <main class="w-full space-y-6">
           

         </main>
       </div>
    </section>

    <div class="max-w-7xl mx-auto w-full pt-8 pb-8 px-6 lg:px-20">
       <h2 class="text-3xl font-bold text-white mb-4">Overall Value Proposition</h2>
       <div class="border-l-4 border-emerald-500 pl-4 space-y-3">
         <p class="text-base text-slate-300 leading-relaxed">
           This ecosystem serves as a powerful platform for education, innovation, and workforce transformation, enabling:
         </p>
         <ul class="list-disc list-inside text-sm text-slate-400 space-y-1 pl-2">
           <li>Sustainable development</li>
           <li>Digital transformation in education</li>
           <li>Climate resilience and environmental protection</li>
           <li>Human-centered technological advancement</li>
         </ul>
       </div>
    </div>
  </div>
</template>