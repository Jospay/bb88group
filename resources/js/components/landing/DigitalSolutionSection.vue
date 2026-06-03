<script lang="ts">

</script>

<template>
    <section class="px-6 lg:px-20 py-24 bg-slate-950">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16">
      <p class="text-emerald-400 uppercase tracking-[0.3em] text-sm mb-4">
        Core Sustainability Sectors
      </p>
      <h2 class="text-4xl lg:text-6xl font-black mb-6 text-white">
        Integrated Digital Solutions
      </h2>
      <p class="text-slate-400 max-w-3xl mx-auto text-lg leading-relaxed">
        Empowering industries, communities, and institutions through
        advanced technology ecosystems, sustainability interventions, and
        AI-driven innovation.
      </p>
    </div>

    <!-- Grid of 6 Interactive Sectors -->
    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
      <!-- Sector 1: Agriculture -->
      <button
        onclick="document.getElementById('modal-agri').classList.remove('hidden')"
        class="group bg-white/5 border border-white/10 hover:border-emerald-400/40 transition-all duration-300 rounded-[28px] p-8 hover:-translate-y-2 hover:bg-white/10 text-left w-full"
      >
        <div class="mb-6">
          <img src="Agriculture & Food Security.png" alt="Agriculture & Food Security" class="w-16 h-16 object-contain">
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-emerald-400 transition">
          Agriculture & Food Security
        </h3>
        <p class="text-slate-400 leading-relaxed">
          Climate-smart agriculture systems, precision farming,
          hydroponics, greenhouse automation, and resilient food
          ecosystems for sustainable communities.
        </p>
      </button>

      <!-- Sector 2: Bagsakan -->
      <button
        onclick="document.getElementById('modal-bagsakan').classList.remove('hidden')"
        class="group bg-white/5 border border-white/10 hover:border-emerald-400/40 transition-all duration-300 rounded-[28px] p-8 hover:-translate-y-2 hover:bg-white/10 text-left w-full"
      >
        <div class="mb-6">
          <img src="bagsakan ecosystem.png" alt="Bagsakan Digital" class="w-16 h-16 object-contain">
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-emerald-400 transition">
          Bagsakan Ecosystem
        </h3>
        <p class="text-slate-400 leading-relaxed">
          Digitized agricultural logistics, smart market systems,
          e-commerce integration, farmer connectivity, and AI-powered
          supply chain monitoring.
        </p>
      </button>

      <!-- Sector 3: E-Mobility -->
      <button
        onclick="document.getElementById('modal-emobility').classList.remove('hidden')"
        class="group bg-white/5 border border-white/10 hover:border-emerald-400/40 transition-all duration-300 rounded-[28px] p-8 hover:-translate-y-2 hover:bg-white/10 text-left w-full"
      >
        <div class="mb-6">
          <img src="E-Mobility Solutions.png" alt="E-Mobility Solutions" class="w-16 h-16 object-contain">
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-emerald-400 transition">
          E-Mobility Solutions
        </h3>
        <p class="text-slate-400 leading-relaxed">
          Future-ready EV transportation systems, charging infrastructure,
          battery swapping technologies, and sustainable mobility
          innovations.
        </p>
      </button>

      <!-- Sector 4: Biotech -->
      <button
        onclick="document.getElementById('modal-biotech').classList.remove('hidden')"
        class="group bg-white/5 border border-white/10 hover:border-emerald-400/40 transition-all duration-300 rounded-[28px] p-8 hover:-translate-y-2 hover:bg-white/10 text-left w-full"
      >
        <div class="mb-6">
          <img src="AI & Biotechnology.png" alt="AI & Biotechnology" class="w-16 h-16 object-contain">
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-emerald-400 transition">
          Biotechnology & Health AI/ML
        </h3>
        <p class="text-slate-400 leading-relaxed">
          AI-driven diagnostics, biotechnology innovations, predictive
          analytics, environmental monitoring, and digital healthcare
          ecosystems.
        </p>
      </button>

      <!-- Sector 5: Learning -->
      <button
        onclick="document.getElementById('modal-learning').classList.remove('hidden')"
        class="group bg-white/5 border border-white/10 hover:border-emerald-400/40 transition-all duration-300 rounded-[28px] p-8 hover:-translate-y-2 hover:bg-white/10 text-left w-full"
      >
        <div class="mb-6">
          <img src="Modern Sustainability Learning.png" alt="Modern Sustainability Learning" class="w-16 h-16 object-contain">
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-emerald-400 transition">
          Modern Sustainability Learning
        </h3>
        <p class="text-slate-400 leading-relaxed">
          Digital learning ecosystems focused on climate resilience, smart
          technologies, sustainability innovation, and future workforce
          development.
        </p>
      </button>

      <!-- Sector 6: Wellness -->
      <button
        onclick="document.getElementById('modal-wellness').classList.remove('hidden')"
        class="group bg-white/5 border border-white/10 hover:border-emerald-400/40 transition-all duration-300 rounded-[28px] p-8 hover:-translate-y-2 hover:bg-white/10 text-left w-full"
      >
        <div class="mb-6">
          <img src="wellness.png" alt="Wellness & Human Interactions" class="w-16 h-16 object-contain">
        </div>
        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-emerald-400 transition">
          Wellness & Human Interactions
        </h3>
        <p class="text-slate-400 leading-relaxed">
          Human-centered digital experiences, wellness ecosystems, smart
          engagement platforms, and community empowerment initiatives.
        </p>
      </button>
    </div>
  </div>
</section>

<!-- ========================================================================= -->
<!--                             MODAL BACKDROPS                               -->
<!-- ========================================================================= -->

<!-- Modal 1: Agriculture & Food Security -->
<div id="modal-agri" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
  <div class="bg-slate-900 border border-white/10 w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto">
    <button onclick="document.getElementById('modal-agri').classList.add('hidden')" class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl">×</button>
    <h2 class="text-4xl font-black mb-6 text-emerald-400">Agriculture & Food Security</h2>
    <div class="space-y-6 text-slate-300">
      <p class="leading-relaxed">
        <strong class="text-emerald-400">Overview:</strong> Our digital agriculture frameworks integrate IoT environmental monitoring devices and data architectures to achieve highly optimized crop security, minimize resource footprints, and establish transparent growing processes.
      </p>
      <div>
        <h4 class="font-bold text-white mb-3">Key Features</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Automated climate control and greenhouse management</li>
          <li>Precision sensor technology for nutrient deployment</li>
          <li>Hydroponic software integrations and historical yields tracking</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2: Bagsakan Ecosystem -->
<div id="modal-bagsakan" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
  <div class="bg-slate-900 border border-white/10 w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto">
    <button onclick="document.getElementById('modal-bagsakan').classList.add('hidden')" class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl">×</button>
    <h2 class="text-4xl font-black mb-6 text-emerald-400">Bagsakan Ecosystem</h2>
    <div>
      <img src="bagsakan-logos.jpg" alt="logo" class="h-10 sm:h-12 w-auto mb-6">
    </div>
    <div class="space-y-6 text-slate-300">
      <p class="leading-relaxed">
        <strong class="text-emerald-400">Overview:</strong> The Bagsakan Ecosystem is a modern agricultural logistics and smart market platform designed to improve the movement of agricultural products from farms to markets and consumers. It connects farmers, cooperatives, vendors, logistics providers, and government agencies into one efficient digital ecosystem.
      </p>
      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Key Features</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Smart agricultural logistics and delivery coordination</li>
          <li>Digital Bagsakan market operations</li>
          <li>Real-time product pricing and inventory visibility</li>
          <li>Online agricultural marketplace and ordering system</li>
          <li>Farmer connectivity and cooperative integration</li>
          <li>Supply chain monitoring and distribution intelligence</li>
          <li>Cold chain and preservation monitoring</li>
          <li>Regional food distribution and accessibility tracking</li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Benefits</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Improves farmer profitability and market access</li>
          <li>Reduces food wastage and post-harvest losses</li>
          <li>Enhances logistics and distribution efficiency</li>
          <li>Strengthens food security and market transparency</li>
          <li>Supports sustainable and modern agricultural commerce</li>
        </ul>
      </div>
      <p class="italic border-l-4 border-emerald-500 pl-4">
        <strong class="text-emerald-400">Vision:</strong> To create a sustainable, intelligent, and technology-driven agricultural distribution ecosystem that modernizes food supply systems and improves accessibility for communities nationwide.
      </p>
      <p class="text-sm font-semibold text-white pt-4">
        The Bagsakan Ecosystem represents the future of agricultural commerce by combining smart logistics, digital markets, and connected food distribution into one unified platform for farmers, businesses, consumers, and government institutions.
      </p>
      <div class="pt-1 text-center">
        <button
          onclick="document.getElementById('image-modal').classList.remove('hidden')"
          class="bg-emerald-500 hover:bg-emerald-600 text-white font-semibold px-6 py-3 rounded-xl transition duration-300">
          View Image
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Sub-Modal for Bagsakan Diagram -->
<div id="image-modal"
     class="fixed inset-0 bg-black/90 hidden z-[60] flex items-center justify-center">

  <!-- Close Button -->
  <button
    onclick="document.getElementById('image-modal').classList.add('hidden')"
    class="absolute top-4 right-6 text-white text-5xl leading-none hover:text-emerald-400 z-10">
    ×
  </button>

  <!-- Fullscreen Image -->
  <img
    src="bagsakan-flow.jpg"
    alt="Bagsakan Flow Diagram"
    class="w-screen h-screen object-contain">
</div>

<!-- Modal 3: E-Mobility Solutions -->
<div id="modal-emobility" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
  <!-- Modal Content -->
  <div class="bg-slate-900 border border-white/10 w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto">
    
    <!-- Close Button -->
    <button onclick="document.getElementById('modal-emobility').classList.add('hidden')" class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl">×</button>

    <!-- Modal Header -->
    <h2 class="text-4xl font-black mb-6 text-emerald-400">E-Mobility Solutions</h2>
    
    <!-- Content -->
    <div class="space-y-6 text-slate-300">
      <p class="leading-relaxed">
        <strong class="text-emerald-400">Overview:</strong> The E-Mobility Solutions Ecosystem is a smart and sustainable transportation platform designed to modernize mobility systems through electric vehicles, intelligent transportation services, renewable energy integration, and smart mobility solutions. It creates a connected ecosystem for commuters, transportation operators, logistics providers, businesses, and government agencies.
      </p>

      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Key Features</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Electric vehicle transportation systems</li>
          <li>Smart EV charging infrastructure</li>
          <li>Battery swapping and energy management</li>
          <li>Intelligent fleet and traffic monitoring</li>
          <li>AI-powered mobility analytics</li>
          <li>Sustainable logistics and delivery systems</li>
          <li>Renewable energy transportation integration</li>
          <li>Smart commuter and transportation services</li>
        </ul>
      </div>

      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Benefits</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Reduces carbon emissions and fuel dependency</li>
          <li>Improves transportation efficiency and accessibility</li>
          <li>Supports sustainable urban mobility</li>
          <li>Enhances public transportation operations</li>
          <li>Encourages clean energy adoption and green innovation</li>
        </ul>
      </div>

      <p class="italic border-l-4 border-emerald-500 pl-4">
        <strong class="text-emerald-400">Vision:</strong> To establish a sustainable, intelligent, and future-ready transportation ecosystem that supports clean energy mobility, smart infrastructure, and environmentally responsible urban development.
      </p>
      
      <p class="text-sm font-semibold text-white pt-4">
        The E-Mobility Solutions Ecosystem represents the future of transportation by combining electric mobility, smart infrastructure, sustainable energy systems, and intelligent transportation management into one unified platform for smarter and greener mobility.
      </p>
    </div>
  </div>
</div>

<!-- Modal 4: Biotechnology & Health AI/ML -->
<div id="modal-biotech" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
  <!-- Modal Content -->
  <div class="bg-slate-900 border border-white/10 w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto">
    
    <!-- Close Button -->
    <button onclick="document.getElementById('modal-biotech').classList.add('hidden')" class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl">×</button>

    <!-- Modal Header -->
    <h2 class="text-4xl font-black mb-6 text-emerald-400">Biotechnology & Health AI/ML</h2>
    
    <!-- Content -->
    <div class="space-y-6 text-slate-300">
      <p class="leading-relaxed">
        <strong class="text-emerald-400">Overview:</strong> The Biotechnology & Health AI/ML Ecosystem is an intelligent healthcare and biotechnology platform designed to improve healthcare services, disease monitoring, environmental health analysis, and medical innovation through AI-powered systems and smart digital health solutions. It connects healthcare institutions, laboratories, researchers, environmental agencies, and communities into one unified health ecosystem.
      </p>

      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Key Features</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>AI-assisted diagnostics and predictive health analytics</li>
          <li>Digital healthcare and telemedicine services</li>
          <li>Biotechnology research and laboratory intelligence</li>
          <li>Public health surveillance and outbreak monitoring</li>
          <li>Environmental and airborne specimen monitoring</li>
          <li>Smart healthcare operations and patient management</li>
          <li>Real-time health and environmental analytics</li>
          <li>Integrated wellness and preventive healthcare systems</li>
        </ul>
      </div>

      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Benefits</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Improves healthcare accessibility and efficiency</li>
          <li>Supports faster and smarter disease detection</li>
          <li>Strengthens public health monitoring and emergency response</li>
          <li>Enhances environmental health protection</li>
          <li>Encourages biotechnology innovation and research collaboration</li>
        </ul>
      </div>

      <p class="italic border-l-4 border-emerald-500 pl-4">
        <strong class="text-emerald-400">Vision:</strong> To establish a sustainable, intelligent, and future-ready healthcare and biotechnology ecosystem that improves public health resilience, medical innovation, environmental protection, and digital healthcare accessibility.
      </p>
      
      <p class="text-sm font-semibold text-white pt-4">
        The Biotechnology & Health AI/ML Ecosystem represents the future of intelligent healthcare by combining AI-driven diagnostics, biotechnology innovation, environmental monitoring, and digital healthcare systems into one connected platform for healthier and more sustainable communities.
      </p>
    </div>
  </div>
</div>

<!-- Modal 5: Modern Sustainability Learning -->
<div id="modal-learning" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
  <!-- Modal Content -->
  <div class="bg-slate-900 border border-white/10 w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto">
    
    <!-- Close Button -->
    <button onclick="document.getElementById('modal-learning').classList.add('hidden')" class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl">×</button>

    <!-- Modal Header -->
    <h2 class="text-4xl font-black mb-6 text-emerald-400">Modern Sustainability Learning</h2>
    
    <!-- Content -->
    <div class="space-y-6 text-slate-300">
      <p class="leading-relaxed">
        <strong class="text-emerald-400">Overview:</strong> The Modern Sustainability Learning Ecosystem is a digital education and innovation platform designed to empower learners, institutions, and communities with sustainability knowledge, climate resilience skills, and future-ready competencies. It connects education, technology, and innovation into one unified learning environment.
      </p>

      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Key Features</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Digital and flexible learning platforms</li>
          <li>Sustainability and climate resilience education programs</li>
          <li>Smart technology and AI-focused learning pathways</li>
          <li>Innovation and research collaboration spaces</li>
          <li>Future workforce and skills development training</li>
          <li>Community-based learning hubs</li>
          <li>Virtual and hybrid learning environments</li>
          <li>Interactive and personalized education experiences</li>
        </ul>
      </div>

      <div>
        <h4 class="font-bold mb-3 text-emerald-400">Benefits</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Improves access to modern and inclusive education</li>
          <li>Builds skills for future jobs and green industries</li>
          <li>Strengthens climate awareness and sustainability practices</li>
          <li>Encourages innovation, creativity, and research collaboration</li>
          <li>Supports lifelong learning and digital transformation</li>
        </ul>
      </div>

      <p class="italic border-l-4 border-emerald-500 pl-4">
        <strong class="text-emerald-400">Vision:</strong> To create a future-ready, inclusive, and sustainable learning ecosystem that empowers individuals with knowledge, skills, and innovation capabilities for a resilient and intelligent future.
      </p>
      
      <p class="text-sm font-semibold text-white pt-4">
        The Modern Sustainability Learning Ecosystem represents the future of education by integrating sustainability, technology, innovation, and workforce development into one connected platform for lifelong learning and global progress.
      </p>
    </div>
  </div>
</div>

<!-- Modal 6: Wellness & Human Interactions -->
<div id="modal-wellness" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm">
  <div class="bg-slate-900 border border-white/10 w-full max-w-2xl rounded-[32px] p-8 lg:p-12 shadow-2xl relative max-h-[90vh] overflow-y-auto">
    <button onclick="document.getElementById('modal-wellness').classList.add('hidden')" class="absolute top-6 right-8 text-slate-400 hover:text-white text-3xl">×</button>
    <h2 class="text-4xl font-black mb-6 text-emerald-400">Wellness & Human Interactions</h2>
    <div class="space-y-6 text-slate-300">
      <p class="leading-relaxed">
        <strong class="text-emerald-400">Overview:</strong> Human-centric application portals centered around community engagement interfaces, accessibility architectures, and operational feedback configurations to ensure software actively aids personal well-being.
      </p>
      <div>
        <h4 class="font-bold text-white mb-3">Key Features</h4>
        <ul class="list-disc list-inside space-y-2 text-sm marker:text-emerald-400">
          <li>Accessible designs lowering friction for community portals</li>
          <li>Secure tracking options prioritizing user privacy profiles</li>
          <li>Engagement modules mapping resource allocations dynamically</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</template>