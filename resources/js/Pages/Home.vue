<template>
    <Head title="Home"/>

    <AuthenticatedLayout>
        <div class="w-full flex justify-start flex-col items-center">
            <Alert/>
            <div class="mt-[100px]">
                <img src="/images/large-logo.png" class="" alt="Legal Directives Logo">
                <Search placeholder="Search Members"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import Alert from "@/Components/Alert.vue";
import Search from "@/Components/Search.vue";
import Head from '@inertiajs/inertia-vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";


export default {
    name: 'Home',
    props: {},
    components: {
        AuthenticatedLayout, Alert, Search, Head
    },
    setup() {

        return {
            AuthenticatedLayout, Alert, Search, Head
        }
    }
}
</script>
