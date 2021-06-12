<template>
  <div class="container">
    <Left />
    <Right />
    <!-- <img :src="'../images/demo.png'" alt="image" /> -->
  </div>
</template>

<script>
import Left from "./Left.vue";
import Right from "./Right.vue";
export default {
  components: {
    Left,
    Right,
  },
  mounted() {
    console.log("App component MOUNTED");
  },
};
</script>

<style>
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #01081c;
  font-family: "Lato", sans-serif;
  /* min-height: 100vh; */
}

.container {
  padding: 20px;
  display: flex;
  justify-content: space-between;
  /* min-height: 100vh; */
}
</style>
