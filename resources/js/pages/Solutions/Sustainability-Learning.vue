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
               Modern Sustainability Learning
             </span>
             Ecosystem
           </h2>    
           <p class="text-base lg:text-lg text-slate-400 max-w-3xl mx-auto">
             Comprehensive Digital Learning, Climate Resilience & Future Workforce Development Framework
           </p>
         </div>

         <main class="w-full space-y-6">
           
           <div class="max-w-7xl mt-4">
             <h2 class="text-2xl font-bold text-white mb-2">Overview</h2>
             <p class="text-base text-slate-300 leading-relaxed">
               The Modern Sustainability Learning Ecosystem is a future-ready digital education and workforce development platform that integrates sustainability, climate resilience, smart technologies, and AI-driven learning into one unified system. It empowers individuals, institutions, and communities with the knowledge, tools, and skills needed to thrive in a rapidly evolving, sustainability-focused world.
             </p>
           </div>

           <div id="core-solutions-section">
             <h2 class="text-2xl font-bold text-white mb-4">Core Solutions</h2>
             
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
               
               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                   Digital Sustainability Learning Platform
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Interactive online & hybrid learning systems</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Smart Learning Management System (LMS)</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">AI-powered personalized learning experiences</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Sustainability-focused courses (climate, agriculture, renewable energy)</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Mobile and web-based access for inclusive learning</span>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                   Climate Resilience Education System
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Climate change and environmental science education</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Disaster preparedness and risk awareness training</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Sustainable community development programs</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Green innovation and renewable energy learning</span>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                   Smart Technology & AI Learning System
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">AI & Machine Learning education</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">IoT and smart systems training</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Data analytics and GIS mapping skills</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Smart infrastructure and digital transformation learning</span>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                   Sustainability Innovation & Research Hub
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Digital innovation laboratories (AgriTech, Energy, AI, Biotech)</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Research collaboration platforms</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Startup incubation and entrepreneurship programs</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Technology transfer and innovation management</span>
                 </div>
               </div>

               <div :class="['text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full', { 'hidden': !isSolutionsExpanded }]">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                   Future Workforce Development Platform
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Green jobs and digital skills training</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">AI-based career matching and certification systems</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Entrepreneurship and leadership development</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Industry partnerships, internships, and job placement support</span>
                 </div>
               </div>

               <div :class="['text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full', { 'hidden': !isSolutionsExpanded }]">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                   Community Sustainability Learning Hubs
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Local digital learning centers</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Grassroots sustainability education</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Youth innovation and leadership programs</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Community collaboration and networking platforms</span>
                 </div>
               </div>

               <div :class="['text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.02] transition-all group w-full', { 'hidden': !isSolutionsExpanded }]">
                 <h3 class="text-emerald-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-emerald-300">
                   Virtual & Hybrid Learning Environment
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Virtual classrooms and live webinars</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">AR/VR immersive learning experiences</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Smart classrooms and blended education systems</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Interactive simulations and digital labs</span>
                 </div>
               </div>

             </div>

             <div class="mt-4 text-center">
               <button @click="isSolutionsExpanded = !isSolutionsExpanded" class="inline-flex bg-emerald-500 items-center justify-center px-6 py-3 rounded-xl border border-white/10 hover:bg-emerald-600 text-gray-900 font-medium transition-all shadow-md cursor-pointer">
                 <span class="btn-text">{{ isSolutionsExpanded ? 'Show Less' : 'Show More' }}</span>
               </button>
             </div>

           </div> 

           <div id="key-benefits-section">
             <h2 class="text-2xl font-bold text-white mb-4">Key Benefits</h2>
             
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 w-full">
               
               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                   Environmental & Sustainability Impact
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Increased climate awareness and environmental responsibility</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Stronger climate resilience and adaptation skills</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Promotion of sustainable lifestyles and green innovation</span>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                   Educational Impact
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Accessible, inclusive, and flexible digital learning</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Personalized AI-driven education pathways</span>
                 </div>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Improved sustainability literacy and future skills</span>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                   Economic & Workforce Impact
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Development of future-ready and green workforce</span>
                 </div>
                  <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Support for startups, innovation, and entrepreneurship</span>
                 </div>
                  <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Increased employability through digital and AI skills</span>
                 </div>
               </div>

               <div class="text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                   Social Impact
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Community empowerment and digital inclusion</span>
                 </div>
                  <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Youth engagement in innovation and sustainability</span>
                 </div>
                  <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Equal access to education across regions</span>
                 </div>
               </div>

               <div :class="['text-left rounded-xl border border-white/10 bg-white/5 p-6 flex flex-col gap-4 hover:border-cyan-500/40 hover:bg-cyan-500/[0.02] transition-all group w-full', { 'hidden': !isBenefitsExpanded }]">
                 <h3 class="text-cyan-400 text-base sm:text-lg font-semibold transition-colors group-hover:text-cyan-300">
                   Innovation & Technology Impact
                 </h3>
                 <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Integration of AI, IoT, and smart systems in education</span>
                 </div>
                  <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Strengthened research and innovation ecosystems</span>
                 </div>
                  <div class="flex items-center gap-3">
                   <div class="w-2.5 h-2.5 rounded-full bg-cyan-400 flex-shrink-0"></div>
                   <span class="text-slate-200 text-sm">Support for emerging industries and future technologies</span>
                 </div>
               </div>

             </div>

             <div class="mt-4 text-center">
               <button @click="isBenefitsExpanded = !isBenefitsExpanded" class="inline-flex bg-cyan-500 items-center justify-center px-6 py-3 rounded-xl border border-white/10 hover:bg-cyan-600 text-gray-900 font-medium transition-all shadow-md cursor-pointer">
                 <span class="btn-text">{{ isBenefitsExpanded ? 'Show Less' : 'Show More' }}</span>
               </button>
             </div>

           </div> 

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