<template>
    <div class="container py-5">
        <h1 class="fw-bold mb-4 text-primary">News & Media</h1>

        <!-- Latest News -->
        <div v-if="latestNews.length" class="mb-5">
            <h4 class="fw-bold mb-3">Latest News</h4>

            <div
                id="latestNewsCarousel"
                class="carousel slide"
                data-bs-ride="carousel"
            >
                <div class="carousel-inner rounded-4 shadow">
                    <div
                        v-for="(item, index) in latestNews"
                        :key="item.id"
                        :class="['carousel-item', index === 0 ? 'active' : '']"
                    >
                        <a
                            :href="`/news/details/${item.id}`"
                            class="text-decoration-none"
                        >
                            <div class="position-relative">
                                <img
                                    :src="imageUrl(item.PostImage)"
                                    class="d-block w-100"
                                    style="height: 500px; object-fit: cover"
                                />

                                <div
                                    class="position-absolute start-0 end-0 bottom-0 p-4 text-white"
                                    style="
                                        background: linear-gradient(
                                            transparent,
                                            rgba(0, 0, 0, 0.8)
                                        );
                                    "
                                >
                                    <span class="badge mb-2 bg-primary">
                                        {{ item.CategoryName }}
                                    </span>

                                    <h3>
                                        {{ item.PostTitle }}
                                    </h3>

                                    <small>
                                        {{ formatDate(item.PostingDate) }}
                                    </small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#latestNewsCarousel"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#latestNewsCarousel"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <!-- Categories -->

        <div class="mb-4">
            <button
                v-for="cat in categories"
                :key="cat"
                class="btn me-2 mb-2"
                :class="
                    selectedCategory === cat
                        ? 'btn-primary'
                        : 'btn-outline-primary'
                "
                @click="filterCategory(cat)"
            >
                {{ cat }}
            </button>
        </div>

        <!-- News List -->

        <div class="row">
            <div class="col-lg-4 mb-4" v-for="item in news" :key="item.id">
                <a
                    :href="`/news/details/${item.id}`"
                    class="text-decoration-none"
                >
                    <div class="card rounded-4 h-100 border-0 shadow">
                        <img
                            :src="imageUrl(item.PostImage)"
                            class="card-img-top"
                            style="height: 250px; object-fit: cover"
                        />

                        <div class="card-body">
                            <span class="badge mb-2 bg-primary">
                                {{ item.CategoryName }}
                            </span>

                            <h5 class="fw-bold text-dark">
                                {{ item.PostTitle }}
                            </h5>

                            <small class="text-muted">
                                {{ formatDate(item.PostingDate) }}
                            </small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
import { computed } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
    news: Array,

    categories: Array,

    pagination: Object,
});

const selectedCategory = defineModel();

const latestNews = computed(() => {
    return props.news.slice(0, 5);
});

const filterCategory = (category) => {
    selectedCategory.value = category;

    router.get(
        '/news',
        {
            category: category === 'All' ? '' : category,
        },
        {
            preserveState: true,

            preserveScroll: true,
        },
    );
};

const imageUrl = (image) => {
    return `https://newsphilippinesonline.com/editortextadminpanel/postimages/${image}`;
};

const formatDate = (date) => {
    return new Date(date.replace(' ', 'T')).toLocaleString();
};
</script>
