<template>
    <div v-if="!isLoading">
        <!-- Headline -->
        <div class="my-5 flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Shifts</h2>
            <plus-button @click="addShift"></plus-button>
        </div>
        
        <!-- Content -->
        <div class="w-full mb-8 overflow-hidden shadow-xs">
            <div class="w-full">
                <table class="w-full text-xs whitespace-no-wrap">
                <thead>
                    <tr class="text-xs tracking-wide text-center text-white border-b dark:border-gray-700 bg-emerald-500 dark:text-gray-200 dark:bg-green-500">
                    <th class="w-1/16 px-3 py-2">SL</th>
                    <th class="w-3/16 px-3 py-2">Shift Name</th>
                    <th class="w-2/16 px-3 py-2">Description</th>
                    <th class="w-1/16 px-3 py-2">Action</th>
                    </tr>
                </thead>

                <tbody v-if="shifts.length > 0">
                    <tr v-for="(shift,index) in shifts" :key="index" class="text-xs text-gray-700 font-semibold tracking-wide text-center border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="border px-2 py-2 text-center">{{ index + 1 }}</th>
                        <th class="border px-2 py-2">{{ shift.name }}</th>
                        <th class="border px-2 py-2">{{ shift.description }}</th>
                        <th class="border px-2 py-2">
                            <div class="flex space-x-1 justify-center">
                                <button class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100 hover:bg-blue-500 hover:text-white duration-300" @click.prevent="editShift(shift.id)">Edit
                                </button>
                                <button class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100 hover:bg-red-500 hover:text-white duration-300" @click.prevent="deleteShift(shift.id, index)">Delete</button>
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
                shifts: [],
                isLoading: true,
                loader,
            }
        },

        methods: {
            getShifts(){
                axios.get('shifts')
                .then(response => {
                    this.isLoading = false
                    this.shifts = response.data.shifts
                })
                .catch(error => console.log(error))
            },
            addShift(){
                window.location.href="/shifts/create"
            },
            editShift(id){
                window.location.href="/shifts/"+id+"/edit"
            },
            deleteShift(id, index){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.delete('shifts/'+id)
                        .then(response => {
                            if(response.data.success){
                                this.shifts.splice(index, 1)
                                this.$messages.success('Deleted Successfully')
                            }
                        })
                        .catch(error => console.log(error))
                    }
                    
                })
            }
        },

        created() {
            this.getShifts()
        },

        mounted(){
            
        }
    }
</script>