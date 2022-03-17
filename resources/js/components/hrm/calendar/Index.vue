<template>
    <div v-if="!isLoading">
        <!-- Headline -->
        <div class="my-5 grid grid-cols-3 ">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Calendar</h2>
            <div class="my-2 flex gap-2 justify-center items-center">
                <button @click.prevent="previousMonth" class="flex justify-center items-center  text-gray-600 w-8 h-8 rounded-full font-normal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="grid grid-cols-2 gap-2">
                    <select class="border-gray-200 rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                    placeholder="Customer Name" v-model="monthIndex" required>
                        <!-- <option value="" selected>Select</option> -->
                        <option v-for="(month, index) in months" :value="index+1" :key="index" >{{ month }}</option>
                    </select>
                    <select class="border-gray-200 rounded-md block mt-0 text-xs dark:border-gray-600 dark:bg-gray-700 focus:border-blue-300 focus:outline-none focus:shadow-outline-blue dark:text-gray-300 dark:focus:shadow-outline-gray"
                        placeholder="Customer Name" v-model="yearIndex" required>
                        <!-- <option value="" selected>Select</option> -->
                        <option v-for="year in yearRange" :value="thisYear = year + (currentYear - yearStartBeforeCurrent)" :key="year">
                            {{ thisYear }}
                        </option>
                    </select>
                </div>
                <button @click.prevent="nextMonth" class="flex justify-center items-center  text-gray-600 w-8 h-8 rounded-full font-normal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
                <!-- <button class="flex justify-center items-center bg-emerald-500 text-white w-8 h-8 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button> -->
                
            </div>
            <back-button></back-button>
        </div>
        
        
        <!-- Content -->
        <div class="px-0 sm:px-0 lg:px-48 w-full overflow-hidden shadow-xs">
            <div class="grid grid-cols-7 gap-0 rounded-full">
                <div v-for="(weekDay, index) in weekDays" :key="index" 
                :class="{
                    'border-r-0': (index + 1) % weekDays.length !== 0, 
                    'border-b-0' : (index + 1) > emptyColumns,
                    'bg-red-400': weekDay.is_weekend
                    }" 
                class="border  border-gray-200 bg-cyan-500 text-white font-semibold h-10 w-full inline-flex justify-center items-center">
                    {{ weekDay.day }}
                </div>
                
                <div v-for="day in daysInMonth" :key="day" 
                :class="[
                {'col-start-2' : day === 1 && emptyColumns === 1},
                {'col-start-3' : day === 1 && emptyColumns === 2},
                {'col-start-4' : day === 1 && emptyColumns === 3},
                {'col-start-5' : day === 1 && emptyColumns === 4},
                {'col-start-6' : day === 1 && emptyColumns === 5},
                {'col-start-7' : day === 1 && emptyColumns === 6},
                {
                    'border-r-0': (day + emptyColumns) % weekDays.length !== 0 && day !== daysInMonth, 
                    'border-b-0': (daysInMonth - day) >= weekDays.length, 
                    'px-1 bg-emerald-500 text-white font-bold': currentHoliday = holidays.find(holiday => holiday.day === day && holiday.month == monthIndex && holiday.year == yearIndex),
                }
                ]"
                class="m-0 p-0 border border-slate-200 bg-white text-gray-600 h-16 w-full inline-flex justify-center items-center flex-col text-center" >
                    {{ day }}
                    <span class="text-xs">{{ currentHoliday?.event }}</span>
                </div>
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
                currentYear: this.$filters.currentYear(),
                yearStartBeforeCurrent: 3,
                yearRange: 11,
                yearIndex: 0,
                monthIndex: 0,
                months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                weekDays: [],
                holidays: [],
                monthlyDays: [],
                isLoading: true,
                loader,
            }
        },

        computed: {
            daysInMonth(){
                if(this.yearIndex > 0 && this.monthIndex > 0){
                    return this.$filters.daysInMonth(this.yearIndex, this.monthIndex)
                }
                return 0
            },
            totalRows(){
                return Math.ceil((this.daysInMonth + this.emptyColumns) / 7)
            },
            emptyColumns(){
                let firstDayOfMonth = this.$filters.firstDayOfMonth(this.yearIndex, this.monthIndex)
                return firstDayOfMonth
            },
            emptyColumnClass(){
                let colStartValue = this.emptyColumns + 1
                return "col-start-" + (colStartValue);
            }
        },

        methods: {
            
            previousMonth()
            {
                let monthIndex = this.monthIndex
                let yearIndex = this.yearIndex
                monthIndex--
                if(monthIndex < 1){
                    monthIndex = 12
                    yearIndex--

                    if(yearIndex <= (this.currentYear - this.yearStartBeforeCurrent)){
                        this.$messages.error('Year not found !')
                        return
                    }
                    this.yearIndex = yearIndex
                }
                this.monthIndex = monthIndex
                
            },
            nextMonth()
            {
                let monthIndex = this.monthIndex
                let yearIndex = this.yearIndex
                monthIndex++
                if(monthIndex > 12){
                    monthIndex = 1
                    yearIndex++
                    if(yearIndex > (this.currentYear - this.yearStartBeforeCurrent + this.yearRange)){
                        this.$messages.error('Year not found !')
                        return
                    }
                    this.yearIndex = yearIndex
                }
                this.monthIndex = monthIndex
            },
            getWeekDays()
            {
                axios.get('week-days')
                .then(response => {
                    
                    this.weekDays = response.data.weekDays
                })
                .catch(error => console.log(error))
            },
            getHolidays()
            {
                axios.get('holidays/month/'+this.monthIndex+'/year/'+this.yearIndex)
                .then(response => {
                    this.isLoading = false
                    this.holidays = response.data.holidays
                })
                .catch(error => console.log(error))
            },
        },

        async created() {
            this.getWeekDays()
            // this.getHolidays()
            this.yearIndex = this.currentYear
            this.monthIndex = this.$filters.currentMonth()
        },

        mounted(){
            console.log(this.emptyColumnClass)
            this.$watch(
                (vm) => [vm.yearIndex],
                (val) => {
                    this.getHolidays()
                },
                {
                    immediate: true,
                    deep: true,
                }
            )
        }
    }
</script>