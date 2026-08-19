<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const showMoreSolutions = ref(false)
// const showMoreBenefits = ref(false)

// Core Solutions Data Structure
const coreSolutions = [
  {
    title: 'Real-Time Environmental Monitoring',
    isExpanded: false,
    items: [
      'Continuous monitoring of air, water, soil, and climate conditions',
      'Smart alerts for pollution, flooding, and environmental risks',
      'Live dashboards for sustainability and environmental insights'
    ]
  },
  {
    title: 'Smart IoT Sensor Networks',
    isExpanded: false,
    items: [
      'Air quality sensors (CO2, PM2.5, VOCs, gases)',
      'Water monitoring (pH, turbidity, contamination detection)',
      'Climate and weather sensors (temperature, rainfall, wind, UV)',
      'Soil and agriculture sensors (moisture, nutrients, crop health)',
      'Bioaerosol and environmental health monitoring systems'
    ]
  },
  {
    title: 'AI-Powered Environmental Intelligence',
    isExpanded: false,
    items: [
      'Climate forecasting and environmental risk prediction',
      'AI-based anomaly detection and alert systems',
      'Computer vision for drone and satellite monitoring',
      'Smart recommendation engines for sustainability optimization'
    ]
  },
  {
    title: 'Edge Computing & Smart Infrastructure',
    isExpanded: false,
    items: [
      'Real-time data processing at the edge',
      'Low-latency environmental monitoring',
      'Smart IoT gateways and distributed intelligence systems',
      'Scalable connectivity via 5G, LoRaWAN, WiFi, and satellite'
    ]
  },
  {
    title: 'GIS & Spatial Environmental Intelligence',
    isExpanded: true, // Marked as expandable card
    items: [
      'Environmental heatmaps and geospatial visualization',
      'Flood risk and climate vulnerability mapping',
      'Resource allocation and sustainability planning',
      'Satellite and drone-based environmental monitoring'
    ]
  },
  {
    title: 'Smart Environmental Applications',
    isExpanded: true,
    items: [
      'Smart Agriculture – precision farming, irrigation, and crop monitoring',
      'Smart Cities – air quality, waste, and sustainability systems',
      'Renewable Energy – solar, wind, and energy performance analytics',
      'Environmental Health – pollution tracking and public health monitoring'
    ]
  },
  {
    title: 'Real-Time Data & Analytics Platform',
    isExpanded: true,
    items: [
      'Stream analytics and real-time data processing',
      'Big data infrastructure (Kafka, Spark, Hadoop)',
      'Environmental data lakes and historical analysis',
      'AI-ready sustainability intelligence systems'
    ]
  },
  {
    title: 'Environmental Command & Control Center',
    isExpanded: true,
    items: [
      'Centralized monitoring dashboards',
      'Real-time alerts and emergency response systems',
      'AI-powered decision support and planning tools',
      'Climate resilience and sustainability management'
    ]
  },
  {
    title: 'Cloud & Secure Digital Infrastructure',
    isExpanded: true,
    items: [
      'Cloud-native systems (AWS, Azure, GCP)',
      'Scalable microservices architecture',
      'Secure data systems with encryption and AI cybersecurity',
      'Interoperable and modular platform design'
    ]
  },
  {
    title: 'Digital Twin & Simulation Systems',
    isExpanded: true,
    items: [
      'Virtual environmental models for simulation and forecasting',
      'Climate disaster and ecosystem modeling',
      'Renewable energy and smart city simulations',
      'Predictive sustainability planning tools'
    ]
  }
]

// Key Benefits Data Structure
const keyBenefits = [
  {
    title: 'Environmental Benefits',
    items: [
      'Improved environmental protection and monitoring',
      'Reduced pollution and ecological risks',
      'Enhanced climate resilience and adaptation',
      'Sustainable resource management'
    ]
  },
  {
    title: 'Operational Benefits',
    items: [
      'Real-time environmental visibility and control',
      'Automated monitoring and alert systems',
      'Predictive analytics for proactive decision-making',
      'Efficient and optimized environmental operations'
    ]
  },
  {
    title: 'Economic Benefits',
    items: [
      'Reduced environmental management costs',
      'Increased efficiency in resource utilization',
      'Growth of green and sustainability-driven industries',
      'Optimized renewable energy performance'
    ]
  },
  {
    title: 'Social Benefits',
    items: [
      'Improved public safety and environmental awareness',
      'Better public health and pollution monitoring',
      'Community empowerment through accessible data',
      'Inclusive and human-centered sustainability systems'
    ]
  }
]
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
               IoT-Based
             </span>
             <br />
             Environmental Systems
           </h2>     
           <p class="text-base lg:text-lg text-slate-400 font-medium tracking-wide">
              Comprehensive Intelligent Environmental Monitoring & Sustainable Infrastructure Architecture
           </p>
         </div> 

         <main class="w-full space-y-16"> 
            
           <div class="max-w-7xl">
             <h2 class="text-2xl font-bold text-white mb-2 text-start">Overview</h2> 
             <p class="text-base text-slate-300 leading-relaxed text-start"> 
              The IoT-Based Environmental Systems is an advanced, AI-powered ecosystem designed to monitor, analyze, and optimize environmental conditions in real time. By integrating IoT sensors, AI analytics, GIS intelligence, cloud computing, and edge technologies, the platform enables smart environmental monitoring, climate resilience, and sustainable infrastructure management.
              This system empowers governments, industries, and communities with real-time environmental intelligence, predictive analytics, and data-driven sustainability solutions.
             </p> 
           </div> 

           <div id="core-solutions-section" class="w-full">
             <h2 class="text-2xl font-bold text-white mb-6 text-start">Core Solutions</h2> 
              
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full text-start"> 
                <div 
                  v-for="(solution, index) in coreSolutions" 
                  :key="index"
                  v-show="!solution.isExpanded || showMoreSolutions"
                  class="rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all duration-300 group w-full"
                > 
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                    {{ solution.title }}
                  </h3> 
                  <div class="flex flex-col gap-3">
                    <div 
                      v-for="(item, itemIdx) in solution.items" 
                      :key="itemIdx"
                      class="flex items-start gap-2.5"
                    >
                      <div class="w-1.5 h-1.5 rounded-full bg-emerald-400 mt-2 flex-shrink-0"></div>
                      <span class="text-sm text-slate-300 leading-normal opacity-90">{{ item }}</span>
                    </div>
                  </div>
                </div> 
             </div> 

             <div class="mt-8 text-center"> 
               <button 
                 @click="showMoreSolutions = !showMoreSolutions"
                 class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-white/10 bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-semibold transition-all shadow-md cursor-pointer group"
               > 
                 <span>{{ showMoreSolutions ? 'Show Less' : 'Show More' }}</span> 
               </button> 
             </div> 
           </div>  

           <div id="key-benefits-section" class="w-full"> 
             <h2 class="text-2xl font-bold text-white mb-6 text-start">Key Benefits</h2> 
              
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full text-start"> 
                <div 
                  v-for="(benefit, index) in keyBenefits" 
                  :key="index"
                  class="rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all duration-300 group w-full"
                > 
                  <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                    {{ benefit.title }}
                  </h3> 
                  <div class="flex flex-col gap-3">
                    <div 
                      v-for="(item, itemIdx) in benefit.items" 
                      :key="itemIdx"
                      class="flex items-start gap-2.5"
                    >
                      <div class="w-1.5 h-1.5 rounded-full bg-cyan-400 mt-2 flex-shrink-0"></div>
                      <span class="text-sm text-slate-300 leading-normal opacity-90">{{ item }}</span>
                    </div>
                  </div>
                </div> 
             </div> 

             <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full text-start mt-10">
                
                <div class="rounded-xl border border-pink-500/30 bg-pink-500/40 backdrop-blur-md p-6 backdrop-blur-md hover:bg-pink-500/[0.04] transition-all group">
                  <h3 class="text-white text-2xl font-bold mb-3 transition-colors group-hover:text-pink-400">
                    Value Proposition
                  </h3>
                  <p class="text-sm text-slate-300 leading-relaxed mb-4 opacity-95">
                    The IoT-Based Environmental Systems delivers a fully integrated, intelligent environmental platform that combines IoT, AI, GIS, and real-time analytics to create smarter, safer, and more sustainable ecosystems.
                  </p>
                  <div class="text-xs font-semibold text-pink-400 uppercase tracking-wider mb-3">System Capabilities:</div>
                  <div class="space-y-2.5">
                    <div v-for="prop in [
                      'Real-time environmental intelligence',
                      'Predictive climate and risk management',
                      'Scalable and secure digital infrastructure',
                      'Data-driven sustainability and smart city development'
                    ]" :key="prop" class="flex items-center gap-2.5">
                      <div class="w-1.5 h-1.5 rounded-full bg-pink-500 flex-shrink-0"></div>
                      <span class="text-sm text-slate-200">{{ prop }}</span>
                    </div>
                  </div>
                </div>

                <div class="rounded-xl border border-yellow-500/30 bg-yellow-500/30 backdrop-blur-md p-6 backdrop-blur-md hover:bg-yellow-500/[0.04] transition-all group">
                  <h3 class="text-white text-2xl font-bold mb-4 transition-colors group-hover:text-yellow-400">
                    Future-Ready Innovation
                  </h3>
                  <div class="space-y-3">
                    <div v-for="innov in [
                      'Autonomous environmental monitoring drones',
                      'AI-powered robotic monitoring systems',
                      'Quantum environmental analytics',
                      'Smart ecological automation',
                      'Metaverse-based sustainability visualization'
                    ]" :key="innov" class="flex items-center gap-2.5">
                      <div class="w-1.5 h-1.5 rounded-full bg-yellow-500 flex-shrink-0"></div>
                      <span class="text-sm text-slate-200">{{ innov }}</span>
                    </div>
                  </div>
                </div>

             </div>
           </div>  
         </main> 
       </div> 
    </section> 

  <div class="max-w-7xl mx-auto w-full py-10 ">
        <h2 class="text-3xl font-bold text-white mb-2 text-start">Conclusion</h2>
        <p class="border-l-4 border-emerald-500 pl-4 text-start text-slate-300">
                  This platform establishes a comprehensive environmental intelligence ecosystem that supports climate resilience, sustainability innovation, and smart infrastructure transformation.
        </p>
      </div>
  </main> 
</template>