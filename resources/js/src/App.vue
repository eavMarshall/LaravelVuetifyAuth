<template>
  <div>
    <MenuToolBar v-if="isAuth"></MenuToolBar>
    <Login v-else></Login>
  </div>
</template>

<script>
import '@/sass/main.scss';
import MenuToolBar from "@/MenuToolBar";
import Login from "@/pages/app/Login";

export default {
  name: "App",
  components: {Login, MenuToolBar},

  computed: {
    User () {
      return this.$store.state.User.user
    },
    isAuth(){ return this.$store.state.User.user.getId() ? true : false}
  }
}
</script>

<style scoped style="scss">

</style>
