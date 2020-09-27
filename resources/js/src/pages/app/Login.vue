<template>
  <div>
    <div>Login page</div>
    <GoogleLoginButton></GoogleLoginButton>
  </div>
</template>

<script>
import GoogleLoginButton from "@/components/GoogleLoginButton";
export default {
name: "Login",
  components: {GoogleLoginButton}
}
</script>

<style scoped>

</style>
