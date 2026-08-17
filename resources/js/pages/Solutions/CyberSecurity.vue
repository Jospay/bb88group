<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

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
         <div class="text-center max-w-7xl mx-auto mb-12">
           <h2 class="text-4xl lg:text-5xl text-white font-black mb-2 leading-tight">
             <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
                Cyber security &
            </span>
             Data protection
           </h2>    
           <p class="text-base lg:text-lg text-slate-400 max-w-3xl mx-auto">
                IT infrastructure, data, and user operations.
           </p>
         </div>

         <main class="w-full max-w-5xl mx-auto py-8">
           <ul class="space-y-8 sm:space-y-12">
             <li class="relative flex items-center bg-[#102a36] border border-cyan-800/30 rounded-2xl ml-14 sm:ml-20 md:ml-24 p-6 pl-16 sm:pl-20 md:pl-24 transition-all hover:bg-[#143444]">
               <div class="absolute -left-14 sm:-left-16 md:-left-20 top-1/2 -translate-y-1/2 w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full bg-[#102a36] bg-clip-padding border-4 sm:border-[5px] border-slate-900/30 shadow-xl flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/icon-1.png" alt="Network Security" class="w-full h-full object-cover sm:object-contain" />
               </div>
               <div class="space-y-1 flex-1">
                 <h3 class="text-xl font-semibold text-emerald-400">Network Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-1 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Secures the network infrastructure from unauthorized access, intrusions, and malicious attacks. This involves deploying tools like firewalls, VPNs, and network segmentation to manage traffic and prevent hackers from intercepting or compromising system communications.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex items-center bg-[#102a36] border border-cyan-800/30 rounded-2xl ml-14 sm:ml-20 md:ml-24 p-6 pl-16 sm:pl-20 md:pl-24 transition-all hover:bg-[#143444]">
               <div class="absolute -left-14 sm:-left-16 md:-left-20 top-1/2 -translate-y-1/2 w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full bg-[#102a36] bg-clip-padding border-4 sm:border-[5px] border-slate-900/30 shadow-xl flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/icon-2.png" alt="Application Security" class="w-full h-full object-cover sm:object-contain" />
               </div>
               <div class="space-y-1 flex-1">
                 <h3 class="text-xl font-semibold text-emerald-400">Application Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-1 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Focuses on keeping software applications and APIs safe from threats. It requires writing secure code, identifying vulnerabilities, and testing software regularly to ensure bugs aren't exploited by attackers during or after the development phase.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex items-center bg-[#102a36] border border-cyan-800/30 rounded-2xl ml-14 sm:ml-20 md:ml-24 p-6 pl-16 sm:pl-20 md:pl-24 transition-all hover:bg-[#143444]">
               <div class="absolute -left-14 sm:-left-16 md:-left-20 top-1/2 -translate-y-1/2 w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full bg-[#102a36] bg-clip-padding border-4 sm:border-[5px] border-slate-900/30 shadow-xl flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/icon-3.png" alt="Cloud Security" class="w-full h-full object-cover sm:object-contain" />
               </div>
               <div class="space-y-1 flex-1">
                 <h3 class="text-xl font-semibold text-emerald-400">Cloud Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-1 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Protects data, applications, and infrastructure hosted in cloud environments (e.g., AWS, Azure, Google Cloud). It relies on data encryption, strict access management, and compliance standards to keep remote storage and cloud-native services secure from data breaches.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex items-center bg-[#102a36] border border-cyan-800/30 rounded-2xl ml-14 sm:ml-20 md:ml-24 p-6 pl-16 sm:pl-20 md:pl-24 transition-all hover:bg-[#143444]">
               <div class="absolute -left-14 sm:-left-16 md:-left-20 top-1/2 -translate-y-1/2 w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full bg-[#102a36] bg-clip-padding border-4 sm:border-[5px] border-slate-900/30 shadow-xl flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/icon-4.png" alt="Endpoint Security" class="w-full h-full object-cover sm:object-contain" />
               </div>
               <div class="space-y-1 flex-1">
                 <h3 class="text-xl font-semibold text-emerald-400">Endpoint Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-1 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Defends end-user devices—such as laptops, smartphones, and servers—from malicious threats. Endpoint detection and response (EDR) software is typically used to monitor these devices, quarantine suspicious files, and block malware.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex items-center bg-[#102a36] border border-cyan-800/30 rounded-2xl ml-14 sm:ml-20 md:ml-24 p-6 pl-16 sm:pl-20 md:pl-24 transition-all hover:bg-[#143444]">
               <div class="absolute -left-14 sm:-left-16 md:-left-20 top-1/2 -translate-y-1/2 w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full bg-[#102a36] bg-clip-padding border-4 sm:border-[5px] border-slate-900/30 shadow-xl flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/icon-5.png" alt="Information Security" class="w-full h-full object-cover sm:object-contain" />
               </div>
               <div class="space-y-1 flex-1">
                 <h3 class="text-xl font-semibold text-emerald-400">Information Security (InfoSec)</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-1 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Protects the overall integrity and confidentiality of sensitive data both in storage and in transit. This includes data encryption, enforcing data privacy policies (like GDPR or HIPAA), and preventing unauthorized disclosure, modification, or destruction.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex items-center bg-[#102a36] border border-cyan-800/30 rounded-2xl ml-14 sm:ml-20 md:ml-24 p-6 pl-16 sm:pl-20 md:pl-24 transition-all hover:bg-[#143444]">
               <div class="absolute -left-14 sm:-left-16 md:-left-20 top-1/2 -translate-y-1/2 w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full bg-[#102a36] bg-clip-padding border-4 sm:border-[5px] border-slate-900/30 shadow-xl flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/icon-6.png" alt="Operational Security" class="w-full h-full object-cover sm:object-contain" />
               </div>
               <div class="space-y-1 flex-1">
                 <h3 class="text-xl font-semibold text-emerald-400">Operational Security (OpSec)</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-1 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Covers the processes, decisions, and permissions involved in handling and protecting data assets. It includes managing employee access rights, determining how data is shared, and establishing security protocols for daily operations.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex items-center bg-[#102a36] border border-cyan-800/30 rounded-2xl ml-14 sm:ml-20 md:ml-24 p-6 pl-16 sm:pl-20 md:pl-24 transition-all hover:bg-[#143444]">
               <div class="absolute -left-14 sm:-left-16 md:-left-20 top-1/2 -translate-y-1/2 w-28 h-28 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full bg-[#102a36] bg-clip-padding border-4 sm:border-[5px] border-slate-900/30 shadow-xl flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/icon-7.png" alt="IoT Security" class="w-full h-full object-cover sm:object-contain" />
               </div>
               <div class="space-y-1 flex-1">
                 <h3 class="text-xl font-semibold text-emerald-400">IoT Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-1 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Secures interconnected smart devices, such as smart cameras, medical equipment, and other "Internet of Things" hardware. Because these devices often have weak default security, this type relies on network isolation, firmware updates, and strong authentication to prevent them from acting as entry points for hackers.</p>
                 </div>
               </div>
             </li>
           </ul>
         </main>
       </div>
    </section>

    <div class="max-w-5xl mx-auto w-full pt-8 pb-16 px-6 lg:px-0">
       <h2 class="text-3xl font-bold text-white mb-6">Value Proposition</h2>
       <div class="border-l-4 border-emerald-500 pl-5 space-y-4">
         <p class="text-base text-slate-300 leading-relaxed italic">
           This ecosystem serves as a powerful platform for education, innovation, and workforce transformation, enabling:
         </p>
         <ul class="list-none text-sm text-white space-y-2">
           <li class="flex items-center gap-2"><span class="text-emerald-500">•</span> Sustainable development</li>
           <li class="flex items-center gap-2"><span class="text-emerald-500">•</span> Digital transformation in education</li>
           <li class="flex items-center gap-2"><span class="text-emerald-500">•</span> Climate resilience and environmental protection</li>
           <li class="flex items-center gap-2"><span class="text-emerald-500">•</span> Human-centered technological advancement</li>
         </ul>
       </div>
    </div>
  </div>
</template>