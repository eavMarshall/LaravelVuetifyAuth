<template>
  <div>
    <p>Settings</p>
    <v-switch v-model="$vuetify.theme.dark" :label="`Dark mode: ${$vuetify.theme.dark.toString()}`"></v-switch>
    <v-btn depressed color="error" href="/auth/logout">Logout</v-btn>
  </div>
</template>

<script>
export default {
  name: "Settings",
}
</script>

<style scoped>

</style>
