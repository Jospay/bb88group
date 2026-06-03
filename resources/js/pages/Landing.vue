<script setup lang="ts">
import { Head, Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import { dashboard, login } from '@/routes';
import { register } from '@/routes';
import NavBar from '@/components/NavBar.vue';
import HomeSection from '@/components/landing/HomeSection.vue';
import DigitalSolutionSection from '@/components/landing/DigitalSolutionSection.vue';
import Contact from '@/components/landing/Contact.vue';
import Footer from '@/components/Footer.vue';
const page = usePage();
const dashboardUrl = computed(() =>
    page.props.currentTeam ? dashboard(page.props.currentTeam.slug).url : '/',
);
</script>

<template>
    <Head title="Landing Page">
    </Head>
   <NavBar />
   <HomeSection />
   <DigitalSolutionSection />
   <Contact />
   <Footer />
</template>
