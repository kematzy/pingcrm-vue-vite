<template>
  <div class="p-6 bg-indigo-800 min-h-screen flex justify-center items-center">
    <div class="w-full max-w-md">
      <logo class="block mx-auto w-full max-w-xs fill-white" height="50" />
      <form class="mt-8 bg-white rounded-lg shadow-xl overflow-hidden" @submit.prevent="login">
        <div class="px-10 py-12">
          <h3 class="mt-2 text-xl font-bold text-center text-indigo-500">Vue2 &amp; Vite</h3>
          <text-input v-model="form.email" :error="form.errors.email" class="mt-10" label="Email" type="email" autofocus autocapitalize="off" />
          <text-input v-model="form.password" :error="form.errors.password" class="mt-6" label="Password" type="password" />
          <label class="mt-6 select-none flex items-center" for="remember">
            <input id="remember" v-model="form.remember" class="mr-1" type="checkbox" />
            <span class="text-sm">Remember Me</span>
          </label>
        </div>
        <div class="px-10 py-4 bg-gray-100 border-t border-gray-100 flex">
          <loading-button :loading="form.processing" class="ml-auto btn-indigo" type="submit">Login</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Logo from '@/Shared/Logo.vue'
import TextInput from '@/Shared/TextInput.vue'
import LoadingButton from '@/Shared/LoadingButton.vue'

export default {
  metaInfo: { title: 'Login' },
  components: {
    LoadingButton,
    Logo,
    TextInput,
  },
  data() {
    return {
      form: this.$inertia.form({
        email: 'johndoe@example.com',
        password: 'secret',
        remember: false,
      }),
    }
  },
  methods: {
    login() {
      this.form.post(this.route('login.store'))
    },
  },
}
</script>
