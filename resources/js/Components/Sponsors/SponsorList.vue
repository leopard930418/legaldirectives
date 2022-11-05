<template>
    <div class=" rounded-t-xl rounded-b-xl border border-darkburgundy overflow-y-auto">
        <div class="flex justify-between bg-darkburgundy text-white  py-2">
            <div class="flex items-center flex-[2] pl-6">
                Name
            </div>
            <div class="flex flex-[2] pl-6">
                Organization
            </div>
            <div class="flex flex-[2] pl-6">
                Last Login
            </div>

            <div class="flex flex-1 justify-center">
                Actions
            </div>
        </div>
        <ul class="no-scrollbar overflow-y-auto max-h-[600px]">
            <li v-for="(enrollment, enrollmentIdx) in enrollments"
                class="flex justify-between text-black  bg-white items-center h-11"
                :class="oddOrEven(enrollmentIdx)">
                <div class="h-full items-center flex flex-[2] border-r-[1px] border-burgundy pl-6">
                    1 Judd Ahrens
                </div>
                <div class="h-full items-center flex flex-[2] pl-6 border-r-[1px] border-burgundy">
                    Legal Directives Temp
                </div>
                <div class="h-full items-center flex flex-[2] pl-6 border-r-[1px] border-burgundy">
                    09/23/2022
                </div>

                <div class="flex justify-center flex-1 h-full w-full items-center">
                    <a href="">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5"
                                 stroke="#5A0000" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                            </svg>
                        </div>
                    </a>
                    <a href="">
                        <div class="ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 strokeWidth={1.5}
                                 stroke="#5A0000"
                                 class="w-6 h-6" width="20px" height="20px">
                                <path strokeLinecap="round" strokeLinejoin="round"
                                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <div>
        <div class="flex justify-between mt-8">
<!--            This alphabet search needs to be extracted and made into a component-->
            <div class="text-darkburgundy text-[24px]">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</div>
            <div>
                <Link :href="route('add-sponsor')">
                    <PrimaryButton type="submit"
                                   class="">
                        Add New Sponsor
                    </PrimaryButton>
                </Link>

            </div>
        </div>
        <hr class="border-burgundy mt-4">
    </div>

</template>

<script>
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue"
import {Link} from "@inertiajs/inertia-vue3";

const enrollments = [
    {
        number: '123456789'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },
    {
        number: '987654321'
    },


]
export default {
    name: "SponsorList",
    components: {Checkbox, PrimaryButton, Link},
    setup() {
        const oddOrEven = (idx) => {
            return idx % 2 === 0 ? '' : 'bg-[#EBEBEB]'
        }

        return {enrollments, oddOrEven, Checkbox, PrimaryButton, Link}
    }
}
</script>

<style scoped>

</style>
