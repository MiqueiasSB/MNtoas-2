<script setup lang="ts">
import { onMounted } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import AppLogoIcon from '@/components/AppLogoIcon.vue';

const page = usePage();
const name = page.props.name;
const quote = page.props.quote;

defineProps<{
  title?: string;
  description?: string;
}>();


</script>

<template>
  <div class="relative h-screen w-screen flex items-center justify-center bg-accent sm:p-12">
    <!-- Card principal -->
    <div class="relative z-10 grid w-full h-full grid-cols-1 gap-4 overflow-hidden rounded-2xl bg-white shadow-xl lg:grid-cols-2">

      <!-- Lado do formulário -->
      <div class="flex flex-col justify-center space-y-6">
        <div class="text-center">
          <AppLogoIcon class="mx-auto mb-4 size-20 fill-current" />
          <h1 class="text-xl font-semibold tracking-tight text-zinc-900" v-if="title">{{ title }}</h1>
          <p class="text-sm text-zinc-500" v-if="description">{{ description }}</p>
        </div>
        <div class="px-4">
          <div class="w-full sm:w-2/3 md:w-1/2 lg:w-1/2 mx-auto p-6 rounded-lg">
            <slot />
          </div>
        </div>
      </div>

      <!-- Lado do fundo com frase -->
      <div class="relative hidden lg:flex flex-col justify-between p-8 bg-zinc-900 text-white">
        <div>
          <Link :href="route('home')" class="flex items-center text-lg font-medium">
            <AppLogoIcon class="mr-2 size-8 fill-current" />
            <b>{{ name }}</b>
          </Link>
        </div>
        <div v-if="quote" class="mt-auto">
          <blockquote class="space-y-2">
            <p class="text-lg leading-relaxed text-zinc-100">
              &ldquo;Cada gasto esquecido é um passo no escuro.<br />Anotar é acender a luz do equilíbrio.&rdquo;
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</template>
