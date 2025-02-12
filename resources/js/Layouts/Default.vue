<template>
    <div>
        <Navigation/>
        <div>
            <slot/>
        </div>
    </div>

</template>

<script setup>
import Navigation from '@/Components/Navigation.vue';

</script>
