<template>
    <div class="app">
        <router-view></router-view>
        <NoteList></NoteList>
    </div>
</template>

<script>
import NoteList from "./Pages/NoteList";
export default {
    name: 'App',
    components:{
        NoteList,
    }
}
</script>

<style scoped>

</style>
