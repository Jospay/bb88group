<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const showMoreSolutions = ref(false)
</script>

<template>
  <main class="bg-slate-950 text-slate-100 min-h-screen font-sans relative">
    
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

    <section class="relative px-6 lg:px-20 pt-32 pb-20 bg-gradient-to-br from-emerald-950 via-slate-950 to-cyan-950 flex flex-col items-center min-h-screen"> 
       <div class="max-w-7xl mx-auto w-full flex flex-col items-center"> 
          
         <div class="text-center max-w-4xl mx-auto mb-16"> 
           <h2 class="text-4xl lg:text-5xl text-white font-black mb-4 leading-tight"> 
             <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400"> 
               Climate-Smart Modern 
             </span> 
             <br /> 
             Digital Infrastructure 
           </h2>     
           <p class="text-base lg:text-lg text-slate-400 font-medium tracking-wide"> 
             Comprehensive Intelligent Sustainability & Climate Resilience Architecture Framework 
           </p> 
         </div> 

         <main class="w-full space-y-16"> 
            
           <div class="max-w-7xl"> 
             <h2 class="text-2xl font-bold text-white mb-2">Overview</h2> 
             <p class="text-base text-slate-300 leading-relaxed"> 
               The Climate-Smart Modern Digital Infrastructure is an advanced, AI-powered ecosystem designed to enhance climate resilience, sustainability, and intelligent environmental management. It integrates AI, IoT, renewable energy systems, and real-time analytics to support smart cities, agriculture, energy, and resilient communities through a unified digital platform.
             </p> 
           </div> 

           <div id="core-solutions-section"> 
             <h2 class="text-2xl font-bold text-white mb-6">Core Solutions</h2> 
              
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full"> 
                
               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Climate Intelligence Infrastructure
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>Real-time environmental monitoring</li>
                   <li>Predictive analytics for climate risks</li>
                   <li>Carbon footprint tracking</li>
                   <li>Early warning systems</li>
                 </ul> 
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Smart Renewable Energy Systems
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>Solar and wind integration</li>
                   <li>Smart grids & load balancing</li>
                   <li>AI-powered energy optimization</li>
                   <li>Storage & EV-to-grid systems</li>
                 </ul> 
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   AI & ML Climate Intelligence
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>Predictive forecasting analytics</li>
                   <li>Smart resource optimization</li>
                   <li>Sustainability recommendations</li>
                   <li>Satellite & drone vision tracking</li>
                 </ul> 
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   IoT Environmental Monitoring
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>Climate, water & energy sensors</li>
                   <li>Air quality & health monitoring</li>
                   <li>Flood detection systems</li>
                   <li>Edge computing real-time insights</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Smart Water & Resource Management
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>AI water demand forecasting</li>
                   <li>Circular economy waste systems</li>
                   <li>Biodiversity monitoring</li>
                   <li>Sustainable resource tracking</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Smart Infrastructure & Mobility
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>Energy-efficient smart buildings</li>
                   <li>EV and green transport systems</li>
                   <li>Traffic & logistics optimization</li>
                   <li>Industrial tracking systems</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   GIS & Climate Spatial Intelligence
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>Vulnerability & risk mapping</li>
                   <li>Infrastructure planning tools</li>
                   <li>Satellite environmental analysis</li>
                   <li>Smart city zoning strategies</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Climate Command Center
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90"> 
                   <li>Centralized dynamic dashboards</li>
                   <li>Real-time energy tracking</li>
                   <li>Disaster response systems</li>
                   <li>AI decision support/simulations</li>
                 </ul> 
               </div> 

             </div> 

             <div class="mt-8 text-center"> 
               <button 
                 @click="showMoreSolutions = !showMoreSolutions" 
                 class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-white/10 bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-semibold transition-all shadow-md cursor-pointer group"
               > 
                 <span>{{ showMoreSolutions ? 'Show Less' : 'Show More' }}</span> 
                 <svg 
                   xmlns="http://www.w3.org/2000/svg" 
                   fill="none" 
                   viewBox="0 0 24 24" 
                   stroke-width="2.5" 
                   stroke="currentColor" 
                   :class="{ 'rotate-180': showMoreSolutions }" 
                   class="w-4 h-4 transition-transform duration-300"
                 >
                   <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                 </svg>
               </button> 
             </div> 

           </div>  

           <div id="key-benefits-section"> 
             <h2 class="text-2xl font-bold text-white mb-6">Key Benefits</h2> 
              
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full"> 
                
               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Environmental Benefits 
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90">
                   <li>Reduced carbon emissions</li>
                   <li>Enhanced climate resilience</li>
                   <li>Ecosystem protection</li>
                   <li>Real-time monitoring</li>
                 </ul>
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Operational Benefits 
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90">
                   <li>Intelligent management</li>
                   <li>Automation efficiencies</li>
                   <li>Predictive maintenance</li>
                   <li>Infrastructure visibility</li>
                 </ul>
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Economic Benefits 
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90">
                   <li>Lower operational costs</li>
                   <li>Green tech economic growth</li>
                   <li>Sustainable investments</li>
                   <li>Long-term cost optimization</li>
                 </ul>
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Social Benefits 
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90">
                   <li>Improved public safety</li>
                   <li>Resilient communities</li>
                   <li>Sustainability awareness</li>
                   <li>Inclusive tech access</li>
                 </ul>
               </div> 
             </div> 
           </div>

           <div class="w-full pt-4">
             <h2 class="text-3xl font-bold text-white mb-2 text-start">Impact</h2>
             <p class="border-l-4 border-emerald-500 pl-4 text-start text-slate-300">
               This infrastructure enables a future-ready, sustainable digital ecosystem that supports climate adaptation, smart cities, renewable energy, and resilient communities. By combining AI, IoT, and environmental intelligence, it drives smarter decision-making, protects natural resources, and accelerates global sustainability transformation.
             </p>
           </div>

         </main> 
       </div> 
    </section> 
  </main>
</template>