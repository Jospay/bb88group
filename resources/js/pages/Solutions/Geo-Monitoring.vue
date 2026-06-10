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

    <section class="relative px-6 lg:px-20 pt-32 pb-16 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex flex-col items-center min-h-screen">
       <div class="max-w-7xl mx-auto w-full flex flex-col items-center">
         
         <div class="text-center max-w-7xl mx-auto mb-10">
           <h2 class="text-4xl lg:text-5xl text-white font-black mb-3 leading-tight">
             <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
               Geo-Tagging & Real-Time Monitoring
             </span>
             <br />
             Modern Digital Architecture
           </h2>    
           <p class="text-base lg:text-lg text-slate-400">
               Comprehensive Intelligent Spatial Monitoring & Smart Tracking Ecosystem
           </p>
         </div>

         <main class="w-full space-y-10">
           
           <div class="max-w-7xl">
             <h2 class="text-2xl font-bold text-white mb-2">Overview</h2>
             <p class="text-base text-slate-300 leading-relaxed">
               An advanced AI-powered geospatial and real-time monitoring platform that delivers intelligent location tracking, environmental sensing, infrastructure visibility, and predictive analytics across industries.
             </p>
             <p class="text-base text-slate-300 leading-relaxed mt-2">
               This ecosystem integrates GIS mapping, IoT sensors, AI/ML analytics, satellite & drone monitoring, and cloud infrastructure to enable real-time decision-making, operational transparency, and smart ecosystem management.
             </p>
           </div>

           <div id="core-solutions-section">
             <h2 class="text-2xl font-bold text-white mb-4">Core Solutions</h2>
             
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
               
               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   Geo-Tagging & Spatial Intelligence
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'High-precision GPS tracking and geo-fencing',
                     'Interactive GIS mapping and visualization',
                     'Asset, infrastructure, and environmental geo-tagging',
                     'Satellite imagery and drone-based monitoring',
                     'Smart territory and zoning management'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   Real-Time Monitoring Systems
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Environmental monitoring (air, water, climate)',
                     'Smart agriculture (soil, crops, irrigation, pests)',
                     'Logistics & supply chain tracking (fleet, warehouse)',
                     'E-mobility monitoring (EV fleets, charging network)',
                     'Health & biotech monitoring (labs, bio-surveillance)'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   AI & Predictive Intelligence
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Predictive analytics (demand, risk, climate)',
                     'AI-powered anomaly detection and alerts',
                     'Computer vision (drone data, crop health)',
                     'Smart recommendation engines for optimization',
                     'Real-time decision support systems'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   IoT & Smart Sensor Networks
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Environmental, agricultural, and health sensors',
                     'Real-time data collection and synchronization',
                     'Connectivity via 5G, LoRaWAN, WiFi, BLE',
                     'Edge computing for instant local processing'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <!-- Expandables -->
               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   GIS & Advanced Spatial Analytics
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Heatmaps and geospatial visualization',
                     'Route optimization and logistics intelligence',
                     'Climate risk and environmental impact mapping',
                     'Smart city and infrastructure monitoring'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   Real-Time Data Processing & Big Data
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Stream analytics and event-driven processing',
                     'Big data platforms (Kafka, Spark, Hadoop)',
                     'AI-ready data lakes and spatial databases',
                     'Historical and predictive data modeling'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   Smart Command & Control Center
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Centralized monitoring dashboards',
                     'AI-powered analytics visualization',
                     'Real-time alerts and emergency systems',
                     'Decision support and simulations'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   Cloud & Secure Infrastructure
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Cloud-native architecture (AWS, Azure, GCP)',
                     'Microservices and Kubernetes orchestration',
                     'Secure APIs and zero-trust cybersecurity',
                     'Scalable and interoperable systems'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-emerald-300">
                   Digital Twin & Simulation
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Virtual replicas of ecosystems and nodes',
                     'Smart city, agri, and logistic simulations',
                     'Predictive modeling and scenario testing',
                     'Operational optimization and planning'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

             </div>

             <div class="mt-6 text-center">
               <button 
                 @click="showMoreSolutions = !showMoreSolutions"
                 class="inline-flex bg-emerald-500 items-center justify-center px-6 py-3 rounded-xl border border-white/10 hover:bg-emerald-600 text-gray-900 font-medium transition-all shadow-md cursor-pointer"
               >
                 <span>{{ showMoreSolutions ? 'Show Less' : 'Show More' }}</span>
               </button>
             </div>
           </div> 
            
           <div id="use-case-section" class="w-full">
             <h2 class="text-2xl font-bold text-white mb-4">Key Use Cases</h2>
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                 <div 
                   v-for="caseItem in [
                     'Smart Agriculture & Food Security',
                     'Logistics & Distribution (Bagsakan)',
                     'E-Mobility & Transport Systems',
                     'Environmental & Climate Monitoring',
                     'Smart Cities & Infrastructure',
                     'Healthcare & Biotech Monitoring',
                     'Disaster Reduction & Response',
                     'Community & Wellness Systems'
                   ]" 
                   :key="caseItem"
                   class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-full px-5 py-4 transition hover:bg-white/10"
                 >
                     <div class="w-3 h-3 rounded-full bg-emerald-400 shrink-0"></div>
                     <span class="text-slate-200 text-sm font-medium truncate">{{ caseItem }}</span>
                 </div>
             </div>
           </div>

           <div id="key-benefits-section">
             <h2 class="text-2xl font-bold text-white mb-4">Core Benefits</h2>
             
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
               
               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-cyan-300">
                   Operational Benefits
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Real-time visibility across operations',
                     'Faster, data-driven decision-making',
                     'Predictive maintenance & low downtime',
                     'Optimized logistics and allocation'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-cyan-300">
                   Environmental Benefits
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Advanced climate and eco monitoring',
                     'Reduced environmental risks & emissions',
                     'Sustainable resource management',
                     'Stronger resilience and adaptation'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-cyan-300">
                   Economic Benefits
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Lower operational & infrastructure costs',
                     'Increased efficiency and productivity',
                     'Enhanced supply chain performance',
                     'New opportunities in digital economies'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-4 transition-colors group-hover:text-cyan-300">
                   Social Benefits
                 </h3>
                 <div class="flex flex-col gap-2.5">
                   <div class="flex items-center gap-3" v-for="text in [
                     'Improved safety & disaster preparedness',
                     'Better healthcare & bio-surveillance',
                     'Enhanced community services access',
                     'Inclusive, human-centered systems'
                   ]" :key="text">
                     <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                     <span class="text-slate-200 text-sm">{{ text }}</span>
                   </div>
                 </div>
               </div>

             </div>
           </div> 

           <!-- Complete Value Proposition Section -->
           <div class="w-full pt-8 border-t border-white/5">
              <h2 class="text-3xl font-bold text-white mb-3 text-start">Value Proposition</h2>
              <p class="border-l-4 border-emerald-500 pl-4 mb-6 text-slate-300 text-start leading-relaxed">
                <i>This ecosystem delivers a fully integrated intelligent monitoring platform that combines AI, IoT, GIS, and real-time analytics to create smarter, safer, and more sustainable environments.</i>
            </p>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full text-start">
                
                <div class="rounded-xl flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.01] transition-all duration-300">
                    <h4 class="text-emerald-400 font-bold text-lg mb-1"> It empowers governments, industries, and communities with: </h4>
                  <div class="space-y-3.5">
                    <div v-for="item in [
                      'Real-time situational awareness',
                      'Predictive intelligence and automation',
                      'Scalable and secure digital infrastructure',
                      'Future-ready smart ecosystem capabilities'
                    ]" :key="item" class="flex items-center gap-3">
                      <div class="w-2 h-2 rounded-full bg-emerald-400 flex-shrink-0"></div>
                      <span class="text-slate-200 text-sm font-medium">{{ item }}</span>
                    </div>
                  </div>
                </div>

                <div class="rounded-xl flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.01] transition-all duration-300">
                  <div class="mb-4">
                    <h4 class="text-cyan-400 font-bold text-lg mb-1">Future-Ready Innovation</h4>
                  </div>
                  <div class="space-y-3.5">
                    <div v-for="item in [
                      'Autonomous monitoring drones',
                      'Generative AI for spatial intelligence',
                      'Quantum-enabled GIS analytics',
                      'Smart robotic monitoring systems',
                      'Metaverse infrastructure mapping'
                    ]" :key="item" class="flex items-center gap-3">
                      <div class="w-2 h-2 rounded-full bg-cyan-400 flex-shrink-0"></div>
                      <span class="text-slate-200 text-sm font-medium">{{ item }}</span>
                    </div>
                  </div>
                </div>

              </div>
           </div>

         </main>
       </div>
    </section>
  </main>
</template>