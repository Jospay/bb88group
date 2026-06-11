<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { index as solutionsIndex } from '@/routes/solutions';

const showMoreSolutions = ref(false);
const showMoreBenefits = ref(false); 
</script>

<template>
    <main class="bg-slate-950 text-slate-100 min-h-screen font-sans">
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
                    class="h-4 w-4 transform transition-transform group-hover:-translate-x-1"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Back to Solutions
            </Link>
        </div>

        <section class="relative flex flex-col items-center bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 px-6 pt-32 pb-20 lg:px-20">
            <div class="mx-auto w-full max-w-7xl flex flex-col items-center">
                
                <div class="mx-auto mb-16 max-w-4xl text-center">
                    <h2 class="text-4xl font-black leading-tight text-white lg:text-5xl mb-4">
                        <span class="bg-gradient-to-r from-cyan-400 to-emerald-400 bg-clip-text text-transparent">
                            Biotechnology  
                        </span>
                        & Health AI/ML Ecosystem
                    </h2>    
                    <p class="text-base text-slate-400 lg:text-lg">
                        Comprehensive Digital Healthcare, Biotechnology & Intelligent Environmental Health Framework
                    </p>
                </div>

                <div class="w-full space-y-16">
                    
                    <div class="max-w-7xl">
                        <h2 class="text-2xl font-bold text-white mb-2">Overview</h2>
                        <p class="text-base leading-relaxed text-slate-300">
                            The Biotechnology & Health AI/ML Ecosystem is an integrated digital platform that combines healthcare, biotechnology, environmental intelligence, and AI-driven analytics to modernize healthcare systems, enhance disease prevention, and accelerate scientific innovation. It connects healthcare providers, researchers, laboratories, and public health institutions into a unified, intelligent ecosystem for smarter, faster, and more sustainable health solutions.
                        </p>
                    </div>

                    <div id="core-solutions-section">
                        <h2 class="text-2xl font-bold text-white mb-6">Core Solutions</h2>
                        
                        <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                            
                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    AI-Driven Diagnostics
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">AI-powered medical imaging and laboratory analysis</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Early disease detection and predictive diagnostics</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Clinical decision support and treatment recommendations</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Remote and telehealth-enabled diagnostics</span></div>
                            </div>

                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    Biotechnology Innovation Platform
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Genomic and bioinformatics analytics</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Smart laboratory automation and research systems</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">AI-assisted scientific collaboration and data management</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Environmental biotechnology and pathogen monitoring</span></div>
                            </div>

                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    Predictive Health Analytics
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Population health intelligence and disease forecasting</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Patient risk scoring and preventive care insights</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Hospital resource and workforce optimization</span></div>
                            </div>

                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    SMART Environmental Monitoring
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Air quality, bioaerosol, and pollution monitoring</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Environmental pathogen detection and surveillance</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Water and soil quality analytics</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Climate-health risk forecasting</span></div>
                            </div>

                            <div :class="{ 'hidden': !showMoreSolutions }" class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    Digital Healthcare Ecosystem
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Electronic Health Records (EHR) and cloud-based systems</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Telemedicine and remote patient monitoring</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Smart hospital operations and workflow automation</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Patient engagement apps and AI wellness assistants</span></div>
                            </div>

                            <div :class="{ 'hidden': !showMoreSolutions }" class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    Public Health Surveillance & Emergency Systems
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Real-time disease tracking and outbreak detection</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Pandemic monitoring and emergency coordination</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">National health dashboards and analytics</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Healthcare capacity and supply chain intelligence</span></div>
                            </div>

                            <div :class="{ 'hidden': !showMoreSolutions }" class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    Environmental Specimen Surveillance
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Automated airborne and environmental specimen collection</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">AI-powered biological analysis and contamination detection</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Real-time environmental risk monitoring dashboards</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Predictive environmental health intelligence</span></div>
                            </div>

                            <div :class="{ 'hidden': !showMoreSolutions }" class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-emerald-500/40 hover:bg-emerald-500/[0.02]">
                                <h3 class="text-base font-semibold text-emerald-400 transition-colors group-hover:text-emerald-300 sm:text-lg">
                                    IoT & Connected Health Infrastructure
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Wearable health devices and remote monitoring systems</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Smart laboratory and environmental sensors</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Cloud, edge computing, and 5G-enabled connectivity</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-emerald-400"></div><span class="text-sm text-slate-200">Integrated mobile and web health platforms</span></div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <button 
                                @click="showMoreSolutions = !showMoreSolutions" 
                                class="inline-flex cursor-pointer items-center gap-2 rounded-xl border border-white/10 bg-emerald-500 px-6 py-3 font-medium text-gray-800 shadow-md transition-all hover:bg-emerald-600"
                            >
                                <span>{{ showMoreSolutions ? 'Show Less' : 'Show More' }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" :class="{ 'rotate-180': showMoreSolutions }" class="h-4 w-4 transform transition-transform duration-200">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                    </div> 

                    <div id="key-benefits-section">
                        <h2 class="text-2xl font-bold text-white mb-6">Key Benefits</h2>
                        
                        <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-cyan-500/40 hover:bg-cyan-500/[0.02]">
                                <h3 class="text-base font-semibold text-cyan-400 transition-colors group-hover:text-cyan-300 sm:text-lg">
                                    Healthcare Benefits
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Faster and more accurate diagnostics</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Improved healthcare accessibility and telemedicine services</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Stronger disease prevention and early detection</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Enhanced clinical decision-making through AI</span></div>
                            </div>

                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-cyan-500/40 hover:bg-cyan-500/[0.02]">
                                <h3 class="text-base font-semibold text-cyan-400 transition-colors group-hover:text-cyan-300 sm:text-lg">
                                    Environmental Benefits
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Advanced environmental health monitoring</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Early detection of pollution and biological risks</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Improved climate-health response systems</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Sustainable and eco-friendly health infrastructure</span></div>
                            </div>

                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-cyan-500/40 hover:bg-cyan-500/[0.02]">
                                <h3 class="text-base font-semibold text-cyan-400 transition-colors group-hover:text-cyan-300 sm:text-lg">
                                    Economic Benefits
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Reduced healthcare operational costs</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Accelerated biotechnology innovation and R&D</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Increased efficiency in healthcare systems</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Growth in digital health and biotech industries</span></div>
                            </div>

                            <div class="group flex w-full flex-col gap-4 rounded-xl border border-white/10 bg-white/5 p-6 text-left transition-all hover:border-cyan-500/40 hover:bg-cyan-500/[0.02]">
                                <h3 class="text-base font-semibold text-cyan-400 transition-colors group-hover:text-cyan-300 sm:text-lg">
                                    Social Benefits
                                </h3>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Improved community health and wellness</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Greater healthcare inclusivity and accessibility</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Strengthened public health resilience</span></div>
                                <div class="flex items-center gap-3"><div class="h-2.5 w-2.5 shrink-0 rounded-full bg-cyan-400"></div><span class="text-sm text-slate-200">Better digital health engagement for individuals</span></div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <button 
                                @click="showMoreBenefits = !showMoreBenefits" 
                                class="inline-flex cursor-pointer items-center gap-2 rounded-xl border border-white/10 bg-cyan-500 px-6 py-3 font-medium text-gray-800 shadow-md transition-all hover:bg-cyan-600"
                            >
                                <span>{{ showMoreBenefits ? 'Show Less' : 'Show More' }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" :class="{ 'rotate-180': showMoreBenefits }" class="h-4 w-4 transform transition-transform duration-200">
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