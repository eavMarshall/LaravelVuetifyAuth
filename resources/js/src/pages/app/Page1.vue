<template>
  <div>
    <p>Page1</p>
    <p>Width: {{pageData.width}}, Height: {{pageData.height}}</p>
    <img alt="Vue logo" :src="require('@/assets/logo.png')"/>
    <HelloWorld></HelloWorld>
  </div>
</template>

<script>
import HelloWorld from "@/components/HelloWorld";

export default {
  name: "Page1",
  components: {
    HelloWorld
  },
  computed: {
    pageData() { return this.$store.state.Page.pageData; },
  }
}
</script>

<style scoped>

</style>
