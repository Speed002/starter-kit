<template>
    <Head title="Page Title" />
    <div class="max-w-7xl mx-auto">
        profile information
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Default from '@/Layouts/Default.vue';
import Account from '@/Layouts/Account.vue';

defineOptions({layout:[Default, Account]}) //the first item of the array is the parent that holds most of the imports, as we dont need to include them, it it the default.vue

defineProps({
    title:String
})
</script>
