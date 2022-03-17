<template>
    <div v-if="!isLoading">
        <!-- Headline -->
        <div class="my-5 flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">OT Levels</h2>
            <plus-button @click="addOTLevel"></plus-button>
        </div>
        
        <!-- Content -->
        <div class="w-full mb-8 overflow-hidden shadow-xs">
            <div class="w-full">
                <table class="w-full text-xs whitespace-no-wrap">
                <thead>
                    <tr class="text-xs tracking-wide text-center text-white border-b dark:border-gray-700 bg-emerald-500 dark:text-gray-200 dark:bg-green-500">
                    <th class="w-2/16 px-3 py-2">SL</th>
                    <th class="w-6/16 px-3 py-2">OT Level</th>
                    <th class="w-4/16 px-3 py-2">Hours</th>
                    <th class="w-4/16 px-3 py-2">Action</th>
                    </tr>
                </thead>

                <tbody v-if="otLevels.length > 0">
                    <tr v-for="(otLelvel,index) in otLevels" :key="index" class="text-xs text-gray-700 font-semibold tracking-wide border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                        <th class="border px-2 py-2 text-center">{{ index + 1 }}</th>
                        <th class="border px-2 py-2">{{ otLelvel.name }}</th>
                        <th class="border px-2 py-2">{{ otLelvel.hours }}</th>
                        <th class="border px-2 py-2">
                        <div class="flex space-x-1 justify-center">
                            <button class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100 hover:bg-blue-500 hover:text-white duration-300" @click.prevent="editOTLevel(otLelvel.id)">Edit
                            </button>
                            <button class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100 hover:bg-red-500 hover:text-white duration-300" @click.prevent="deleteOTLevel(otLelvel.id, index)">Delete</button>
                        </div>
                        </th>
                        </tr>
                </tbody>
                <tbody v-else>
                    <tr class="dark:text-gray-400">
                        <td colspan="9" class="text-lg text-center">Sorry, No data found !</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div v-if="isLoading" class="flex justify-center items-center h-[500px]">
        <img class="h-24 w-24" :src="loader" alt="Loader">
    </div>
</template>
<script scoped>

    import loader from '../../../assets/gifs/loader.gif'

    export default {
        data(){
            return {
                otLevels: [],
                isLoading: true,
                loader,
            }
        },

        methods: {
            getOTLevels(){
                axios.get('ot-levels')
                .then(response => {
                    this.isLoading = false
                    this.otLevels = response.data.otLevels
                })
                .catch(error => console.log(error))
            },
            addOTLevel(){
                window.location.href="/ot-levels/create"
            },
            editOTLevel(id){
                window.location.href="/ot-levels/"+id+"/edit"
            },
            deleteOTLevel(id, index){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.delete('ot-levels/'+id)
                        .then(response => {
                            if(response.data.success){
                                this.otLevels.splice(index, 1)
                                this.$messages.success('Deleted Successfully')
                            }
                        })
                        .catch(error => console.log(error))
                    }
                    
                })
            }
        },

        created() {
            this.getOTLevels()
        },

        mounted(){
            
        }
    }
</script>