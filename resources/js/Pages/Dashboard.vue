<template>
    <Head title="Page Title" />
    <div class="max-w-6xl mx-auto p-8">
        Dashboard
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Default from '@/Layouts/Default.vue';

defineOptions({layout:Default})

defineProps({
    title:String
})
</script>
