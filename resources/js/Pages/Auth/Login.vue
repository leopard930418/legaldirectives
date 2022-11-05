

<template>
    <GuestLayout>
        <Head title="Log in"/>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div class="mb-4 px-2 w-full justify-center flex flex-col">
                <div class="mt-6 flex flex-col w-full">
                    <InputLabel for="username"
                                class="self-center w-full block mb-1 text-sm text-darkburgundy font-sans max-w-[531px]"
                                value="Username"/>
                    <TextInput id="username" type="username"
                               class="self-center w-full text-black max-w-[531px] border border-darkburgundy px-4 py-2 rounded-ld6 focus:border-darkburgundy focus:shadow-outline outline-none"
                               v-model="form.username" required autofocus
                               autocomplete="username"/>
                    <InputError class="mt-2" :message="form.errors.username"/>
                </div>

                <div class="mt-3 flex flex-col w-full">
                    <InputLabel for="password" value="Password" class="self-center  max-w-[531px] w-full block mb-1 text-sm text-darkburgundy font-sans"/>
                    <TextInput id="password" type="password" class="self-center w-full  max-w-[531px] text-black w-full border border-darkburgundy px-4 py-2 rounded-ld6 focus:border-darkburgundy focus:shadow-outline outline-none" v-model="form.password" required
                               autocomplete="current-password"/>
                    <InputError class="mt-2" :message="form.errors.password"/>
                </div>
                <PrimaryButton
                    class="mx-2 px-2 py-1 mt-9 rounded-ld6 text-white bg-burgundy focus:outline-none hover:bg-darkburgundy w-ldbutton h-ldbutton self-center shadow-ldbutton font-sans font-bold tracking-ldbutton text-ldbutton">
                    Log In
                </PrimaryButton>
<!--                <div class="block mt-4">-->
<!--                    <label class="flex items-center">-->
<!--                        <Checkbox name="remember" v-model:checked="form.remember"/>-->
<!--                        <span class="ml-2 text-sm text-gray-600">Remember me</span>-->
<!--                    </label>-->
<!--                </div>-->

<!--                <div class="flex items-center justify-end mt-4">-->
<!--                    <Link v-if="canResetPassword" :href="route('password.request')"-->
<!--                          class="underline text-sm text-gray-600 hover:text-gray-900">-->
<!--                        Forgot your password?-->
<!--                    </Link>-->

<!--                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">-->
<!--                        Log in-->
<!--                    </PrimaryButton>-->
<!--                </div>-->
            </div>
        </form>
    </GuestLayout>
</template>

<script >
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

export default {
    props: {
        canResetPassword: Boolean,
        status: String,
    },
    components: {
        GuestLayout, InputError, InputLabel, PrimaryButton, TextInput, Head, Link
    },
    setup()
    {
        const form = useForm({
            username: '',
            password: '',
            remember: false
        });

        const submit = () => {
            form.post(route('login'), {
                onFinish: () => form.reset('password'),
            });
        };

        return { form, submit, GuestLayout, InputError, InputLabel, PrimaryButton, TextInput, Head, Link }
    }
}

</script>

