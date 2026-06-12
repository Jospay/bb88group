<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import NavBar from '@/components/NavBar.vue' // Point to your pre-existing nav location

interface Post {
  id: number;
  PostTitle: string;
  PostDetails: string;
  PostImage: string;
  time_ago: string;
  postingdate: string;
}

interface PaginationLink {
  url: string | null;
  label: string;
  active: boolean;
}

defineProps<{
  heroPost: Post | null;
  posts: {
    data: Post[];
    links: PaginationLink[];
  }
}>();

// Formats content lengths cleanly without stripping structural html properties
const truncateText = (html: string, limit: number) => {
  const text = html.replace(/<[^>]*>/g, '');
  
  return text.length > limit ? text.substring(0, limit) + '...' : text;
}
</script>

<template>
  <div class="min-h-screen bg-slate-950 text-white font-sans antialiased relative p-6 sm:p-12">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-950/20 via-slate-950 to-cyan-950/20 pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto space-y-12 relative z-10">
      <NavBar />

      <header class="text-center max-w-3xl mx-auto space-y-4 pt-6">
        <h1 class="text-4xl lg:text-5xl font-black tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-emerald-400">
          News & Media
        </h1>
        <p class="text-slate-400 text-lg">
          Latest updates, ecosystem announcements, and technical breakthroughs.
        </p>
      </header>

      <section v-if="heroPost">
        <Link :href="route('news.show', heroPost.id)" class="group block relative bg-white/5 border border-white/10 rounded-[32px] overflow-hidden backdrop-blur-xl p-6 lg:p-8 transition-all hover:border-emerald-500/30 shadow-2xl">
          <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center">
            <div class="w-full lg:w-1/2 overflow-hidden rounded-2xl">
              <img 
                :src="`https://newsphilippinesonline.com/editortextadminpanel/postimages/${heroPost.PostImage}`" 
                class="w-full aspect-[4/3] object-cover group-hover:scale-102 transition-transform duration-500" 
                :alt="heroPost.PostTitle"
              />
            </div>

            <div class="w-full lg:w-1/2 space-y-4">
              <div class="flex items-center gap-2 text-sm text-slate-400">
                <img src="https://newsphilippinesonline.com/images/fabico.png" class="h-5 w-auto" alt="Logo">
                <span class="font-bold text-slate-300">NPO</span>
                <span>•</span>
                <span>{{ heroPost.time_ago }}</span>
              </div>

              <h2 class="text-3xl lg:text-4xl font-black group-hover:text-emerald-400 transition-colors leading-tight">
                {{ heroPost.PostTitle }}
              </h2>
              
              <p class="text-slate-400 leading-relaxed">
                {{ truncateText(heroPost.PostDetails, 350) }}
              </p>
            </div>
          </div>
        </Link>
      </section>

      <section class="space-y-10 pt-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
          <div v-for="post in posts.data" :key="post.id" class="flex">
            <Link :href="route('news.show', post.id)" class="group flex flex-col bg-white/5 border border-white/10 rounded-3xl p-5 backdrop-blur-xl transition-all hover:border-emerald-500/30 w-full">
              <div class="w-full h-48 overflow-hidden rounded-xl mb-4 bg-slate-900">
                <img 
                  :src="`https://newsphilippinesonline.com/editortextadminpanel/postimages/${post.PostImage}`" 
                  class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-300" 
                  :alt="post.PostTitle"
                />
              </div>

              <div class="flex items-center gap-2 text-xs text-slate-400 mb-2">
                <img src="https://newsphilippinesonline.com/images/fabico.png" class="h-4 w-auto" alt="Logo">
                <span class="font-bold text-slate-300">NPO</span>
                <span>•</span>
                <span>{{ post.time_ago }}</span>
              </div>

              <div class="flex-1 space-y-2">
                <h3 class="font-bold text-lg line-clamp-2 text-white group-hover:text-emerald-400 transition-colors leading-snug">
                  {{ post.PostTitle }}
                </h3>
                <p class="text-slate-400 text-sm line-clamp-3 leading-relaxed">
                  {{ truncateText(post.PostDetails, 120) }}
                </p>
              </div>
            </Link>
          </div>
        </div>

        <div v-if="posts.links.length > 3" class="flex gap-2 justify-center items-center pt-4">
          <Component
            :is="link.url ? Link : 'span'"
            v-for="(link, index) in posts.links"
            :key="index"
            :href="link.url || '#'"
            v-html="link.label"
            class="px-4 py-2 rounded-xl border transition-all text-sm font-medium"
            :class="[
              link.active ? 'bg-emerald-500 border-emerald-500 text-slate-950 font-bold shadow-lg shadow-emerald-500/20' : 'border-white/10 bg-white/5 text-slate-300 hover:bg-white/10',
              !link.url ? 'opacity-40 cursor-not-allowed' : 'cursor-pointer'
            ]"
          />
        </div>
      </section>
    </div>
  </div>
</template>