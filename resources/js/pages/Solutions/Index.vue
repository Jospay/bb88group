<script lang="ts" setup>
import { Link } from "@inertiajs/vue3";

import { home } from "@/routes"; 
import * as solutionsRoutes from "@/routes/solutions";

interface User {
    name: string
    email: string
}

const props = defineProps<{
    user: User | null
}>()

const solutions = [
    {
        title: 'AI & Machine Learning Integration Architecture Design',
        image: 'assets/ai & machine learning integration architecture design.png',
        route: solutionsRoutes.aiMlArchitectureDesign(),
    },
    {
        title: 'Bagsakan Ecosystem',
        image: 'assets/bagsakan ecosystem.png',
        route: solutionsRoutes.bagsakanEcosystem(),
    },
    {
        title: 'Biotechnology & Health AI/ML Ecosystem',
        image: 'assets/biotechnology & health innovation.png',
        route: solutionsRoutes.biotechAiMlHealthEcosystem(),
    },
    {
        title: 'Climate-Smart Modern Digital Infrastructure',
        image: '/assets/climate smart modern digital infrastructure.png',
        route: solutionsRoutes.climateSmartDigitalInfrastructure(),
    },
    {
        title: 'Community Empowerment Programs',
        image: 'assets/community empowerment programs.png',
        route: solutionsRoutes.communityEmpowerment(),
    },
    {
        title: 'Digital Innovation & Research Labs',
        image: 'assets/digital innovation & research labs.png',
        route: solutionsRoutes.digitalInnovationResearchLabs(),
    },
    {
        title: 'E-Mobility Solutions Ecosystem',
        image: 'assets/E-Mobility Solutions.png',
        route: solutionsRoutes.eMobility(),
    },
    {
        title: 'Geo-Tagging & Real-Time Monitoring Modern Digital Architecture',
        image: 'assets/Geo Monitoring.png',
        route: solutionsRoutes.geoMonitoring(),
    },
    {
        title: 'IoT-Based Environmental Systems',
        image: 'assets/iot based environmental system.png',
        route: solutionsRoutes.iotBasedEnvironmentalSystems(),
    },
    {
        title: 'Modern Sustainability Learning Ecosystem',
        image: 'assets/Modern Sustainability Learning.png',
        route: solutionsRoutes.sustainabilityLearning(),
    },
        {
        title: 'Cyber security and Data protection',
        image: 'assets/CyberSecurity/Cyber security and Data protection.png',
        route: solutionsRoutes.cybersecurity(),
    },
]
</script>

<template>
    <div class="bg-slate-950">
        <section
            class="relative min-h-screen bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950 px-6 pt-32 pb-20 lg:px-20"
        >
            <!-- Back Button -->
            <div class="absolute top-6 left-6 z-50 lg:left-20">
                <!-- Pass the invoked Wayfinder function straight to :href -->
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
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"
                        />
                    </svg>
                    Back to Home
                </Link>
            </div>

            <div class="mx-auto flex w-full max-w-7xl flex-col items-center">
                <!-- Header -->
                <div class="mx-auto mb-16 max-w-4xl text-center">
                    <h2 class="mb-6 text-4xl font-black text-white lg:text-5xl">
                        Explore
                        <span
                            class="bg-gradient-to-r from-cyan-400 to-emerald-400 bg-clip-text text-transparent"
                        >
                            Solutions
                        </span>
                    </h2>

                    <p class="text-lg leading-relaxed text-slate-300">
                        Discover a modern ecosystem of solutions designed to
                        power sustainable growth, from smart agriculture and
                        food security to AI-driven innovation, biotechnology,
                        and wellness.
                    </p>
                </div>

                <div
                    class="grid w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                >
                    <!-- Bind directly to solution.route object -->
                    <Link
                        v-for="solution in solutions"
                        :key="solution.title"
                        :href="solution.route"
                        class="group block rounded-xl border border-white/10 bg-white/5 p-6 transition-all duration-300 hover:-translate-y-1.5 hover:border-emerald-400/40 hover:bg-white/10"
                    >
                        <figure class="text-left">
                            <img
                                :src="solution.image"
                                :alt="solution.title"
                                class="h-14 w-14 object-contain"
                            />

                            <figcaption
                                class="my-4 text-lg font-semibold text-white transition-colors duration-300 group-hover:text-emerald-400 lg:text-xl"
                            >
                                {{ solution.title }}
                            </figcaption>
                        </figure>
                    </Link>

                    <Link
                        :href="home()"
                        class="group flex min-h-[200px] flex-col items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-cyan-500 p-6 text-center shadow-lg shadow-emerald-500/10 transition-all duration-300 hover:-translate-y-1.5 hover:from-emerald-600 hover:to-cyan-600 sm:min-h-full"
                    >
                        <span
                            class="text-xl font-semibold text-white transition-transform duration-300 group-hover:scale-105 lg:text-2xl"
                        >
                            Learn More?
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2.5"
                            stroke="currentColor"
                            class="mt-3 h-5 w-5 text-white transition-transform group-hover:translate-x-1"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"
                            />
                        </svg>
                    </Link>
                </div>
            </div>
        </section>
    </div>
</template>