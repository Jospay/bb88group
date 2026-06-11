<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
import { index as solutionsIndex } from '@/routes/solutions'

// Reactive state for the "Show More" functionality
const showMoreSolutions = ref(false)
</script>

<template>
  <main class="bg-slate-950 text-slate-100 min-h-screen font-sans relative">
    
    <!-- Back Button -->
    <div class="absolute top-6 left-6 lg:left-20 z-50">
      <Link 
        :href="solutionsIndex()" 
        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-slate-200 hover:text-white text-sm font-medium transition-all group"
      >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Back to Solutions
      </Link>
    </div>

    <!-- Main Wrapper Section -->
    <section class="relative px-6 lg:px-20 pt-32 pb-20 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex flex-col items-center min-h-screen">
      <div class="max-w-7xl mx-auto w-full flex flex-col items-center">
        
        <!-- Header -->
        <div class="text-center max-w-4xl mx-auto mb-12">
          <h2 class="text-4xl lg:text-5xl text-white font-black mb-4 leading-tight">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
              Community Empowerment
            </span>
            Programs
          </h2>    
          <p class="text-base lg:text-lg text-slate-400">
            Comprehensive Human-Centered Sustainability, Digital Inclusion & Social Innovation Framework
          </p>
        </div>
        
        <main class="w-full space-y-6">

          <!-- Vision and Mission Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
            <!-- Vision -->
            <div class="text-left rounded-xl border border-emerald-500/50 bg-emerald-700/50 backdrop-blur-md p-6 hover:bg-emerald-500/[0.04] transition-all group">
              <h3 class="text-white text-2xl font-bold mb-2 transition-colors group-hover:text-emerald-300">
                Vision
              </h3>
              <p class="text-sm text-white leading-relaxed">
                To create digitally empowered, sustainable, and resilient communities that enhance quality of life, strengthen economies, and promote environmental stewardship through innovation and collaboration.
              </p>
            </div>

            <!-- Mission -->
            <div class="text-left rounded-xl border border-cyan-500/50 bg-cyan-700/50 backdrop-blur-md p-6 hover:bg-cyan-500/[0.04] transition-all group">
              <h3 class="text-white text-2xl font-bold mb-2 transition-colors group-hover:text-cyan-300">
                Mission
              </h3>
              <p class="text-sm text-white leading-relaxed">
                To deliver inclusive, AI-powered, and sustainability-driven solutions that empower individuals, support communities, and enable long-term social and economic development.
              </p>
            </div>
          </div>
          
          <!-- Overview Section -->
          <div class="max-w-7xl">
            <h2 class="text-2xl font-bold text-white mb-2">Overview</h2>
            <p class="text-base text-white leading-relaxed mb-2">
              The Community Empowerment Programs Framework is a human-centered, technology-driven ecosystem designed to build resilient, inclusive, and sustainable communities. It integrates digital platforms, AI intelligence, sustainability initiatives, smart agriculture, and social innovation into one unified system.
            </p>
            <p class="text-base text-white leading-relaxed">
              This ecosystem empowers individuals, organizations, and local economies through digital inclusion, smart livelihoods, environmental stewardship, and future-ready skills development.
            </p>
          </div>

          <!-- Core Solutions Section -->
          <div id="core-solutions-section">
            <h2 class="text-2xl font-bold text-white mb-4">Core Solutions</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
              
              <!-- Card 1 -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Digital Community Empowerment Platform
                  </h3>
                  <p class="text-xs text-white mb-4">
                    A centralized digital ecosystem connecting communities, organizations, and stakeholders.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Community portals & mobile apps</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Smart engagement and collaboration tools</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">AI-powered participation analytics</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Inclusive and accessible digital services</span></div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Sustainability & Climate Resilience Programs
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Programs focused on environmental awareness and long-term resilience.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Climate adaptation and disaster preparedness</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Community environmental initiatives</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Sustainable resource management</span></div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Smart Livelihood & Entrepreneurship Systems
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Tools to drive economic growth and financial inclusion.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Community e-commerce platforms</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Digital payments and financial access</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Startup incubation and MSME support</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Cooperative and supply chain tools</span></div>
                </div>
              </div>

              <!-- Card 4 -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    AI-Powered Community Intelligence
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Advanced analytics for smarter decision-making and planning.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Predictive community insights</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Social and economic analytics</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Resource optimization insights</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Climate and risk forecasting</span></div>
                </div>
              </div>

              <!-- Hidden Cards (Toggled via Vue Class Binding) -->
              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Digital Learning & Workforce Development
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Education systems for future-ready communities.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Digital literacy & cybersecurity</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">AI and technology training programs</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Sustainability & green education</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Professional development metrics</span></div>
                </div>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Community Wellness & Human Development
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Programs that enhance well-being and social inclusion.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Mental health and wellness initiatives</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Youth leadership & innovation modules</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Women, senior, and minority inclusion</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Inclusive social support structures</span></div>
                </div>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Smart Agriculture & Food Security
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Technology-driven solutions for sustainable food systems.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Precision farming and smart irrigation</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Climate-smart agriculture training</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Food production monitoring systems</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Digital market access for farmers</span></div>
                </div>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Smart Governance & Community Systems
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Transparent, participatory, and data-driven governance.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Community dashboards and analytics</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Digital voting & tracking frameworks</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Emergency coordination operations</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">AI-assisted policy insight modules</span></div>
                </div>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-emerald-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-emerald-300">
                    Smart Infrastructure Backbone
                  </h3>
                  <p class="text-xs text-white mb-4">
                    A scalable and secure enterprise digital foundation.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">IoT-enabled environmental telemetry</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Cloud environments (AWS, Azure, GCP)</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Big data pipelines & real-time streams</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Secure, ethical, privacy-first backends</span></div>
                </div>
              </div>

            </div>

            <!-- Toggle Button -->
            <div class="mt-6 text-center">
              <button 
                @click="showMoreSolutions = !showMoreSolutions" 
                class="inline-flex items-center justify-center px-6 py-3 rounded-xl border border-white/10 bg-emerald-500 hover:bg-emerald-600 text-gray-900 font-medium transition-all shadow-md cursor-pointer gap-2"
              >
                <span>{{ showMoreSolutions ? 'Show Less' : 'Show More' }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" :class="{ 'rotate-180': showMoreSolutions }" class="h-4 w-4 transform transition-transform duration-200">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </button>
            </div>

          </div> 

          <!-- Key Benefits Section -->
          <div id="key-benefits-section">
            <h2 class="text-2xl font-bold text-white mb-4">Key Benefits</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
              
              <!-- Social Impact -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-cyan-300">
                    Social Impact
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Measurable advancements in inclusion and unified community equity.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Stronger community participation</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Greater systemic sector inclusion</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Improved literacy and tool access</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Enhanced community resilience</span></div>
                </div>
              </div>

              <!-- Economic Impact -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-cyan-300">
                    Economic Impact
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Scalable commercialization models and accelerated market entry points.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Increased livelihood opportunities</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Growth of MSMEs and cooperatives</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Digital entrepreneurship options</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Sustainable local marketplace footprints</span></div>
                </div>
              </div>

              <!-- Environmental Impact -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-cyan-300">
                    Environmental Impact
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Ecological preservation through smart telemetry and localized resource control.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Better environmental action</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Climate resilience and adaptation</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Sustainable resource utilization</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Community-driven eco initiatives</span></div>
                </div>
              </div>

              <!-- Human Development Impact -->
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col justify-between hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <div>
                  <h3 class="text-cyan-400 text-base sm:text-lg font-semibold mb-1 transition-colors group-hover:text-cyan-300">
                    Human Development Impact
                  </h3>
                  <p class="text-xs text-white mb-4">
                    Long-term updates to structural wellness and tech-driven career tracks.
                  </p>
                </div>
                <div class="flex flex-col gap-2.5">
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Improved wellness and life quality</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Youth empowerment and leadership</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Access to target future skills</span></div>
                  <div class="flex items-center gap-3"><div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div><span class="text-slate-200 text-sm">Human-centered project designs</span></div>
                </div>
              </div>

            </div>
          </div> 

          <!-- Conclusion Section (Integrated smoothly at the layout bottom) -->
          <div class="max-w-7xl mx-auto w-full mt-10 mb-10">
            <h2 class="text-3xl font-bold text-white mb-2 text-start">Conclusion</h2>
            <p class="border-l-4 border-emerald-500 pl-4 text-start text-slate-300">
              The framework serves as a next-generation ecosystem for community transformation, combining technology, sustainability, and human-centered design to build future-ready, inclusive, and thriving societies.
            </p>
          </div>

        </main>
      </div>
    </section>
  </main>
</template>