<template>
    <div>
        <h2 class="text-center">Products List</h2>

        <categories></categories>

        <v-data-table
            :headers="headers"
            :items="data"
            :items-per-page="5"
            class="elevation-1"
        >
            <template v-slot:item.image="{ item }">
                <img :src="item.image" style="width: 50px; height: 50px" />
            </template>
        </v-data-table>
    </div>
</template>

<script>
    import Category from '../categories/index'

    export default {
        components: {
            'categories': Category
        },
        data () {
            return {
                headers: [
                    {
                        text: 'Name',
                        align: 'start',
                        sortable: false,
                        value: 'name',
                    },
                    {
                        text: 'Description',
                        value: 'description',
                        sortable: false
                    },
                    {
                        text: 'Price',
                        value: 'price'
                    },
                    {
                        text: 'Image',
                        value: 'image',
                        sortable: false
                    },
                ],
                data: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/productsByCategory/' + this.$route.params.category_id)
                .then(response => {
                    this.data= response.data;
                    console.log(response.data);
                });
        }
    }
</script>
