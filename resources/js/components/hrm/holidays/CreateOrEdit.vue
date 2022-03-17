<template>
    <div v-if="!isLoading">
        <form @submit.prevent="editMode ? updateHoliday() : storeHoliday()">
        <div class="my-3 flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                <span v-show="!editMode">Create Holiday</span>
                <span v-show="editMode">Edit Holiday</span>
            </h2>
            <back-button></back-button>
        </div>
        
        <div class="grid grid-cols-4 gap-2 w-full px-2 py-3 mb-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="w-full block text-xs">
                <span class="mb-2 text-gray-700 dark:text-gray-400">Holiday Date <span class="text-red-500">*</span></span>
                <input type="date" 
                  class="w-full border-gray-200   rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                  placeholder="Date" v-model="holiday.date" required
                />
            </label>
            
            <label class="w-full block text-xs col-span-3">
                <span class="mb-2 text-gray-700 dark:text-gray-400">Description <span class="text-red-500">*</span></span>
                <input type="text" 
                  class="w-full border-gray-200   rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray "
                  placeholder="Description" v-model="holiday.description"
                />
            </label>
            
            
        </div>
        
        <div class="text-center">
            <button type="submit" class="my-3 w-full font-semibold btn-lg bg-emerald-500 hover:bg-blue-500 text-white text-base py-2 px-2 rounded duration-700">
                <span v-if="editMode">Update Information</span>
                <span v-else>Save Information</span>
            </button>
        </div>
    </form>
    </div>
    <div v-if="isLoading" class="flex justify-center items-center h-[500px]">
        <img class="h-24 w-24" :src="loader" alt="Loader">
    </div>
</template>
<script scoped>

    import loader from '../../../assets/gifs/loader.gif'

    export default {
        props: ["id"],
        data(){
            return {
                editMode: false,
                holiday: {
                    date: '',
                    description: ''
                },
                isLoading: true,
                loader,
            }
        },

        methods: {
            getHoliday(){
                axios.get('holidays/'+this.id)
                .then(response => {
                    this.isLoading = false
                    this.holiday = response.data.holiday
                })
                .catch(error => console.log(error))
            },
            
            updateHoliday(){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.put('holidays/'+this.id, this.holiday)
                        .then(response => {
                            if(response.data.success){
                                this.$messages.success('Updated Successfully')
                                window.location.href="/holidays"
                            }else{
                                this.$messages.error('Already Exists')
                            }
                        })
                        .catch(error => this.$messages.error('Already Exists'))
                    }
                    
                })
            },
            
            storeHoliday(){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.post('holidays', this.holiday)
                        .then(response => {
                            if(response.data.success){
                                this.$messages.success('Created Successfully')
                                window.location.href="/holidays"
                            }else{
                                this.$messages.error('Somthing went wrong')
                            }
                        })
                        .catch(error => this.$messages.error('Already Exists'))
                    }
                    
                })
            },
        },

        created() {
            if(this.id > 0){
                this.editMode = true
                this.getHoliday()
            }
        },

        mounted(){
            this.isLoading = false
        }
    }
</script>