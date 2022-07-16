<template>
    <div>
        <h2 class="text-center">Products List</h2>

        <select @change="onChange($event)" class="form-control" v-model="key">
            <option value="1">Annual Leave/ Off-Day</option>
            <option value="2">On Demand Leave</option>
        </select>

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
