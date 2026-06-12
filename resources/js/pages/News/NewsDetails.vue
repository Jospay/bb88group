<script lang="ts" setup>
import { Link } from '@inertiajs/vue3'
import NavBar from '@/components/NavBar.vue'

interface Post {
  id: number;
  PostTitle: string;
  PostDetails: string;
  PostImage: string;
  time_ago: string;
}

defineProps<{
  post: Post;
  recentNews: Post[];
}>();
</script>

<template>
  <div class="min-h-screen bg-slate-950 text-white font-sans antialiased relative p-6 sm:p-12">
    <div class="absolute inset-0 bg-gradient-to-br from-emerald-950/20 via-slate-950 to-cyan-950/20 pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto space-y-12 relative z-10">
      <NavBar />

      <div class="pt-2">
        <Link :href="route('news.index')" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white text-sm font-medium transition-all group cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
          </svg>
          Back to News Feed
        </Link>
      </div>

      <main class="flex flex-col lg:flex-row gap-8 items-start">
        
        <article class="w-full lg:w-7/12 bg-white/5 border border-white/10 backdrop-blur-xl rounded-[32px] p-6 sm:p-8 space-y-6 shadow-2xl">
          <header class="space-y-4">
            <h1 class="text-3xl sm:text-4xl font-black text-white leading-tight">
              {{ post.PostTitle }}
            </h1>
            
            <div class="flex items-center gap-2 text-sm text-slate-400 border-b border-white/5 pb-4">
              <img src="https://newsphilippinesonline.com/images/fabico.png" class="h-5 w-auto" alt="Logo">
              <span class="font-bold text-slate-300">NPO</span>
              <span>•</span>
              <span>{{ post.time_ago }}</span>
            </div>
          </header>

          <div class="w-full overflow-hidden rounded-2xl bg-slate-900">
            <img 
              class="w-full h-auto max-h-[450px] object-cover" 
              :src="`https://newsphilippinesonline.com/editortextadminpanel/postimages/${post.PostImage}`" 
              :alt="post.PostTitle"
            />
          </div>

          <div 
            class="prose prose-invert prose-emerald max-w-none text-slate-300 leading-relaxed text-base sm:text-lg pt-4
                   prose-headings:text-white prose-headings:font-bold prose-strong:text-emerald-400 prose-a:text-cyan-400"
            v-html="post.PostDetails"
          ></div>
        </article>

        <aside class="w-full lg:w-5/12 lg:sticky lg:top-8 space-y-6">
          <div class="bg-white/5 border border-white/10 backdrop-blur-xl rounded-[32px] p-6 sm:p-8 shadow-2xl">
            <div class="relative mb-6 border-b border-white/10 pb-3">
              <h3 class="text-xl font-bold text-white flex items-center gap-2">
                <span class="text-emerald-400">●</span> Recent News
              </h3>
            </div>

            <div v-if="recentNews.length === 0" class="text-slate-400 text-sm">
              No recent records found.
            </div>

            <div v-else class="space-y-4">
              <div v-for="recent in recentNews" :key="recent.id" class="group border-b border-white/5 last:border-b-0 pb-4 last:pb-0">
                <Link :href="route('news.show', recent.id)" class="flex gap-4 items-center">
                  <div class="w-20 h-16 shrink-0 overflow-hidden rounded-xl bg-slate-900">
                    <img 
                      :src="`https://newsphilippinesonline.com/editortextadminpanel/postimages/${recent.PostImage}`" 
                      :alt="recent.PostTitle" 
                      class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                    />
                  </div>
                  <div class="space-y-1 min-w-0">
                    <h4 class="font-bold text-sm text-slate-200 group-hover:text-emerald-400 line-clamp-2 transition-colors leading-snug">
                      {{ recent.PostTitle }}
                    </h4>
                    <p class="text-slate-400 text-xs">
                      {{ recent.time_ago }}
                    </p>
                  </div>
                </Link>
              </div>
            </div>

            <div class="pt-6 flex justify-center">
              <Link :href="news.index()" class="w-full text-center py-3 px-5 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-slate-200 hover:text-white font-semibold text-sm transition-all cursor-pointer">
                See More Updates
              </Link>
            </div>
          </div>
        </aside>

      </main>
    </div>
  </div>
</template>