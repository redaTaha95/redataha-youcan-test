<template>
    <div>
        <h2 class="text-center">Products List</h2>

<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Name</th>-->
<!--                <th>Description</th>-->
<!--                <th>price</th>-->
<!--                <th>Image</th>-->
<!--                &lt;!&ndash; <th>Actions</th> &ndash;&gt;-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr v-for="product in products" :key="product.id">-->
<!--                <td>{{ product.name }}</td>-->
<!--                <td>{{ product.description }}</td>-->
<!--                <td>{{ product.price }}</td>-->
<!--                <td><img v-bind:src="product.image" alt="" height="50"></td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->

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
    // export default {
    //     data() {
    //         return {
    //             products: []
    //         }
    //     },
    //     created() {
    //         this.axios
    //             .get('http://localhost:8000/api/products/')
    //             .then(response => {
    //                 this.products = response.data;
    //                 console.log(this.products);
    //             });
    //     }
    // }

    export default {
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
                .get('http://localhost:8000/api/products/')
                .then(response => {
                    this.data= response.data;
                    console.log(response.data);
                });
        }
    }
</script>
