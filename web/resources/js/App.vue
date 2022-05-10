<template>
    <div class="app">
        <Navbar></Navbar>
        <router-view></router-view>
    </div>
</template>

<script>
import Navbar from "./Components/Navbar.vue";
export default {
    name: "app",
    components: {
        Navbar,
    },
};
</script>
