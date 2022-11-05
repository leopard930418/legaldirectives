<script setup>
defineProps(['value']);
</script>

<template>
    <label class="block text-sm font-medium sm:mt-px sm:pt-2 text-burgundy">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
