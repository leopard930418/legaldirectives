<template>
    <nav class="inline-flex flex-1 w-full">
        <ul class="bg-lighterred"><!---->
            <li v-for="(page, index) in pages" :key="index" class="font-sans pt-[20px]">
                <div class="min-w-[200px] flex justify-center">
                    <div class="w-[150px] flex flex-col items-center">
                        <div v-if="page.dropdown"
                            :key="page.title" class="flex text-darkerburgundy self-start pl-[10px] cursor-pointer"
                            @click="toggleDropdown()">{{ page.title }}
                        </div>
                        <Link v-else
                              :href="route(page.href)"
                              :key="page.title" class="flex text-darkerburgundy self-start pl-[10px]"
                             >{{ page.title }}
                        </Link>
                        <div v-if="page.dropdown && expand">
                            <ul>
                                <li v-for="(p, index) in page.subpages" :key="index">
                                    <a :href="p.href" :key="p.title"
                                       class="flex text-darkerburgundy self-start pl-[10px] py-1.5">{{ p.title }}</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="mt-[15px] border-burgundy w-[150px]">
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</template>

<script>
import {ref} from "vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    name: "Nav",
    props: {},
    components: {Link},
    setup() {

        const pages = [
            {
                title: 'Add New Member',
                href: 'sponsors',
            },
            {
                title: 'Active Members',
                href: 'active-members',
            },
            {
                title: 'Inactive Members',
                href: 'sponsors',
            },
            {
                title: 'Sponsors',
                href: 'sponsors',
            },
            {
                title: 'Billing',
                href: 'sponsors',
            },
            {
                title: 'Cards',
                href: 'sponsors',
            },
            {
                title: 'Reports',
                href: 'sponsors',
            },
            {
                title: 'Sponsor Renewals',
                href: 'sponsors',
            },
            {
                title: 'Renewal Letters',
                href: 'sponsors',
            },
            {
                title: 'Settings',
                href: '',
                dropdown: true,
                subpages: [
                    {
                        title: 'Service Plans',
                        href: 'sponsors'
                    },
                    {
                        title: 'Document Types',
                        href: 'sponsors'
                    },
                    {
                        title: 'Nonprofit Signup',
                        href: 'sponsors'
                    }
                ]
            },
        ]

        const expand = ref(false)

        const toggleDropdown = () => {
            expand.value = !expand.value
        }

        return {
            pages, toggleDropdown, expand, Link
        }
    },
}


</script>

<style scoped>

</style>
