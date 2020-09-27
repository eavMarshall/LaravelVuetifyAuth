<template>
  <div>
    <p>Page3</p>
    <img alt="Vue logo" :src="require('@/assets/logo.png')"/>
    <HelloWorld></HelloWorld>
  </div>
</template>

<script>
import HelloWorld from "@/components/HelloWorld";

export default {
  name: "Page3",
  components: {
    HelloWorld
  },
}
</script>

<style scoped>

</style>
