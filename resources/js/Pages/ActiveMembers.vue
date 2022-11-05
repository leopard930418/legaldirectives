<template>
    <AuthenticatedLayout>
            <div>text</div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    name: 'ActiveMembers',
    components: {
        AuthenticatedLayout
    },
    setup() {
        return {
            AuthenticatedLayout
        }
    }
}
</script>

<style scoped>

</style>
