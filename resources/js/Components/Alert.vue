<template>
    <div class="w-full max-w-[90%] max-h-[162px] mt-6 rounded border border-lightred  overflow-y-auto no-scrollbar">
        <div class="flex justify-between bg-mediumred to-darkburgundy text-white px-5 py-2">
            <div class="font-sans flex items-center">
                Incomplete Enrollments
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                </svg>
            </div>
        </div>
        <ul>
            <li v-for="(enrollment, enrollmentIdx) in enrollments"
                class="flex justify-between text-black px-7 py-2 bg-white items-center"
                :class="oddOrEven(enrollmentIdx)">
                <p class="font-sans flex items-center mb-[-5px]">
                    {{ enrollment.number }}
                </p>
                <div class="flex items-center">
                    <a href="">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="#5A0000" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                            </svg>
                        </div>
                    </a>
                    <a href="">
                        <div class="ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
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
</template>

<script>
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


]

export default {
    name: "Alert",
    components: {},
    props: {},
    setup() {

        const oddOrEven = (idx) => {
            return idx % 2 === 0 ? '' : 'bg-[#EBEBEB]'
        }

        return {enrollments, oddOrEven}
    },
}
</script>

<style scoped>

</style>
