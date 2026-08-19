<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';

</script>

<template>
  <div class="absolute top-4 left-4 lg:left-8 z-50">
    <Link 
      href="/solutions" 
      class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-slate-200 hover:text-white text-sm font-medium transition-all group"
    >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
      </svg>
      Back to Solutions
    </Link>
  </div>

  <div class="bg-slate-950 text-slate-100 min-h-screen font-sans relative">
    <section class="relative px-4 lg:px-8 pt-20 pb-10 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 flex flex-col items-center min-h-screen">
       <div class="max-w-5xl mx-auto w-full flex flex-col items-center">
         <div class="text-center max-w-4xl mx-auto mb-8">
           <h2 class="text-3xl lg:text-4xl text-white font-black mb-2 leading-tight">
             <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-emerald-400">
                Cyber security &
            </span>
             Data protection
           </h2>    
           <p class="text-sm lg:text-base text-slate-400 max-w-2xl mx-auto">
                IT infrastructure, data, and user operations.
           </p>
         </div>

         <main class="w-full max-w-7xl mx-auto py-4">
           <ul class="space-y-4 sm:space-y-6">
             <li class="relative flex flex-col justify-center bg-[#102a36] border border-cyan-800/30 rounded-xl ml-12 sm:ml-16 p-4 pl-24 sm:pl-28 md:pl-32 transition-all hover:bg-[#143444] min-h-[8rem]">
               <div class="absolute -left-12 sm:-left-16 -top-2 -bottom-2 aspect-square rounded-full bg-[#102a36] bg-clip-padding border-7 border-slate-900/30 shadow-lg flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/Network Security.png" alt="Network Security" class="w-28 h-28 object-cover sm:object-contain p-5" />
               </div>
               <div class="space-y-1 w-full">
                 <h3 class="text-lg font-semibold text-emerald-400">Network Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-0.5 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Secures the network infrastructure from unauthorized access, intrusions, and malicious attacks. This involves deploying tools like firewalls, VPNs, and network segmentation to manage traffic and prevent hackers from intercepting or compromising system communications.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex flex-col justify-center bg-[#102a36] border border-cyan-800/30 rounded-xl ml-12 sm:ml-16 p-4 pl-24 sm:pl-28 md:pl-32 transition-all hover:bg-[#143444] min-h-[8rem]">
               <div class="absolute -left-12 sm:-left-16 -top-2 -bottom-2 aspect-square rounded-full bg-[#102a36] bg-clip-padding border-7 border-slate-900/30 shadow-lg flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/Application Security.png" alt="Application Security" class="w-28 h-28 object-cover sm:object-contain p-5" />
               </div>
               <div class="space-y-1 w-full">
                 <h3 class="text-lg font-semibold text-emerald-400">Application Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-0.5 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Focuses on keeping software applications and APIs safe from threats. It requires writing secure code, identifying vulnerabilities, and testing software regularly to ensure bugs aren't exploited by attackers during or after the development phase.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex flex-col justify-center bg-[#102a36] border border-cyan-800/30 rounded-xl ml-12 sm:ml-16 p-4 pl-24 sm:pl-28 md:pl-32 transition-all hover:bg-[#143444] min-h-[8rem]">
               <div class="absolute -left-12 sm:-left-16 -top-2 -bottom-2 aspect-square rounded-full bg-[#102a36] bg-clip-padding border-7 border-slate-900/30 shadow-lg flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/Cloud Security.png" alt="Cloud Security" class="w-28 h-28 object-cover sm:object-contain p-5" />
               </div>
               <div class="space-y-1 w-full">
                 <h3 class="text-lg font-semibold text-emerald-400">Cloud Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-0.5 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Protects data, applications, and infrastructure hosted in cloud environments (e.g., AWS, Azure, Google Cloud). It relies on data encryption, strict access management, and compliance standards to keep remote storage and cloud-native services secure from data breaches.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex flex-col justify-center bg-[#102a36] border border-cyan-800/30 rounded-xl ml-12 sm:ml-16 p-4 pl-24 sm:pl-28 md:pl-32 transition-all hover:bg-[#143444] min-h-[8rem]">
               <div class="absolute -left-12 sm:-left-16 -top-2 -bottom-2 aspect-square rounded-full bg-[#102a36] bg-clip-padding border-7 border-slate-900/30 shadow-lg flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/Endpoint Security.png" alt="Endpoint Security" class="w-28 h-28 object-cover sm:object-contain p-5" />
               </div>
               <div class="space-y-1 w-full">
                 <h3 class="text-lg font-semibold text-emerald-400">Endpoint Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-0.5 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Defends end-user devices—such as laptops, smartphones, and servers—from malicious threats. Endpoint detection and response (EDR) software is typically used to monitor these devices, quarantine suspicious files, and block malware.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex flex-col justify-center bg-[#102a36] border border-cyan-800/30 rounded-xl ml-12 sm:ml-16 p-4 pl-24 sm:pl-28 md:pl-32 transition-all hover:bg-[#143444] min-h-[8rem]">
               <div class="absolute -left-12 sm:-left-16 -top-2 -bottom-2 aspect-square rounded-full bg-[#102a36] bg-clip-padding border-7 border-slate-900/30 shadow-lg flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/Information Security (InfoSec).png" alt="Information Security" class="w-28 h-28 object-cover sm:object-contain p-5" />
               </div>
               <div class="space-y-1 w-full">
                 <h3 class="text-lg font-semibold text-emerald-400">Information Security (InfoSec)</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-0.5 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Protects the overall integrity and confidentiality of sensitive data both in storage and in transit. This includes data encryption, enforcing data privacy policies (like GDPR or HIPAA), and preventing unauthorized disclosure, modification, or destruction.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex flex-col justify-center bg-[#102a36] border border-cyan-800/30 rounded-xl ml-12 sm:ml-16 p-4 pl-24 sm:pl-28 md:pl-32 transition-all hover:bg-[#143444] min-h-[8rem]">
               <div class="absolute -left-12 sm:-left-16 -top-2 -bottom-2 aspect-square rounded-full bg-[#102a36] bg-clip-padding border-7 border-slate-900/30 shadow-lg flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/Operational Security (OpSec).png" alt="Operational Security" class="w-28 h-28 object-cover sm:object-contain p-5" />
               </div>
               <div class="space-y-1 w-full">
                 <h3 class="text-lg font-semibold text-emerald-400">Operational Security (OpSec)</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-0.5 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Covers the processes, decisions, and permissions involved in handling and protecting data assets. It includes managing employee access rights, determining how data is shared, and establishing security protocols for daily operations.</p>
                 </div>
               </div>
             </li>

             <li class="relative flex flex-col justify-center bg-[#102a36] border border-cyan-800/30 rounded-xl ml-12 sm:ml-16 p-4 pl-24 sm:pl-28 md:pl-32 transition-all hover:bg-[#143444] min-h-[8rem]">
               <div class="absolute -left-12 sm:-left-16 -top-2 -bottom-2 aspect-square rounded-full bg-[#102a36] bg-clip-padding border-7 border-slate-900/30 shadow-lg flex items-center justify-center overflow-hidden">
                 <img src="/assets/CyberSecurity/iot based environmental system.png" alt="IoT Security" class="w-28 h-28 object-cover sm:object-contain p-5" />
               </div>
               <div class="space-y-1 w-full">
                 <h3 class="text-lg font-semibold text-emerald-400">IoT Security</h3>
                 <div class="flex items-start gap-2 text-slate-200">
                   <span class="text-white mt-0.5 leading-none">•</span>
                   <p class="text-sm leading-relaxed">Secures interconnected smart devices, such as smart cameras, medical equipment, and other "Internet of Things" hardware. Because these devices often have weak default security, this type relies on network isolation, firmware updates, and strong authentication to prevent them from acting as entry points for hackers.</p>
                 </div>
               </div>
             </li>
           </ul>
         </main>
       </div>
    </section>

      <div class="w-full max-w-7xl mx-auto py-8 border-t border-white/5">
        <h2 class="text-3xl font-bold text-white mb-3 text-start">Value Proposition</h2>
        <p class="border-l-4 border-emerald-500 pl-4 mb-6 text-slate-300 text-start leading-relaxed">
          <i>This ecosystem delivers a fully integrated intelligent monitoring platform that combines AI, IoT, GIS, and real-time analytics to create smarter, safer, and more sustainable environments.</i>
      </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full text-start">
          
          <div class="rounded-xl flex flex-col gap-4 hover:border-emerald-500/40 hover:bg-emerald-500/[0.01] transition-all duration-300">
              <h4 class="text-emerald-400 font-bold text-lg mb-1"> It empowers governments, industries, and communities with: </h4>
            <div class="space-y-2">
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
            <div class="space-y-2">
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
  </div>
</template>