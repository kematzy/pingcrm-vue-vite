<template>
  <div>
    <h1 class="mb-8 text-3xl font-bold">Dashboard</h1>
    <p class="mb-4 leading-normal">Hey there! Welcome to Ping CRM, a demo app designed to help illustrate how <a class="text-indigo-500 underline hover:text-orange-600" href="https://inertiajs.com">Inertia.js</a> works.</p>

    <p class="mb-8 leading-normal">This is a fork of <a href="https://github.com/inertiajs/pingcrm" target="_blank" title="a fork of Inertia JS's PingCRM app" class="text-indigo-500 underline hover:text-orange-600">Ping CRM</a> app created by Inertia.js with <a href="https://vitejs.dev/" title="more information about ViteJS" target="_blank" class="text-indigo-500 underline hover:text-orange-600">Vite</a> support instead of Webpack / Mix.</p>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout.vue'

export default {
  metaInfo: { title: 'Dashboard' },
  layout: Layout,
}
</script>
