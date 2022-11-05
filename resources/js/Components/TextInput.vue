<script setup>
import {onMounted, ref} from 'vue';

defineProps(['modelValue']);

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});
</script>

<template>
    <input
        class="font-sans placeholder:text-black placeholder:text-lg self-center w-full text-black border border-burgundy  rounded-ld6  focus:shadow-outline outline-none px-3 pt-[.75rem] pb-[.5rem]"
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
</template>
