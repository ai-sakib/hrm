<template>
    <div v-if="!isLoading">
        <!-- Headline -->
        <div class="my-5 flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Employees</h2>
            <plus-button @click="addEmployee"></plus-button>
        </div>
        
        <!-- Content -->
        <div class="w-full mb-8 overflow-hidden shadow-xs">
            <div class="w-full">
                <table class="w-full text-xs whitespace-no-wrap">
                <thead>
                    <tr class="text-xs tracking-wide text-center text-white border-b dark:border-gray-700 bg-emerald-500 dark:text-gray-200 dark:bg-green-500">
                    <th class="w-1/16 px-3 py-2">SL</th>
                    <th class="w-3/16 px-3 py-2">Employee Name</th>
                    <th class="w-2/16 px-3 py-2">Designation</th>
                    <th class="w-3/16 px-3 py-2">Email</th>
                    <th class="w-2/16 px-3 py-2">Phone</th>
                    <th class="w-4/16 px-3 py-2">Address</th>
                    <th class="w-1/16 px-3 py-2">Action</th>
                    </tr>
                </thead>

                <tbody v-if="employees.length > 0">
                    <tr v-for="(employee,index) in employees" :key="index" class="text-xs text-gray-700 font-semibold tracking-wide text-left border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="border px-2 py-2 text-center">{{ index + 1 }}</th>
                        <th class="border px-2 py-2">{{ employee.name }}</th>
                        <th class="border px-2 py-2">{{ employee.designation?.name }}</th>
                        <th class="border px-2 py-2">{{ employee.email }}</th>
                        <th class="border px-2 py-2">{{ employee.phone }}</th>
                        <th class="border px-2 py-2" style="max-width: 200px">{{ $filters.textShort(employee.address, 25, '...') }}</th>
                        <th class="border px-2 py-2">
                        <div class="flex space-x-1 justify-center">
                            <button class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100 hover:bg-blue-500 hover:text-white duration-300" @click.prevent="editEmployee(employee.id)">Edit
                            </button>
                            <button class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100 hover:bg-red-500 hover:text-white duration-300" @click.prevent="deleteEmployee(employee.id, index)">Delete</button>
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
                employees: [],
                isLoading: true,
                loader,
            }
        },

        methods: {
            getEmployees(){
                axios.get('employees')
                .then(response => {
                    this.isLoading = false
                    this.employees = response.data.employees
                })
                .catch(error => console.log(error))
            },
            addEmployee(){
                window.location.href="/employees/create"
            },
            editEmployee(id){
                window.location.href="/employees/"+id+"/edit"
            },
            deleteEmployee(id, index){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.delete('employees/'+id)
                        .then(response => {
                            if(response.data.success){
                                this.employees.splice(index, 1)
                                this.$messages.success('Deleted Successfully')
                            }
                        })
                        .catch(error => console.log(error))
                    }
                    
                })
            }
        },

        created() {
            this.getEmployees()
        },

        mounted(){
            
        }
    }
</script>