<script setup>
import Modal from '@/Components/Modal.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email:"",
    password:"",
    remember:false
})

const LoginUser = () => {
    form.post(route('login.store'))
}
</script>
<template>
    <Modal class="bg-white max-w-md p-12">
        <h2 class="text-center text-2xl font-bold font-mono text-gray-900">Login</h2>
        <form class="mt-6 space-y-6" v-on:submit.prevent="LoginUser">
            <div>
                <label for="email" class="text-sm font-medium text-gray-900">Email</label>
                <div class="mt-2">
                    <input type="email" name="email" id="email" class="w-full py-2 text-gray-900 border-gray-300 text-sm" v-model="form.email">
                    <div v-if="form.errors.email" class="text-sm text-red-500 mt-2">{{ form.errors.email }}</div>
                </div>
            </div>
            <div>
                <label for="password" class="text-sm font-medium text-gray-900">Password</label>
                <div class="mt-2">
                    <input type="password" name="password" id="password" class="w-full py-2 text-gray-900 border-gray-300 text-sm" v-model="form.password">
                    <div v-if="form.errors.password" class="text-sm text-red-500 mt-2">{{ form.errors.password }}</div>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <input type="checkbox" name="remember" id="remember" class="h-4 w-4 text-blue-500 focus:ring-blue-500" v-model="form.remember">
                    <label for="remember" class="ml-3 block text-sm text-gray-900">Remember me</label>
                </div>
                <div>
                    Forgot password
                </div>
            </div>
            <div>
                <button type="submit" class="flex w-full justify-center bg-blue-500 px-3 py-2 text-sm font-semibold text-white disabled:opacity-50" :disabled="form.processing">
                    Sign in
                </button>
            </div>
        </form>
    </Modal>
</template>

