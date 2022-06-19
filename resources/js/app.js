/*
    Load all components
 */
window.axios = require('axios');
import { createApp } from 'vue';
import App from './App.vue';
createApp(App).mount("#app");
createApp(App).component('NoteList', require('./Pages/NoteList'));
createApp(App).component('NoteList', require('./Components/Pagination'));
