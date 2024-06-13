<template>
  <div>
    <nav-top></nav-top>
    <div class="container">
      <router-view />
    </div>
  </div>
</template>

<script>

import NavTop from './components/NavTop.vue'

export default {
      components: {
        NavTop
      }
  }

</script>

<style>
  body {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }

  .container {
    justify-content: space-around;
    margin: 25px;
  }
</style>
