<template>
    <div class="navBar">
        <ul class="navBar__link">
            <li>
                <router-link :to="{ name: 'home' }">Home</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'about' }">About</router-link>
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name: "navbar",
};
</script>
