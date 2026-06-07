<script lang="ts" setup>
import { ref } from 'vue'

// Reactive state variables for handling conditional element visibility
const showMoreSolutions = ref(false)
const showAgriMap = ref(false)
</script>

<template>
  <div class="bg-slate-950 text-slate-100 min-h-screen font-sans antialiased">
    <div class="absolute top-6 left-6 lg:left-20 z-50">
      <a href="../solution.html" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-slate-200 hover:text-white text-sm font-medium transition-all group">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Back to Solutions
      </a>
    </div>

    <section class="relative px-6 lg:px-20 pt-32 pb-20 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex flex-col items-center min-h-screen">
      <div class="max-w-7xl mx-auto w-full flex flex-col items-center">
        
        <div class="text-center max-w-7xl mx-auto mb-4">
          <h2 class="text-4xl lg:text-5xl text-white font-black mb-4 leading-tight">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
              Bagsakan 
            </span>
            Ecosystem
          </h2>    
          <p class="text-base lg:text-lg text-slate-400">
            Comprehensive Digital Agricultural Logistics & Smart Market Framework
          </p>
          <img src="../bagsakan all.png" alt="Bagsakan Ecosystem Diagram" class="mt-3 rounded-lg w-full max-w-3xl mx-auto" />
        </div>

        <main class="w-full space-y-4">
          
          <div class="max-w-7xl">
            <h2 class="text-2xl font-bold text-white mb-2">Overview</h2>
            <p class="text-base text-slate-300 leading-relaxed">
              The Bagsakan Ecosystem is a smart, AI-powered agricultural commerce and logistics platform that transforms traditional farm-to-market systems into a fully digital, efficient, and sustainable network. It integrates farmers, markets, logistics, and consumers into one connected ecosystem to improve food security, profitability, and supply chain transparency.
            </p>
          </div>

          <div id="core-solutions-section">
            <h2 class="text-2xl font-bold text-white mb-6">Core Solutions</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
              
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Intelligent Logistics & Distribution
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Smart route planning and delivery optimization</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Traffic- and weather-aware logistics systems</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Fuel efficiency and delivery time prediction</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Real-time tracking and fleet monitoring</span>
                </div>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Market Intelligence & Analytics
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Commodity trend and price prediction</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Demand and consumption analysis</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Buyer behavior insights</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Regional market monitoring</span>
                </div>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Risk Detection & Supply Chain Alerts
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Supply shortage and disruption detection</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Spoilage and cold chain failure alerts</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Climate-related risk monitoring </span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Automated early warning systems </span>
                </div>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Geo-Tagging & Agricultural Mapping
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">GIS-based farm-to-market mapping</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Warehouse and distribution tracking</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Delivery network visualization</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Production and demand heatmaps</span>
                </div>
                <div class="mt-4">
                  <button
                    @click="showAgriMap = !showAgriMap"
                    class="px-4 py-2 mx-auto w-full rounded-lg bg-gradient-to-r from-emerald-500 to-cyan-500 text-slate-900 font-medium hover:bg-emerald-300 transition-colors cursor-pointer"
                  >
                    {{ showAgriMap ? 'Hide Image' : 'Show Image' }}
                  </button>

                  <img
                    id="agri-map"
                    src="/images/agri-mapping.jpg"
                    alt="Agricultural Mapping"
                    :class="{ 'hidden': !showAgriMap }"
                    class="mt-4 w-full rounded-lg border border-emerald-400/40"
                  />
                </div>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Cold Chain & Preservation Monitoring
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Temperature and humidity tracking via IoT </span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Shelf-life and freshness analytics</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Spoilage prevention systems</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Smart storage monitoring</span>
                </div>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Food Security Intelligence Platform
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Supply-demand balancing and shortage prediction</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Food accessibility and distribution tracking</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Government and national monitoring dashboards</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Emergency response planning tools</span>
                </div>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Digital Platform & IoT Integration
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Mobile marketplace for farmers and buyers</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Real-time delivery and inventory tracking </span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">AI-powered alerts and analytics dashboards</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">IoT devices (GPS, sensors, smart warehouses)</span>
                </div>
              </div>

            </div>

            <div class="mt-8 text-center">
              <button @click="showMoreSolutions = !showMoreSolutions" class="inline-flex bg-emerald-500 items-center gap-2 px-6 py-3 rounded-xl border border-white/10 hover:bg-emerald-600 text-gray-900 font-medium transition-all shadow-md cursor-pointer">
                <span>{{ showMoreSolutions ? 'Show Less' : 'Show More' }}</span>
              </button>
            </div>

          </div> 

          <div id="key-benefits-section">
            <h2 class="text-2xl font-bold text-white mb-6">Key Benefits</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
              
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Economic Benefits
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Increased farmer income and profitability </span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Reduced logistics and operational costs </span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Improved market efficiency and trade flow</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Stronger agricultural economy</span>
                </div>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Environmental Benefits
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Reduced carbon emissions through optimized routes</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Lower food waste and spoilage</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Sustainable and eco-friendly logistics systems </span>
                </div>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Social Benefits
                </h3>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Improved food accessibility for communities</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Digital inclusion for farmers and stakeholders</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Greater transparency in agricultural markets</span>
                </div>
                <div class="flex items-center gap-3">
                  <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                  <span class="text-slate-200 text-sm">Stronger, more resilient food systems</span>
                </div>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-gradient-to-r from-emerald-500 to-cyan-500 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-gray-900 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Impact
                </h3>
                <div class="flex items-center gap-3">
                  <span class="text-gray-900 text-sm">
                    The ecosystem enables a future-ready agricultural system by combining AI, IoT, logistics, and digital platforms to create a smarter, more resilient, and sustainable food distribution network, benefiting farmers, businesses, governments, and communities nationwide. 
                  </span>
                </div>
              </div>
            </div>

            </div> 

        </main>
      </div>
    </section>
  </div>
</template>