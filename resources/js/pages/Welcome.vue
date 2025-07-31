<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="flex min-h-screen flex-col items-center lg:justify-center lg:p-8">

        <a :href="route('login')" class="btn btn-primary">Entrar</a>
        <a :href="route('register')" class="btn btn-outline btn-primary">Cadastrar-se</a>
        <a :href="route('dashboard')" class="btn btn-secondary">Painel</a>

    </div>
</template>
