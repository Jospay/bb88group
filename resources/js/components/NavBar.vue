<script lang="ts" setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

import { home, innovation, partnerships } from '@/routes';
import { index as solutionsIndex } from '@/routes/solutions';

const isMobileMenuOpen = ref(false);

const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
};
</script>

<template>
    <div class="relative mx-auto mb-12 max-w-7xl">
        <nav
            class="flex items-center justify-between gap-4 border-b border-white/10 py-4"
        >
            <div class="flex-shrink-0">
                <Link
                    :href="home()"
                    class="text-white transition-colors hover:text-emerald-400"
                >
                    <img
                        src="/assets/bb88.png"
                        alt="logo"
                        class="h-10 w-auto sm:h-12"
                    />
                </Link>
            </div>

            <div class="hidden items-center gap-8 md:flex">
                <Link
                    :href="solutionsIndex()"
                    class="text-sm font-medium text-slate-300 transition-colors hover:text-emerald-400"
                    >Solutions</Link
                >
                <Link
                    :href="innovation()"
                    class="text-sm font-medium text-slate-300 transition-colors hover:text-emerald-400"
                    >Innovation</Link
                >
                <Link
                    href="/news"
                    class="text-sm font-medium text-slate-300 transition-colors hover:text-emerald-400"
                    >News</Link
                >
                <Link
                    :href="partnerships()"
                    class="text-sm font-medium text-slate-300 transition-colors hover:text-emerald-400"
                    >Partnerships</Link
                >
                <a
                    href="#contact"
                    class="text-sm font-medium text-slate-300 transition-colors hover:text-emerald-400"
                    >Contact</a
                >
            </div>

            <div class="flex items-center gap-4">
                <Link
                    :href="innovation()"
                    class="hidden cursor-pointer rounded-xl bg-emerald-500 px-5 py-2.5 text-xs font-semibold whitespace-nowrap text-black shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-400 sm:inline-block md:text-sm"
                >
                    Start Innovation Journey Today?
                </Link>

                <div class="md:hidden">
                    <button
                        @click="toggleMobileMenu"
                        class="cursor-pointer p-1 text-white hover:text-emerald-400 focus:outline-none"
                    >
                        <svg
                            v-if="!isMobileMenuOpen"
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                        <svg
                            v-else
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <div
            v-if="isMobileMenuOpen"
            class="absolute top-20 right-6 left-6 z-50 flex flex-col gap-4 rounded-2xl border border-white/10 bg-slate-900/95 p-6 shadow-2xl backdrop-blur-xl md:hidden"
        >
            <Link
                :href="solutionsIndex()"
                @click="isMobileMenuOpen = false"
                class="border-b border-white/5 py-2 text-base font-medium text-slate-300 transition-colors hover:text-emerald-400"
                >Solutions</Link
            >
            <Link
                :href="innovation()"
                @click="isMobileMenuOpen = false"
                class="border-b border-white/5 py-2 text-base font-medium text-slate-300 transition-colors hover:text-emerald-400"
                >Innovation</Link
            >
            <Link
                href="/news"
                @click="isMobileMenuOpen = false"
                class="border-b border-white/5 py-2 text-base font-medium text-slate-300 transition-colors hover:text-emerald-400"
                >Research</Link
            >
            <Link
                :href="partnerships()"
                @click="isMobileMenuOpen = false"
                class="border-b border-white/5 py-2 text-base font-medium text-slate-300 transition-colors hover:text-emerald-400"
                >Partnerships</Link
            >
            <a
                href="#contact"
                @click="isMobileMenuOpen = false"
                class="mb-2 py-2 text-base font-medium text-slate-300 transition-colors hover:text-emerald-400"
                >Contact</a
            >

            <Link
                :href="innovation()"
                @click="isMobileMenuOpen = false"
                class="w-full cursor-pointer rounded-xl bg-emerald-500 py-3 text-center text-sm font-semibold text-black shadow-lg shadow-emerald-500/20 transition hover:bg-emerald-400 sm:hidden"
            >
                Start Innovation Journey Today?
            </Link>
        </div>

        <div class="mt-6 flex justify-start">
            <div
                class="inline-flex items-center gap-3 rounded-full border border-white/20 bg-white/10 px-4 py-2 backdrop-blur-sm"
            >
                <span class="animate-pulse text-emerald-400">●</span>
                <span
                    class="text-[10px] font-medium tracking-wide text-white uppercase sm:text-sm"
                >
                    Sustainable Innovation Ecosystem
                </span>
            </div>
        </div>
    </div>
</template>
