<template>
    <button :type="type"
            class="px-2 py-1 rounded-ld6 text-white bg-burgundy focus:outline-none focus:bg-darkburgundy hover:bg-darkburgundy w-ldbutton h-ldbutton self-center shadow-ldbutton font-sans font-bold tracking-ldbutton text-ldbutton">
        <slot/>
    </button>
</template>


<script>
export default {
    name: 'PrimaryButton',
    props: {
        type: String,
    }
}
</script>
