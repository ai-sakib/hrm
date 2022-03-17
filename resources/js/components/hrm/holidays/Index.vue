<template>
    <div v-if="!isLoading">
        <!-- Headline -->
        <div class="my-5 flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Holidays</h2>
            <plus-button @click="addHoliday"></plus-button>
        </div>
        
        <!-- Content -->
        <div class="w-full mb-8 overflow-hidden shadow-xs">
            <div class="grid grid-cols-2 gap-12">
                <div v-for="(months, month) in holidays" :key="month" class="w-full">
                    <div class="my-1 text-center font-semibold text-base">
                        <!-- {{ $filters.monthFormat(month) }} -->
                        {{ month }}
                    </div>
                    <table class="w-full text-sm whitespace-no-wrap">
                      <thead>
                        <tr class="text-sm tracking-wide text-center text-white uppercase border-b dark:border-gray-700 bg-emerald-500 dark:text-gray-200 dark:bg-emerald-500">
                          <th class="w-2/16 px-3 py-1">SL</th>
                          <th class="w-3/16 px-3 py-1">Date</th>
                          <th class="w-6/16 px-3 py-1">Description</th>
                          <th class="w-3/16 px-3 py-1">Day</th>
                          <th class="w-2/16 px-3 py-1">Action</th>
                        </tr>
                      </thead>
                      <tbody v-if="months.length > 0">
                          <tr v-for="(holiday, index) in months" :key="index" class="text-gray-700 text-xs tracking-wide border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800 text-center">
                            <th class="border px-3 py-1">{{ index + 1 }}</th>
                            
                            <th class="border px-3 py-1">{{ $filters.dateTime(holiday.date) }}</th>
                            <th class="border px-3 py-1">{{ holiday.description }}</th>
                            <th class="border px-3 py-1">{{ $filters.getDayName(holiday.date) }}</th>
                            <th class="border px-3 py-1">
                              <div class="flex gap-1 justify-center">
                                <button class="px-2 py-1 font-semibold leading-tight text-blue-700 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100 hover:bg-blue-500 hover:text-white duration-300" @click.prevent="editHoliday(holiday.id)">Edit
                                </button>

                                <button class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100 hover:bg-red-500 hover:text-white duration-300" @click.prevent="deleteHoliday(holiday.id, index, month)">Delete
                                </button>
                              </div>
                            </th>
                            </tr>
                      </tbody>
                      <tbody v-else>
                          <tr class="dark:text-gray-400">
                              <td colspan="9" class="text-base text-center">Sorry, No Holidays in this month !</td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
            
        <!-- </form> -->  
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
                holidays: [],
                isLoading: true,
                loader,
            }
        },

        methods: {
            getHolidays(){
                axios.get('holidays')
                .then(response => {
                    this.isLoading = false
                    this.holidays = response.data.holidays
                })
                .catch(error => console.log(error))
            },
            addHoliday(){
                window.location.href="/holidays/create"
            },
            editHoliday(id){
                window.location.href="/holidays/"+id+"/edit"
            },
            deleteHoliday(id, index, month){
                this.$messages.confirm().then(isConfirmed => {
                    if(isConfirmed){
                        axios.delete('holidays/'+id)
                        .then(response => {
                            if(response.data.success){
                                this.holidays[month].splice(index, 1)
                                this.$messages.success('Deleted Successfully')
                            }
                        })
                        .catch(error => console.log(error))
                    }
                    
                })
            }
        },

        created() {
            this.getHolidays()
        },

        mounted(){
            
        }
    }
</script>