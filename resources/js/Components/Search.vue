<template>
    <div>
        <form @submit.prevent="submit">
            <div class="mb-4  w-full justify-center flex flex-col items-center">
                <div class="mt-6 flex flex-col w-full relative max-w-[480px] justify-center">
                    <input id="search" name="username" :placeholder="placeholder"
                           class="font-sans placeholder:text-black placeholder:text-lg self-center w-full text-black max-w-[480px] border border-burgundy  rounded-ld6 focus:border-none focus:shadow-outline outline-none px-3 pt-[.75rem] pb-[.5rem]"
                           type="text" autofocus/>
                    <div class="absolute right-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="#000" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Search",
    components: {},
    props: {
        placeholder: String
    }
}
</script>

<style scoped>

</style>

