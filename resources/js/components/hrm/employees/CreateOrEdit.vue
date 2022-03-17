<template>
    <div v-if="!isLoading">
        <form @submit.prevent="editMode ? updateEmployee() : storeEmployee()">
        <div class="my-3 flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">
                <span v-show="!editMode">Create Employee</span>
                <span v-show="editMode">Edit Employee</span>
            </h2>
            <back-button></back-button>
        </div>
        
        <div class="grid grid-cols-3 gap-2 w-full px-2 py-3 mb-3 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="w-full block text-xs">
                <span class="mb-2 text-gray-700 dark:text-gray-400">Employee Name <span class="text-red-500">*</span></span>
                <input type="text" 
                  class="w-full border-gray-200   rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                  placeholder="Name" v-model="employee.name" required
                />
            </label>
            
            <label class="w-full block text-xs">
                <span class="mb-2 text-gray-700 dark:text-gray-400">Designation <span class="text-red-500">*</span></span>
                <select class="w-full border-gray-200   rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                  placeholder="Customer Name" v-model="employee.designation_id" required>
                    <option value="" selected>Select</option>
                    <option v-for="designation in designations" :value="designation.id" :key="designation.id" >{{ designation.name }}</option>
                </select>
            </label>
            
            <label class="w-full block text-xs">
                <span class="mb-2 text-gray-700 dark:text-gray-400">Phone</span>
                <input type="text" 
                  class="w-full border-gray-200   rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                  placeholder="Phone" v-model="employee.phone"
                />
            </label>

            <label class="w-full block text-xs">
                <span class="mb-2 text-gray-700 dark:text-gray-400">Email</span>
                <input type="email" 
                  class="w-full border-gray-200   rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                  placeholder="Email" v-model="employee.email"
                />
            </label>

            <label class="w-full block text-xs">
                <span class="mb-2 text-gray-700 dark:text-gray-400">Address</span>
                <input type="text" 
                  class="w-full border-gray-200   rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                  placeholder="Address" v-model="employee.address"
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
                employee: {
                    name: '',
                    designation_id: ''
                },
                isLoading: true,
                designations: [],
                loader,
            }
        },

        methods: {
            getEmployee(){
                axios.get('employees/'+this.id)
                .then(response => {
                    this.isLoading = false
                    this.employee = response.data.employee
                })
                .catch(error => console.log(error))
            },
            getDesignations(){
                axios.get('designations')
                .then(response => {
                    this.isLoading = false
                    this.designations = response.data.designations
                })
                .catch(error => console.log(error))
            },
            
            updateEmployee(){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.put('employees/'+this.id, this.employee)
                        .then(response => {
                            if(response.data.success){
                                this.$messages.success('Updated Successfully')
                                window.location.href="/employees"
                            }
                        })
                        .catch(error => console.log(error))
                    }
                    
                })
            },
            
            storeEmployee(){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.post('employees', this.employee)
                        .then(response => {
                            if(response.data.success){
                                this.$messages.success('Created Successfully')
                                window.location.href="/employees"
                            }
                        })
                        .catch(error => console.log(error))
                    }
                    
                })
            },
        },

        created() {
            if(this.id > 0){
                this.editMode = true
                this.getEmployee()
            }
            this.getDesignations()
        },

        mounted(){
        }
    }
</script>