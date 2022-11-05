<template>
    <Header/>
    <!-- Page Content -->
    <main class="flex h-full" :class="showBg()">
        <Nav/>
        <div class="w-full flex justify-center">
            <slot>
            </slot>
        </div>

    </main>
</template>

<script>
import {ref} from 'vue';

import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/inertia-vue3';
import Header from "@/Layouts/shared/Header.vue";
import Nav from "@/Layouts/shared/Nav.vue";
import {usePage} from "@inertiajs/inertia-vue3";

// const showingNavigationDropdown = ref(false);

export default {
    name: 'AuthenticatedLayout',
    components: {NavLink, ResponsiveNavLink, Link, Header, Nav},
    props: {},
    setup() {
        const currentPage = usePage().props.value.ziggy
        const showBg = () => {
            let path
            currentPage.path === '/' ? path = 'bg-logo' : ''

            return path
        }

        return {
            NavLink, ResponsiveNavLink, Link, Header, Nav, currentPage, showBg
        }
    }
}
</script>
