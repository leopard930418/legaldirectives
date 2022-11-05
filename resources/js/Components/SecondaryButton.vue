<template>
    <button :type="type"
            class="px-2 pt-1 rounded-ld6 bg-white focus:outline-none  hover:bg-gray-100 h-[33px] self-center border-[1px] border-black font-sans font-bold tracking-ldbutton text-ldbutton">
        <slot/>
    </button>
</template>

<script>
export default {
    name: 'SecondaryButton',
    props: {
        type: String,
    }
}
</script>
