<template>
    <Header class="absolute w-full"/>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent bg-logo">
        <div>
            <img src="/images/large-logo.png" class="" alt="Legal Directives Logo">
        </div>
        <div class="w-full">
            <slot/>
        </div>
    </div>
</template>


<script setup>


import Header from "@/Layouts/shared/Header.vue";
</script>
