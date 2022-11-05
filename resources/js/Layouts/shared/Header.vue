<template>
    <header
        class="header flex px-5 items-center justify-between h-[60px] bg-gradient-to-r from-mediumred to-darkburgundy">
        <a :href="route('dashboard')">
            <div class="h-full flex items-center justify-between  border-gray-100 py-6 md:justify-start md:space-x-10">
                <img src="/images/header-logo.png" alt="Legal Directives Logo">
            </div>
        </a>
        <div class="hidden sm:ml-6 sm:flex sm:items-center z-10">

            <Menu  v-if="user" as="div" class="ml-3 relative">
                <div>
                    <MenuButton
                        class="flex text-sm ">
                        <div class="flex items-center justify-center flex-col">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#fff"
                                 class="w-[28px] h-[28px]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div class="text-white text-[12px] font-sans">Member</div>
                        </div>
                    </MenuButton>
                </div>
                <transition enter-active-class="transition ease-out duration-200"
                            enter-from-class="transform opacity-0 scale-95"
                            enter-to-class="transform opacity-100 scale-100"
                            leave-active-class="transition ease-in duration-75"
                            leave-from-class="transform opacity-100 scale-100"
                            leave-to-class="transform opacity-0 scale-95">
                    <MenuItems
                        class="divide-y divide-gray-200 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div>
                            <div class="w-full text-left block px-4 pt-2 text-sm text-burgundy font-bold">Admin</div>
                        </div>
                        <div>
                            <MenuItem as="div" v-slot="{ active }">
                                <Link :href="route('logout')" method="POST" as="button"
                                      :class="[active ? 'bg-gray-100' : '', 'w-full text-left block px-4 py-2 text-sm text-black']">
                                    Log
                                    out
                                </Link>
                            </MenuItem>
                        </div>
                    </MenuItems>
                </transition>
            </Menu>
        </div>
    </header>
</template>

<script>
import {Menu, MenuButton, MenuItems, MenuItem} from '@headlessui/vue'
import {Link} from "@inertiajs/inertia-vue3";
import { usePage } from "@inertiajs/inertia-vue3";

export default {
    name: "Header",
    components: {
        Menu, MenuButton, MenuItems, MenuItem, Link
    },
    setup() {
        const user = usePage().props.value.auth.user

        return {user};
    }
}
</script>

<style scoped>

</style>
