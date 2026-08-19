<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

// Independent state controls for the expandable grid modules
const showMoreSolutions = ref(false)
const showMoreBenefits = ref(false)
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
               Digital Innovation 
             </span> 
             <br /> 
             & Research Labs 
           </h2>     
           <p class="text-base lg:text-lg text-slate-400 font-medium tracking-wide"> 
              Comprehensive Intelligent Research, Emerging Technology & Sustainable Innovation Ecosystem
           </p> 
         </div> 

         <main class="w-full space-y-16"> 
            
           <div class="max-w-7xl"> 
             <h2 class="text-2xl font-bold text-white mb-2">Overview</h2> 
             <p class="text-base text-slate-300 leading-relaxed"> 
              The Digital Innovation & Research Labs Ecosystem is a next-generation, AI-powered research and innovation platform designed to accelerate scientific discovery, sustainable technology development, and digital transformation.
              It integrates advanced technologies such as Artificial Intelligence, IoT, robotics, digital twin simulations, and big data analytics into a unified ecosystem of smart laboratories, enabling collaboration across universities, governments, industries, and research institutions.
             </p> 
           </div> 

           <div id="core-solutions-section"> 
             <h2 class="text-2xl font-bold text-white mb-6">Core Solutions</h2> 
              
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full"> 
                
               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   AI & Machine Learning Labs
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Predictive analytics and intelligent decision systems</li>
                   <li>Deep learning, NLP, and computer vision</li>
                   <li>Generative AI and automation platforms</li>
                   <li>AI model training, validation, and deployment</li>
                 </ul> 
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Smart Sustainability Innovation Labs
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Renewable energy research (solar, smart grids, storage)</li>
                   <li>Climate intelligence and environmental monitoring</li>
                   <li>Carbon reduction and green technology development</li>
                   <li>Circular economy and resource optimization systems</li>
                 </ul> 
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Smart Agriculture & Food Security Labs
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Precision agriculture and smart irrigation</li>
                   <li>AI-powered crop and soil intelligence</li>
                   <li>Food supply chain and logistics optimization</li>
                   <li>Agricultural biotechnology and climate-resilient farming</li>
                 </ul> 
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Biotechnology & Health Innovation Labs
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>AI-driven diagnostics and healthcare analytics</li>
                   <li>Bioinformatics and genomic research</li>
                   <li>Telemedicine and digital health platforms</li>
                   <li>Environmental and public health intelligence</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   IoT & Environmental Intelligence Labs
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Smart sensors and real-time monitoring systems</li>
                   <li>Air, water, and climate analytics</li>
                   <li>Smart city and infrastructure intelligence</li>
                   <li>Environmental risk forecasting</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Robotics, Automation & Autonomous Systems
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Industrial automation and smart manufacturing</li>
                   <li>Autonomous mobility and logistics systems</li>
                   <li>Agricultural and environmental robotics</li>
                   <li>AI-powered inspection and maintenance systems</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Digital Twin & Simulation Platform
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Virtual replicas for infrastructure and systems</li>
                   <li>Climate and sustainability simulations</li>
                   <li>Smart city and logistics modeling</li>
                   <li>Healthcare and agricultural scenario testing</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Startup Incubation & Commercialization Hub
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Innovation accelerators and startup mentorship</li>
                   <li>Technology transfer and IP management</li>
                   <li>Research-to-market commercialization platforms</li>
                   <li>Industry, government, and academic collaboration</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Advanced Analytics & Big Data Infrastructure
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Real-time analytics and AI-driven insights</li>
                   <li>Data lakes and research repositories</li>
                   <li>Predictive modeling and intelligent forecasting</li>
                   <li>Computer vision and NLP systems</li>
                 </ul> 
               </div> 

               <div :class="{ 'hidden': !showMoreSolutions }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300"> 
                   Smart Digital Infrastructure
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-1.5 list-disc list-inside opacity-90 marker:text-emerald-400"> 
                   <li>Cloud-native platforms (AWS, Azure, GCP)</li>
                   <li>High-performance computing (HPC) systems</li>
                   <li>IoT connectivity (5G, LoRaWAN, edge computing)</li>
                   <li>Secure, scalable, and modular architecture</li>
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
                   Innovation Benefits
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90 marker:text-cyan-400">
                   <li>Accelerates scientific discovery and experimentation</li>
                   <li>Enables AI-driven research and intelligent automation</li>
                   <li>Supports rapid prototyping and interdisciplinary collaboration</li>
                   <li>Drives breakthrough innovations across industries</li>
                 </ul>
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Economic Benefits
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90 marker:text-cyan-400">
                   <li>Supports startup ecosystems and entrepreneurship</li>
                   <li>Enables commercialization of research and technologies</li>
                   <li>Drives growth in green and digital industries</li>
                   <li>Builds future-ready workforce and innovation economies</li>
                 </ul>
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Environmental Benefits
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90 marker:text-cyan-400">
                   <li>Promotes climate-smart technologies and sustainability</li>
                   <li>Enhances renewable energy innovation</li>
                   <li>Enables real-time environmental monitoring and protection</li>
                   <li>Supports sustainable infrastructure development</li>
                 </ul>
               </div> 

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Operational Benefits
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90 marker:text-cyan-400">
                   <li>Real-time data-driven decision-making</li>
                   <li>Scalable and flexible research infrastructure</li>
                   <li>Improved efficiency through automation and AI</li>
                   <li>Secure and collaborative digital environments</li>
                 </ul>
               </div> 

               <div :class="{ 'hidden': !showMoreBenefits }" class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-3 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full"> 
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300"> 
                   Social & Human Impact
                 </h3> 
                 <ul class="text-sm text-slate-300 space-y-2 list-disc list-inside opacity-90 marker:text-cyan-400">
                   <li>Advances healthcare and public health systems</li>
                   <li>Supports education, research, and workforce development</li>
                   <li>Encourages inclusive and ethical innovation</li>
                   <li>Strengthens community resilience and sustainability</li>
                 </ul>
               </div> 

             </div> 

             <div class="mt-8 text-center"> 
               <button 
                 @click="showMoreBenefits = !showMoreBenefits" 
                 class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-white/10 bg-cyan-500 hover:bg-cyan-600 text-slate-950 font-semibold transition-all shadow-md cursor-pointer group"
               > 
                 <span>{{ showMoreBenefits ? 'Show Less' : 'Show More' }}</span> 
                 <svg 
                   xmlns="http://www.w3.org/2000/svg" 
                   fill="none" 
                   viewBox="0 0 24 24" 
                   stroke-width="2.5" 
                   stroke="currentColor" 
                   :class="{ 'rotate-180': showMoreBenefits }" 
                   class="w-4 h-4 transition-transform duration-300"
                 >
                   <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                 </svg>
               </button> 
             </div> 

           </div>  

           <div class="w-full pt-4 border-t border-emerald-500/10">
             <h2 class="text-2xl font-bold text-pink-500 mb-4">Platform Value</h2>
             <ul class="space-y-3 text-base text-slate-300 max-w-5xl list-none pl-0">
               <li><strong class="text-pink-500 font-semibold">End-to-End Research Ecosystem</strong> – From experimentation to commercialization</li>
               <li><strong class="text-pink-500 font-semibold">Cross-Sector Collaboration</strong> – Connecting academia, industry, and government</li>
               <li><strong class="text-pink-500 font-semibold">AI-Powered Intelligence</strong> – Smarter, faster, and more accurate insights</li>
               <li><strong class="text-pink-500 font-semibold">Scalable & Future-Ready</strong> – Built for global innovation and expansion</li>
               <li><strong class="text-pink-500 font-semibold">Sustainability-Centered Design</strong> – Aligning innovation with environmental impact</li>
             </ul>
           </div>

           <div class="w-full pt-4 border-t border-white/5">
             <h2 class="text-3xl font-bold text-white mb-2 text-start">Conclusion</h2>
             <p class="border-l-4 border-emerald-500 pl-4 text-start text-slate-300">
               The Digital Innovation & Research Labs Ecosystem provides a comprehensive, scalable, and intelligent foundation for modern research and innovation. By combining AI, sustainability, advanced analytics, and collaborative platforms, it empowers organizations to drive technological breakthroughs, accelerate commercialization, and build a sustainable, future-ready world.
             </p>
           </div>

         </main> 
       </div> 
    </section> 
  </main>
</template>