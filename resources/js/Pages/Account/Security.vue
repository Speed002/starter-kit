<template>
    <Head title="Page Title" />
    <div class="max-w-7xl mx-auto">
        Security
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Default from '@/Layouts/Default.vue';
import Account from '@/Layouts/Account.vue';

defineOptions({layout:[Default, Account]})

defineProps({
    title:String
})
</script>
