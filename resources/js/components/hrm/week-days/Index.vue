<template>
    <div v-if="!isLoading">
        <!-- Headline -->
        <div class="my-5 flex justify-between">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Week Days</h2>
            <back-button></back-button>
        </div>
        
        <!-- Content -->
        <div class="w-full h-60 mt-8 mb-8 overflow-hidden shadow-xs">
            <div class="flex justify-between">
                <span class="font-semibold"> Select Weekends : </span> 
                <div v-for="(day, index) in weekDays" :key="index">
                    <div class="form-check items-center">
                        <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" :value="day.day" v-model="day.is_weekend" type="checkbox" :id="day.id" checked>

                        <label :for="day.id" class="select-none cursor-pointer form-check-label inline-block text-gray-800">{{ day.day }}</label>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 my-8">
                <div>
                    <h2 class="text-lg underline underline-offset-4">Weekend Days</h2>
                    <div class="flex flex-col gap-1 mt-2">
                        <ul v-if="weekendDays.length > 0">
                            <li v-for="weekendDay in weekendDays" :key="weekendDay.id" >{{ weekendDay.day }}</li>
                        </ul>
                        <div class="text-red-500 font-bold" v-else>
                            No weekend selected !
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-lg underline underline-offset-4">Working Days</h2>
                    <div class="flex flex-col gap-1 mt-2">
                        <ul v-if="workingDays.length > 0">
                            <li v-for="workingDay in workingDays" :key="workingDay.id" >{{ workingDay.day }}</li>
                        </ul>
                        <div class="text-red-500 font-bold" v-else>
                            No working day selected !
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="flex justify-center items-center">
            <button @click.prevent="saveWeekDays" class="w-full flex justify-center items-center gap-2 bg-emerald-500 text-white rounded px-2 py-1.5 text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
                <span>Save</span>
            </button>
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
                weekDays: [],
                isLoading: true,
                loader,
            }
        },

        computed: {
            weekendDays(){
                return this.weekDays.filter(weekDay => [1, true].includes(weekDay.is_weekend))
            },
            workingDays(){
                return this.weekDays.filter(weekDay => [0, false].includes(weekDay.is_weekend))
            }
        },

        methods: {
            validateWeekDays(){
                let weekendLimit = 3;
                let weekendDays = this.weekDays.filter(weekDay => [1, true].includes(weekDay.is_weekend))
                if(weekendDays.length <= 0){
                    // this.weekDays[index].is_weekend = true
                    this.$messages.error("At Least One Weekend Needed !")
                    return false
                }
                if(weekendDays.length > weekendLimit){
                    // this.weekDays[index].is_weekend = false
                    this.$messages.error(`Weekend Can't Be More Than ${weekendLimit} Days`)
                    return false
                }
                return true
            },
            saveWeekDays(){
                let validated = this.validateWeekDays()
                if(validated){
                    this.$messages.confirm().then(isConfirmed => {
                        if(isConfirmed){
                            axios.post('week-days', {weekDays : this.weekDays})
                            .then(response => {
                                if(response.data.success){
                                    this.$messages.success('Successfully Saved !')
                                }else{
                                    this.$messages.error('Something Went Wrong !')
                                }
                            })
                            .catch(error => console.log(error))
                        }
                    })
                }
                
            },
            getWeekDays(){
                axios.get('week-days')
                .then(response => {
                    this.isLoading = false
                    this.weekDays = response.data.weekDays
                    this.weekDays.forEach(day => {
                        day.is_weekend = day.is_weekend == 1 ? true : false
                    })
                })
                .catch(error => console.log(error))
            },
        },

        created() {
            this.getWeekDays()
        },

        mounted(){
            
        }
    }
</script>