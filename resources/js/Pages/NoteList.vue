<template>
    <div class="home">
        <h2 class="text-center title">
            Notes list
        </h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-lg bg-white mb-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-weight-bold">
            <tr>
                <th class="bg-blue-100 border text-left px-8 py-4">Resource type</th>
                <th class="bg-blue-100 border text-left px-8 py-4">resource Id</th>
                <th class="bg-blue-100 border text-left px-8 py-4">content</th>
            </tr>
            </thead>
            <tbody id="note_list">
            <tr v-for="(note, index) in notes">
                <td class="border px-8 py-4">{{ note.resource_type }}</td>
                <td class="border px-8 py-4">{{ note.resource_id }}</td>
                <td class="border px-8 py-4">{{ note.content }}</td>
            </tr>
            </tbody>
        </table>
        <Pagination v-if="pagination" :pagination="pagination" @paginate="getNotes" :offset="1"></Pagination>
    </div>
</template>

<script>
    import Pagination from "../Components/Pagination"
    export default {
        name: 'NoteList',
        components:{
            Pagination
        },
        data(){
            return {
                notes: [],
                pagination: null,
            }
        },
        mounted()
        {
            this.getNotes();
        },
        methods: {
            getNotes(page) {
                if (typeof page === "undefined") {
                    page = 1;
                }
                axios.get('/api/notes?page='+page)
                    .then(response => {
                        this.pagination = response.data
                        this.notes = response.data.data;
                    });
            }
        }

    }
</script>

<style scoped>
.title{
    font-size: 3em;
}
</style>
