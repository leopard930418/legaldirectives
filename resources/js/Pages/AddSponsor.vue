<template>
    <Head title="Sponsors"/>
    <AuthenticatedLayout>
        <div class="w-full flex w-full mt-6 justify-start items-center flex-col max-w-[90%]">
            <div class="flex flex-col w-full border-b-[1px] border-burgundy">
                <h1 class="text-[36px] text-darkburgundy tracking-[1.62px]">Sponsors</h1>
            </div>
            <div class="flex justify-between items-center w-full mt-2">
                <p class="text-[24px] text-darkburgundy tracking-[1.08px]">Create New Sponsor</p>
            </div>
            <div class="w-full">
                <CreateSponsorForm/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import Head from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Search from "@/Components/Search.vue";
import SponsorList from "@/Components/Sponsors/SponsorList.vue";
import CreateSponsorForm from "@/Components/Sponsors/CreateSponsorForm.vue";

export default {
    name: 'Sponsors',
    props: {},
    components: {
        AuthenticatedLayout, Head, Search, SponsorList, CreateSponsorForm
    },
    setup() {
        return {
            AuthenticatedLayout, Head, Search, SponsorList
        }
    }
}
</script>
