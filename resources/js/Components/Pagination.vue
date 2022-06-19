<template>
    <ul class="flex list-reset border border-grey-light rounded w-auto font-sans">
        <li v-if="pagination.current_page > 1" class="shadow-lg bg-white border px-8 py-4">
            <a class="block hover:text-blue hover:bg-blue text-black px-3 py-2"
               href="#"
               @click.prevent="change(pagination.current_page -1)"
            >
                Previous
            </a>
        </li>
        <li v-for="page in pages" :key="page" class="shadow-lg bg-white border px-8 py-4">
            <a :class="[page === pagination.current_page ? 'text-blue bg-white':'hover:text-blue hover:bg-blue text-black', 'block px-3 py-2']"
               href="#"
               @click.stop="change(page)"
            >
                {{ page }}
            </a>
        </li>
        <li v-if="pagination.current_page < pagination.last_page" class="shadow-lg bg-white border px-8 py-4">
            <a class="block hover:text-blue hover:bg-blue text-black px-3 py-2"
               href="#"
               @click.prevent="change(pagination.current_page + 1)"
            >
                Next
            </a>
        </li>
    </ul>
</template>

<script>
    export default {
        name: 'Pagination',
        props: {
            pagination: {
                type: Object,
                required: true
            },
            offset: {
                type: Number,
                default: 4
            }
        },
        computed: {
            pages() {
                if (!this.pagination.to) {
                    return null;
                }
                let from = this.pagination.current_page - this.offset;
                if (from < 1) {
                    from = 1;
                }
                let to = from + (this.offset * 2);
                if (to >= this.pagination.last_page) {
                    to = this.pagination.last_page;
                }
                let pages = [];
                for (let page = from; page <= to; page++) {
                    pages.push(page);
                }
                return pages;
            },
        },
        methods: {
            change: function(page) {
                this.pagination.current_page = page;
                this.$emit('paginate', page);
            }
        }
    }
</script>

<style scoped>
    .text-blue{
        color: #5454ef;
    }
</style>
