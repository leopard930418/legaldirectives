<template>
    <Head title="Sponsors"/>
    <AuthenticatedLayout>
        <div class="w-full flex w-full mt-6 justify-start items-center flex-col max-w-[90%]">
            <div class="flex flex-col w-full">
                <h1 class="text-[36px] text-darkburgundy tracking-[1.62px]">Sponsors</h1>
                <hr class=" border-burgundy">
            </div>
            <div class="flex justify-between items-center w-full mt-[-10px]">
                <p class="text-[24px] text-darkburgundy tracking-[1.08px]">Total Sponsors: 529</p>
                <Search placeholder="Search Sponsors" class="w-[400px] py-0" />
            </div>
            <div class="w-full">
                <SponsorList />
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import Head from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Search from "@/Components/Search.vue";
import SponsorList from "@/Components/Sponsors/SponsorList.vue";

export default {
    name: 'Sponsors',
    props: {},
    components: {
        AuthenticatedLayout, Head, Search, SponsorList
    },
    setup() {
        return {
            AuthenticatedLayout, Head, Search, SponsorList
        }
    }
}
</script>
