<script lang="ts" setup>
import { Link } from "@inertiajs/vue3";
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { home } from "@/routes"; 

// Toggles visibility of the extra cards in the grid
const showMoreCards = ref(false)

// Tracks the ID of the currently active modal. null means all modals are hidden.
const activeModal = ref<string | null>(null)

const openModal = (id: string) => {
  activeModal.value = id
  document.body.style.overflow = 'hidden' // Trap background scroll
}

const closeModal = () => {
  activeModal.value = null
  document.body.style.overflow = '' // Restore background scroll
}

const handleKeyDown = (e: KeyboardEvent) => {
  if (e.key === 'Escape') closeModal()
}

onMounted(() => window.addEventListener('keydown', handleKeyDown))
onUnmounted(() => window.removeEventListener('keydown', handleKeyDown))

// Clean structural configuration modeling all content and styling variants
const modalsData = [
  {
    id: 'tech-innov',
    title: 'Technological Innovation',
    index: 1,
    icon: 'assets/technological_innovation.png',
    bgClass: 'bg-emerald-500/5',
    colorClass: 'text-emerald-400',
    borderClass: 'border-emerald-500/20',
    markerClass: 'marker:text-emerald-400',
    definition: 'The development and integration of advanced technologies to solve modern challenges.',
    sections: [
      { title: 'Examples', items: ['Artificial Intelligence (AI) & Machine Learning (ML)', 'Internet of Things (IoT) & Smart Sensors', 'Robotics, Automation & Cloud Computing', 'GIS, Spatial Intelligence & Digital Twin Systems'] },
      { title: 'Impact', items: ['Faster operations and predictive intelligence', 'Real-time monitoring and automated systems', 'Increased productivity across platforms'] }
    ]
  },
  {
    id: 'sustain-innov',
    title: 'Sustainability Innovation',
    index: 2,
    icon: 'assets/sustainability_innovation.png',
    bgClass: 'bg-cyan-500/5',
    colorClass: 'text-cyan-400',
    borderClass: 'border-cyan-500/20',
    markerClass: 'marker:text-cyan-400',
    definition: 'Innovation focused on environmental protection, climate resilience, and sustainable development.',
    sections: [
      { title: 'Examples', items: ['Renewable energy and climate-smart infrastructure', 'Smart agriculture systems and sustainable logistics', 'Carbon reduction technologies and circular economy systems', 'Smart environmental monitoring'] },
      { title: 'Impact', items: ['Reduced environmental risks and sustainable resource management', 'Climate adaptation resilience and green economy development'] }
    ]
  },
  {
    id: 'human-innov',
    title: 'Human-Centered Innovation',
    index: 3,
    icon: 'assets/human_centered_innovation.png',
    bgClass: 'bg-pink-500/5',
    colorClass: 'text-pink-300',
    borderClass: 'border-pink-500/20',
    markerClass: 'marker:text-pink-300',
    definition: 'Innovation designed around human needs, well-being, inclusion, and quality of life.',
    sections: [
      { title: 'Examples', items: ['Wellness ecosystems and community empowerment platforms', 'Accessibility technologies and digital wellness systems', 'Smart education and inclusive digital platforms'] },
      { title: 'Impact', items: ['Better quality of life and human empowerment', 'Improved community engagement and inclusive development'] }
    ]
  },
  {
    id: 'business-innov',
    title: 'Business & Operational Innovation',
    index: 4,
    icon: 'assets/business_and_operational_innovation.png',
    bgClass: 'bg-yellow-500/5',
    colorClass: 'text-yellow-200',
    borderClass: 'border-yellow-500/20',
    markerClass: 'marker:text-yellow-200',
    definition: 'Innovation that improves organizational performance, operational efficiency, and strategic growth.',
    sections: [
      { title: 'Examples', items: ['Smart analytics systems and AI-powered decision platforms', 'Digital supply chains and smart logistics optimization', 'Predictive operational intelligence frameworks'] },
      { title: 'Impact', items: ['Reduced operational costs and faster decision-making', 'Increased competitiveness and sustainable business growth'] }
    ]
  },
  {
    id: 'social-innov',
    title: 'Social Innovation',
    index: 5,
    icon: 'assets/social_innovation.png',
    bgClass: 'bg-red-500/5',
    colorClass: 'text-red-400',
    borderClass: 'border-red-500/20',
    markerClass: 'marker:text-red-400',
    definition: 'Innovation focused on addressing social, economic, educational, and community challenges.',
    sections: [
      { title: 'Examples', items: ['Digital learning ecosystems and smart livelihood systems', 'Community resilience programs and sustainability education', 'Smart governance systems'] },
      { title: 'Impact', items: ['Social inclusion and education accessibility', 'Community resilience and economic empowerment'] }
    ],
    extraText: 'Innovation in Intelligent Ecosystems: Innovation becomes more powerful when technologies, systems, and people are interconnected. By combining AI, IoT, cloud frameworks, and human design, these platforms continually learn, adapt, predict, and optimize to empower communities.'
  },
  {
    id: 'ecosystem',
    title: 'Innovation in Intelligent Ecosystems',
    colorClass: 'text-emerald-400',
    borderClass: 'border-emerald-500/20',
    markerClass: 'marker:text-emerald-400',
    definition: 'Innovation becomes more powerful when technologies, systems, and people are interconnected into intelligent ecosystems.',
    layout: 'grid',
    sections: [
      { title: 'Ecosystem Combines:', items: ['AI & predictive analytics', 'IoT & sensor systems', 'Cloud computing', 'Real-time monitoring', 'Human-centered design', 'Sustainable infrastructure', 'Community collaboration', 'Environmental intelligence'] },
      { title: 'Continuous Capabilities:', items: ['Learn from data', 'Adapt to changing conditions', 'Predict future challenges', 'Optimize operations', 'Empower people and communities'] }
    ],
    inGrid: true,
    alwaysShow: true,
    image: 'assets/innovation in intelligent ecosystem.png',
    hoverClass: 'hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]',
    textHoverClass: 'group-hover:text-emerald-400'
  },
  {
    id: 'agriculture',
    title: 'SMART Agriculture & Food Security',
    cardTitle: 'Innovation Areas for Future Development SMART Agriculture & Food Security',
    kicker: 'Innovation Areas for Future Development',
    colorClass: 'text-cyan-400',
    borderClass: 'border-cyan-500/20',
    markerClass: 'marker:text-cyan-400',
    sections: [
      { title: 'Innovations', items: ['Precision farming systems', 'AI crop monitoring', 'Smart greenhouses', 'Geo-tagging agriculture systems', 'Food security analytics', 'Digital Bagsakan ecosystems'] },
      { title: 'Outcomes', items: ['Increased agricultural productivity', 'Reduced food waste', 'Stronger food security', 'Sustainable farming systems'] }
    ],
    inGrid: true,
    alwaysShow: true,
    image: 'assets/innovation areas for future development smart agriculture & food security.png',
    hoverClass: 'hover:border-cyan-500/40 hover:bg-cyan-500/[0.02]',
    textHoverClass: 'group-hover:text-cyan-400'
  },
  {
    id: 'climate',
    title: 'Climate & Sustainability Innovation',
    colorClass: 'text-teal-400',
    borderClass: 'border-teal-500/20',
    markerClass: 'marker:text-teal-400',
    sections: [
      { title: 'Innovations', items: ['Climate intelligence systems', 'Renewable energy ecosystems', 'Environmental AI analytics', 'Smart resource management', 'Sustainable infrastructure monitoring'] },
      { title: 'Outcomes', items: ['Climate resilience', 'Reduced carbon emissions', 'Sustainable urban development', 'Environmental protection'] }
    ],
    inGrid: true,
    alwaysShow: true,
    image: 'assets/climate & sustainability innovation.png',
    hoverClass: 'hover:border-teal-400/40 hover:bg-teal-400/[0.02]',
    textHoverClass: 'group-hover:text-teal-400'
  },
  {
    id: 'ai',
    title: 'AI & Machine Learning Innovation',
    colorClass: 'text-indigo-400',
    borderClass: 'border-indigo-500/20',
    markerClass: 'marker:text-indigo-400',
    sections: [
      { title: 'Innovations', items: ['Predictive analytics systems', 'Computer vision intelligence', 'AI assistants and automation', 'Smart recommendation systems', 'Intelligent decision platforms'] },
      { title: 'Outcomes', items: ['Smarter operations', 'Faster insights', 'Automated intelligence', 'Operational optimization'] }
    ],
    inGrid: true,
    alwaysShow: false,
    image: 'assets/ai and machine learning innovation.png',
    hoverClass: 'hover:border-indigo-500/40 hover:bg-indigo-500/[0.02]',
    textHoverClass: 'group-hover:text-indigo-400'
  },
  {
    id: 'biotech',
    title: 'Biotechnology & Health Innovation',
    colorClass: 'text-rose-400',
    borderClass: 'border-rose-500/20',
    markerClass: 'marker:text-rose-400',
    sections: [
      { title: 'Innovations', items: ['AI healthcare systems', 'Environmental health intelligence', 'Bioaerosol monitoring', 'Telemedicine ecosystems', 'Predictive diagnostics'] },
      { title: 'Outcomes', items: ['Improved healthcare access', 'Better disease prevention', 'Public health resilience', 'Smart medical systems'] }
    ],
    inGrid: true,
    alwaysShow: false,
    image: 'assets/biotechnology & health innovation.png',
    hoverClass: 'hover:border-rose-500/40 hover:bg-rose-500/[0.02]',
    textHoverClass: 'group-hover:text-rose-400'
  },
  {
    id: 'emobility',
    title: 'E-Mobility & Green Transportation Innovation',
    colorClass: 'text-amber-400',
    borderClass: 'border-amber-500/20',
    markerClass: 'marker:text-amber-400',
    sections: [
      { title: 'Innovations', items: ['EV ecosystems', 'Battery swapping systems', 'Smart charging infrastructure', 'AI transportation analytics', 'Green mobility systems'] },
      { title: 'Outcomes', items: ['Sustainable transportation', 'Reduced fossil fuel dependence', 'Cleaner urban mobility', 'Green economy growth'] }
    ],
    inGrid: true,
    alwaysShow: false,
    image: 'assets/e mobility & green transportation.png',
    hoverClass: 'hover:border-amber-500/40 hover:bg-amber-500/[0.02]',
    textHoverClass: 'group-hover:text-amber-400'
  },
  {
    id: 'workforce',
    title: 'Sustainability Learning & Workforce Innovation',
    colorClass: 'text-sky-400',
    borderClass: 'border-sky-500/20',
    markerClass: 'marker:text-sky-400',
    sections: [
      { title: 'Innovations', items: ['AI-powered learning systems', 'Digital sustainability education', 'Smart innovation laboratories', 'Future workforce platforms', 'Virtual learning ecosystems'] },
      { title: 'Outcomes', items: ['Future-ready workforce', 'Increased innovation capacity', 'Sustainability awareness', 'Smart skills development'] }
    ],
    inGrid: true,
    alwaysShow: false,
    image: 'assets/sustainability learning & workforce innovation.png',
    hoverClass: 'hover:border-sky-500/40 hover:bg-sky-500/[0.02]',
    textHoverClass: 'group-hover:text-sky-400'
  },
  {
    id: 'wellness',
    title: 'Wellness & Human Interaction Innovation',
    colorClass: 'text-pink-400',
    borderClass: 'border-pink-500/20',
    markerClass: 'marker:text-pink-400',
    sections: [
      { title: 'Innovations', items: ['Digital wellness ecosystems', 'Human-centered digital experiences', 'AI wellness assistants', 'Smart community engagement systems', 'Emotional intelligence platforms'] },
      { title: 'Outcomes', items: ['Improved well-being', 'Better community participation', 'Stronger social resilience', 'Inclusive digital engagement'] }
    ],
    inGrid: true,
    alwaysShow: false,
    image: 'assets/wellness.png',
    hoverClass: 'hover:border-pink-500/40 hover:bg-pink-500/[0.02]',
    textHoverClass: 'group-hover:text-pink-400'
  }
]

// Captures items meant exclusively for the "Core Types of Innovation" list (items without 'inGrid')
const coreInnovationTypes = computed(() => modalsData.filter(modal => !modal.inGrid))

// Captures items meant for display inside the main grid template
const gridCards = computed(() => modalsData.filter(modal => modal.inGrid))

// Highly performant computed lookup filtering out only the opened target element configuration
const activeModalData = computed(() => modalsData.find(modal => modal.id === activeModal.value) || null)
</script>

<template>
  <div class="bg-slate-950 text-white min-h-screen font-sans relative antialiased">
    
    <div class="absolute top-6 left-6 z-50 lg:left-20">
      <Link
        :href="home()"
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
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Back to Home
      </Link>
    </div>

    <section class="relative px-6 lg:px-20 pt-32 pb-20 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex items-center justify-center min-h-screen">
      <div class="max-w-7xl mx-auto flex flex-col items-center text-center w-full">
        <p class="text-cyan-400 uppercase tracking-[0.3em] text-sm mb-4 font-bold">INNOVATION</p>
        <h2 class="text-4xl lg:text-5xl font-black leading-tight mb-6 max-w-4xl">
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
            Driving Intelligent Transformation
          </span>
          <span class="block text-white mt-2">for a Sustainable and Future-Ready World</span>
        </h2>
        <p class="text-slate-300 text-lg leading-relaxed mb-16 max-w-3xl">
          Innovation is the process of transforming ideas, technologies, systems, and human creativity into impactful solutions that improve lives, strengthen communities, enhance sustainability, and accelerate progress for society.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 w-full text-left">
          <div class="lg:col-span-2 flex flex-col">
            <h3 class="text-white font-medium uppercase tracking-wider text-xs mb-6 border-b border-white/10 pb-3">
              Innovation today is no longer limited to technology alone. It now includes:
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div v-for="item in ['Human-centered innovation', 'Sustainability innovation', 'Digital transformation', 'Smart infrastructure systems', 'Climate resilience solutions', 'AI-powered ecosystems', 'Community empowerment initiatives', 'Wellness and human development']" :key="item" class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-full px-5 py-4 hover:bg-white/10 transition-colors">
                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 shrink-0"></div>
                <span class="text-slate-200 text-sm font-medium">{{ item }}</span>
              </div>
              <div class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-full px-5 py-4 hover:bg-white/10 transition-colors sm:col-span-2 lg:col-span-1">
                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 shrink-0"></div>
                <span class="text-slate-200 text-sm font-medium">Intelligent operational systems</span>
              </div>
            </div>
          </div>

          <div class="lg:col-span-2 flex flex-col">
            <h3 class="text-white font-medium uppercase tracking-wider text-xs mb-6 border-b border-white/10 pb-3">
              Innovation is the bridge between:
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div v-for="bridge in ['Problems and solutions', 'Vision and implementation', 'Sustainability and technology', 'Human needs and intelligent systems', 'Present realities and future opportunities']" :key="bridge" class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-full px-5 py-4 hover:bg-white/10 transition-colors">
                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 shrink-0"></div>
                <span class="text-slate-200 text-sm font-medium">{{ bridge }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="px-6 lg:px-20 py-24 bg-slate-950 text-white relative overflow-hidden">
      <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="flex flex-col gap-10">
          <div>
            <h2 class="text-4xl lg:text-5xl font-black leading-tight">
              What is <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">Innovation?</span>
            </h2>
          </div>

          <div class="flex flex-col">
            <h3 class="text-white font-medium uppercase tracking-wider text-xs mb-4 pb-2 border-b border-white/10">
              Innovation is the creation, improvement, or transformation of:
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <div v-for="target in ['Products', 'Services', 'Processes', 'Technologies', 'Systems', 'Experiences', 'Communities', 'Sustainable ecosystems']" :key="target" class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-full px-5 py-3.5 hover:bg-white/10 transition-colors">
                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 shrink-0"></div>
                <span class="text-slate-200 text-sm font-medium">{{ target }}</span>
              </div>
            </div>
            <p class="text-slate-400 text-xs italic mt-4 tracking-wide">
              through creative thinking, intelligent technologies, collaboration, and strategic implementation.
            </p>
          </div>

          <div class="flex flex-col">
            <h3 class="text-white font-medium uppercase tracking-wider text-xs mb-4 pb-2 border-b border-white/10">
              Innovation creates:
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <div v-for="creation in ['Efficiency', 'Sustainability', 'Accessibility', 'Productivity', 'Resilience', 'Economic growth', 'Social impact', 'Human advancement']" :key="creation" class="flex items-center gap-4 bg-white/5 border border-white/10 rounded-full px-5 py-3.5 hover:bg-white/10 transition-colors">
                <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 shrink-0"></div>
                <span class="text-slate-200 text-sm font-medium">{{ creation }}</span>
              </div>
            </div>
          </div>
        </div>

<div class="max-w-7xl mx-auto space-y-16">
      
      <!-- 1. Refactored Core Types Panel Component (Fully Data-Driven) -->
      <div class="relative w-full max-w-xl mx-auto lg:mx-0">
        <div class="absolute inset-0 bg-gradient-to-r from-emerald-500/10 to-cyan-500/10 blur-3xl rounded-full pointer-events-none"></div>
        <div class="relative bg-white/5 border border-white/10 backdrop-blur-xl rounded-[36px] p-6 sm:p-10 shadow-2xl">
          <h3 class="text-xl lg:text-2xl font-black leading-tight mb-6 tracking-wide">Core Types of Innovation</h3>
          
          <div class="flex flex-col gap-3">
            <button 
              v-for="item in coreInnovationTypes" 
              :key="item.id"
              @click="openModal(item.id)" 
              class="flex items-center gap-4 border border-white/10 rounded-xl px-5 py-4 hover:bg-white/10 transition-colors text-left w-full cursor-pointer group"
              :class="[item.bgClass]"
            >
              <img :src="item.icon" alt="Icon" class="w-8 h-8 object-contain shrink-0 transition-transform group-hover:scale-105" />
              <span class="text-base sm:text-lg font-semibold transition-colors" :class="[item.colorClass]">
                {{ item.index }}. {{ item.title }}
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. Centralized Dynamic Modal Overlay Engine -->
    <div 
      v-if="activeModalData" 
      class="fixed inset-0 z-50 flex items-center justify-center p-4 lg:p-6 animate-fade-in"
    >
      <div 
        class="absolute inset-0 bg-black/10 backdrop-blur-md cursor-pointer" 
        @click="closeModal"
      ></div>
      
      <div 
        class="bg-slate-900 border w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto z-10" 
        :class="activeModalData.borderClass || 'border-white/10'"
      >
        <button 
          @click="closeModal" 
          class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl cursor-pointer transition-colors" 
          aria-label="Close modal"
        >
          ×
        </button>
        
        <p v-if="activeModalData.kicker" class="text-xs font-semibold tracking-wider uppercase mb-2 text-cyan-500">
          {{ activeModalData.kicker }}
        </p>
        <h2 class="text-4xl font-black mb-6 leading-tight" :class="activeModalData.colorClass">
          {{ activeModalData.title }}
        </h2>
        
        <div class="space-y-6 text-slate-300">
          <p v-if="activeModalData.definition" class="leading-relaxed">
            <strong :class="activeModalData.colorClass">Definition: </strong>{{ activeModalData.definition }}
          </p>

          <div :class="activeModalData.layout === 'grid' ? 'grid grid-cols-1 sm:grid-cols-2 gap-6' : 'space-y-6'">
            <div 
              v-for="(section, sIdx) in activeModalData.sections" 
              :key="sIdx" 
              :class="activeModalData.layout !== 'grid' && sIdx > 0 ? 'pt-4 border-t border-white/5' : ''"
            >
              <h4 class="font-bold mb-3 text-lg" :class="activeModalData.colorClass">{{ section.title }}</h4>
              <ul class="list-disc list-inside space-y-2 text-sm" :class="activeModalData.markerClass">
                <li v-for="item in section.items" :key="item">{{ item }}</li>
              </ul>
            </div>
          </div>

          <!-- Renders the custom ecosystem sub-section note natively for specific array entries -->
          <p v-if="activeModalData.highlightBox" class="italic border-l-4 border-red-500 pl-4 pt-2 leading-relaxed">
            <strong :class="activeModalData.colorClass">{{ activeModalData.highlightBox.title }} </strong>
            {{ activeModalData.highlightBox.text }}
          </p>
        </div>
      </div>
      </div>
      </div>
    </section>

<section class="py-24 bg-gradient-to-br from-cyan-950 via-slate-950 to-slate-950 border-white/5">
      <div class="max-w-7xl mx-auto px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <button 
            v-for="modal in gridCards" 
            :key="modal.id"
            v-show="modal.alwaysShow || showMoreCards"
            @click="openModal(modal.id)" 
            class="text-left rounded-3xl border border-white/20 bg-white/5 p-8 min-h-[180px] flex flex-col gap-4 transition-all group w-full cursor-pointer"
            :class="[modal.hoverClass]"
          >
            <img :src="modal.image" :alt="modal.title" class="w-14 h-14 object-contain group-hover:scale-105 transition-transform" />
            <h3 
              class="text-white text-2xl font-bold leading-snug transition-colors"
              :class="[modal.textHoverClass]"
            >
              {{ modal.cardTitle || modal.title }}
            </h3>
          </button>
        </div>

        <div class="flex justify-center mt-12">
          <button @click="showMoreCards = !showMoreCards" class="px-10 py-3 rounded-2xl bg-emerald-500 text-gray-950 font-bold tracking-wide hover:bg-emerald-400 cursor-pointer shadow-lg hover:shadow-emerald-500/10 transition-all">
            {{ showMoreCards ? 'See Less' : 'See More' }}
          </button>
        </div>
      </div>
    </section>

    <div 
      v-if="activeModalData" 
      class="fixed inset-0 z-50 flex items-center justify-center p-4 lg:p-6"
    >
      <div 
        class="absolute inset-0 bg-black/10 backdrop-blur-md cursor-pointer" 
        @click="closeModal"
      ></div>
      
      <div 
        class="bg-slate-900 border w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto z-10" 
        :class="activeModalData.borderClass || 'border-white/10'"
      >
        <button 
          @click="closeModal" 
          class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl cursor-pointer transition-colors" 
          aria-label="Close modal"
        >
          ×
        </button>
        
        <p v-if="activeModalData.kicker" class="text-xs font-semibold tracking-wider uppercase mb-2 text-cyan-500">
          {{ activeModalData.kicker }}
        </p>
        <h2 class="text-3xl lg:text-4xl font-black mb-6" :class="activeModalData.colorClass">
          {{ activeModalData.title }}
        </h2>
        
        <div class="space-y-6 text-slate-300">
          <p v-if="activeModalData.definition" class="leading-relaxed">
            <strong :class="activeModalData.colorClass">Definition: </strong>{{ activeModalData.definition }}
          </p>

          <div :class="activeModalData.layout === 'grid' ? 'grid grid-cols-1 sm:grid-cols-2 gap-6' : 'space-y-6'">
            <div 
              v-for="(section, sIdx) in activeModalData.sections" 
              :key="sIdx" 
              :class="activeModalData.layout !== 'grid' && sIdx > 0 ? 'pt-4 border-t border-white/5' : ''"
            >
              <h4 class="font-bold mb-3 text-lg" :class="activeModalData.colorClass">{{ section.title }}</h4>
              <ul class="list-disc list-inside space-y-2 text-sm" :class="activeModalData.markerClass">
                <li v-for="item in section.items" :key="item">{{ item }}</li>
              </ul>
            </div>
          </div>

          <p v-if="activeModalData.extraText" class="italic border-l-4 border-red-500 pl-4 pt-2">
            {{ activeModalData.extraText }}
          </p>
        </div>
      </div>
    </div>

    <div 
      v-for="modal in modalsData" 
      :key="modal.id" 
      v-show="activeModal === modal.id" 
      class="fixed inset-0 z-50 flex items-center justify-center p-4 lg:p-6"
    >
      <div 
        class="absolute inset-0 bg-black/10 backdrop-blur-md cursor-pointer" 
        @click="closeModal"
      ></div>
      
      <div 
        class="bg-slate-900 border w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto z-10" 
        :class="modal.borderClass || 'border-white/10'"
      >
        <button 
          @click="closeModal" 
          class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl cursor-pointer transition-colors" 
          aria-label="Close modal"
        >
          ×
        </button>
        
        <p v-if="modal.kicker" class="text-xs font-semibold tracking-wider uppercase mb-2 text-cyan-500">{{ modal.kicker }}</p>
        <h2 class="text-3xl lg:text-4xl font-black mb-6" :class="modal.colorClass">{{ modal.title }}</h2>
        
        <div class="space-y-6 text-slate-300">
          <p v-if="modal.definition" class="leading-relaxed">
            <strong :class="modal.colorClass">Definition: </strong>{{ modal.definition }}
          </p>

          <div :class="modal.layout === 'grid' ? 'grid grid-cols-1 sm:grid-cols-2 gap-6' : 'space-y-6'">
            <div 
              v-for="(section, sIdx) in modal.sections" 
              :key="sIdx" 
              :class="modal.layout !== 'grid' && sIdx > 0 ? 'pt-4 border-t border-white/5' : ''"
            >
              <h4 class="font-bold mb-3 text-lg" :class="modal.colorClass">{{ section.title }}</h4>
              <ul class="list-disc list-inside space-y-2 text-sm" :class="modal.markerClass">
                <li v-for="item in section.items" :key="item">{{ item }}</li>
              </ul>
            </div>
          </div>

          <p v-if="modal.extraText" class="italic border-l-4 border-red-500 pl-4 pt-2">
            {{ modal.extraText }}
          </p>
        </div>
      </div>
    </div>

  </div>
</template>