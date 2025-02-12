<template>
    <Head title="Page Title" />
    <div class="max-w-7xl mx-auto p-8">
        Home
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
