<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'
import { index as solutionsIndex } from '@/routes/solutions' 

const showMoreSolutions = ref(false)
const showMoreBenefits = ref(false)
</script>

<template>
  <main class="bg-slate-950 text-slate-100">
    <div class="absolute top-6 left-6 lg:left-20 z-50">
      <Link
            :href="solutionsIndex()"
            class="group inline-flex items-center gap-2 rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-200 transition-all hover:bg-white/10 hover:text-white"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="h-4 w-4 transition-transform group-hover:-translate-x-1"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"
                />
            </svg>
            Back to Solutions
        </Link>
    </div>

    <section class="relative px-6 lg:px-20 pt-32 pb-20 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex flex-col items-center min-h-screen">
      <div class="max-w-7xl mx-auto w-full flex flex-col items-center">
        
        <div class="text-center max-w-4xl mx-auto mb-16">
          <h2 class="text-4xl lg:text-5xl text-white font-black mb-4 leading-tight">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
              AI & Machine Learning 
            </span>
            <br />
            Integration Architecture Design
          </h2>    
          <p class="text-base lg:text-lg text-slate-400">
            Comprehensive Intelligent Ecosystem Architecture Framework
          </p>
        </div>

        <div class="w-full space-y-4">
          
          <div class="max-w-7xl">
            <h2 class="text-2xl font-bold text-white mb-2">Overview</h2>
            <p class="text-base text-slate-300 leading-relaxed">
              A comprehensive AI-powered digital ecosystem that integrates Artificial Intelligence, Machine Learning, IoT, Big Data, and Cloud Computing to deliver scalable, sustainable, and human-centered solutions across agriculture, health, mobility, environment, and smart communities.
            </p>
          </div>

          <div id="core-solutions-section">
            <h2 class="text-2xl font-bold text-white mb-6">Core Solutions</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Smart Agriculture & Food Security
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  AI-driven crop analytics, greenhouse monitoring, smart irrigation, and food security dashboards for optimized farming and supply.
                </p>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Bagsakan Ecosystem & Logistics
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Intelligent supply chain, inventory systems, and e-commerce platforms for efficient agricultural distribution.
                </p>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  E-Mobility & Smart Transportation
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  EV fleet management, smart charging, and mobility intelligence systems for modern transport solutions.
                </p>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Biotechnology & Health AI
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  AI diagnostics, telemedicine, bioinformatics, and health monitoring for advanced healthcare innovation.
                </p>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Sustainability Learning Systems
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Digital education platforms, AI-powered analytics, and workforce development tools for future-ready skills.
                </p>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Wellness & Human-Centered Technology
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Wellness analytics, emotional intelligence systems, and community engagement platforms.
                </p>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Environmental Monitoring & Smart Systems
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Real-time monitoring using IoT sensors for climate, water, air quality, and sustainability tracking.
                </p>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  AI Intelligence & Automation
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Predictive analytics, machine learning, computer vision, NLP, and intelligent automation for data-driven decisions.
                </p>
              </div>

              <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                  Digital Twin & Command Center
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Virtual system simulations and centralized AI dashboards for monitoring, forecasting, and strategic control.
                </p>
              </div>
            </div>

            <div class="mt-8 text-center">
              <button @click="showMoreSolutions = !showMoreSolutions" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-white/10 bg-emerald-500 hover:bg-emerald-600 text-gray-800 font-medium transition-all shadow-md cursor-pointer">
                <span>{{ showMoreSolutions ? 'Show Less' : 'Show More' }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" :class="{ 'rotate-180': showMoreSolutions }" class="w-4 h-4 transform transition-transform duration-200">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </button>
            </div>
          </div> 

          <div id="key-benefits-section">
            <h2 class="text-2xl font-bold text-white mb-6">Key Benefits</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Smarter Decision-Making
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Real-time analytics and predictive intelligence enable faster, data-driven strategies.
                </p>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Operational Efficiency
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Automation and AI reduce inefficiencies, optimize workflows, and improve productivity.
                </p>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Sustainability & Environmental Impact
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Energy-efficient systems, reduced waste, and climate-resilient solutions support long-term sustainability.
                </p>
              </div>

              <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Economic Growth & Innovation
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Accelerates digital transformation, supports new industries, and enhances ecosystem commercialization.
                </p>
              </div>

              <div :class="{ 'hidden': !showMoreBenefits }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Human-Centered Development
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Improves accessibility, enhances public services, and empowers communities through inclusive technology.
                </p>
              </div>

              <div :class="{ 'hidden': !showMoreBenefits }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-2 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                  Scalable & Future-Ready Platform
                </h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                  Modular, cloud-based architecture designed to adapt, expand, and integrate emerging technologies.
                </p>
              </div>
            </div>

            <div class="mt-8 text-center">
              <button @click="showMoreBenefits = !showMoreBenefits" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-white/10 bg-cyan-500 hover:bg-cyan-600 text-gray-800 font-medium transition-all shadow-md cursor-pointer">
                <span>{{ showMoreBenefits ? 'Show Less' : 'Show More' }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" :class="{ 'rotate-180': showMoreBenefits }" class="w-4 h-4 transform transition-transform duration-200">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
              </button>
            </div>
          </div> 

        </div>
      </div>
    </section>
  </main>
</template>