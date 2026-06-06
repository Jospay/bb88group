<script setup lang="ts">
import { Head} from '@inertiajs/vue3';
import Footer from '@/components/Footer.vue';
import Contact from '@/components/landing/Contact.vue';
import DigitalSolutionSection from '@/components/landing/DigitalSolutionSection.vue';
import HomeSection from '@/components/landing/HomeSection.vue';
import ModernDigitalSection from '@/components/landing/ModernDigitalSection.vue';
import NavBar from '@/components/NavBar.vue';


</script>

<template>
    <Head title="Landing Page">
    </Head>
   <section class="relative px-6 lg:px-20 py-20 bg-gradient-to-br from-emerald-900 via-slate-950 to-cyan-950">
   <NavBar />
   <HomeSection />I
   </section>

   <DigitalSolutionSection />
   <section
        class="px-6 lg:px-20 py-24 bg-gradient-to-b from-slate-900 to-slate-950"
      >
   <ModernDigitalSection />
   </section>
   
   <Contact />
   <Footer />
</template>
