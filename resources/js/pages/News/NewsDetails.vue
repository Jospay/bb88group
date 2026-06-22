<template>
    <div class="container py-5">
        <div v-if="news">
            <h1 class="fw-bold">
                {{ news.PostTitle }}
            </h1>

            <p class="text-muted">
                {{ news.CategoryName }}

                | Posted on

                {{ formatDate(news.PostingDate) }}
            </p>

            <img
                :src="imageUrl(news.PostImage)"
                class="img-fluid rounded-4 mb-4 w-100 shadow"
            />

            <div class="news-content" v-html="news.PostDetails"></div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    news: Object,
});

const news = props.news;

const imageUrl = (image) => {
    return `https://newsphilippinesonline.com/editortextadminpanel/postimages/${image}`;
};

const formatDate = (date) => {
    return new Date(date.replace(' ', 'T')).toLocaleString();
};
</script>

<style>
.news-content p {
    font-size: 16px;

    line-height: 1.8;

    color: #334155;
}

.news-content img {
    max-width: 100%;

    height: auto;
}
</style>
