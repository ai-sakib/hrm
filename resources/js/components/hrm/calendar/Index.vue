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
            </div>
            <back-button></back-button>
        </div>
        
        
        <!-- Content -->
        <!-- 
            /**
                *Fixed the rows to fixedBoxes (7 days * 5 rows)
                *1st day should start from after empty columns
                *Javascript returns 0 for sunday, so, I saved the first day of month to empty colums,
                    Because My weekday table is also starts from sunday 

             */
         -->
        <div class="px-0 sm:px-0 lg:px-52 w-full overflow-hidden shadow-xs">
            <div class="grid grid-cols-7 gap-0 rounded-full">
                <div v-for="(weekDay, index) in weekDays" :key="index" 
                :class="{
                    'border-r-0': (index + 1) % weekDays.length !== 0, 
                    'bg-rose-400': weekDay.is_weekend
                    }" 
                class="border border-gray-200 bg-teal-500 text-white font-semibold h-10 w-full inline-flex justify-center items-center">
                    {{ weekDay.day }}
                </div>

                <!-- For Empty Colums -->
                <!-- <div v-for="emptyColumn in emptyBoxes" :key="emptyColumn"
                :class="
                {
                    'bg-transparent' : (upperColumn = (fixedBoxes - emptyBoxes + emptyColumn)) > daysInMonth,
                    'px-1 bg-emerald-500 text-white font-bold': currentHoliday = holidays.find(holiday => holiday.day === upperColumn && holiday.month == monthIndex && holiday.year == yearIndex)
                }"
                class="m-0 p-0 border border-r-0 border-t-0 border-slate-200 bg-white text-gray-600 h-16 w-full inline-flex justify-center items-center flex-col text-center" >
                    <span class="flex flex-col" v-if="upperColumn <= daysInMonth ">
                        {{ upperColumn }}
                        <span class="text-xs">{{ currentHoliday?.event }}</span>
                    </span>
                </div> -->

                <!-- For days in a month -->
                <!-- <template v-for="day in (fixedBoxes - emptyBoxes)" :key="day">
                    <div
                    :class="[
                    {
                        'bg-transparent': day > daysInMonth,
                        'border-r-0': (day + emptyBoxes) % weekDays.length !== 0, 
                        'px-1 bg-emerald-500 text-white font-bold': currentHoliday = holidays.find(holiday => holiday.day === day && holiday.month == monthIndex && holiday.year == yearIndex),
                    }
                    ]"
                    class="m-0 p-0 border border-t-0 border-slate-200 bg-white text-gray-600 h-16 w-full inline-flex justify-center items-center flex-col text-center" >
                        <div v-if="day <= daysInMonth" class="inline-flex flex-col">
                            {{ day }}
                            <span class="text-xs">{{ currentHoliday?.event }}</span>
                        </div>
                        
                    </div>
                </template> -->

                <template v-for="boxNumber in fixedBoxes" :key="boxNumber">
                    <div 
                    :class="[
                    {
                        
                        'bg-transparent': isEmptyBox = (day =  boxNumber - emptyBoxes) > daysInMonth || 
                        (day < 1 && fixedBoxes + day > daysInMonth),
                        'border-r-0': boxNumber  % weekDays.length !== 0, 
                        
                        'bg-emerald-500 text-white font-bold': 
                        (currentHoliday = holidays.find(holiday => holiday.day === day && holiday.month == monthIndex && holiday.year == yearIndex)) || 
                        (emptyBoxHoliday = holidays.find(holiday => holiday.day === (emptyBoxDay = fixedBoxes + day) && holiday.month == monthIndex && holiday.year == yearIndex)),
                        'text-rose-500 font-bold': isWeekend(boxNumber) && !currentHoliday && !emptyBoxHoliday,
                        
                    }
                    ]"
                    class="m-0 p-0 border border-t-0 border-slate-200 bg-white text-gray-600 h-16 w-full inline-flex justify-center items-center flex-col text-center" >
                        <template v-if="!isEmptyBox" class="inline-flex flex-col">

                            <template v-if="day <= daysInMonth && day > 0">
                                <span> {{ day }} </span>
                                <span class="text-xs">{{ currentHoliday?.event }}</span>
                            </template>

                            <template v-else>
                                <span> {{ emptyBoxDay }} </span>
                                <span class="text-xs">{{emptyBoxHoliday?.event }}</span>
                            </template>

                        </template>
                    </div>
                </template>
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
                fixedRows: 5,

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
                return Math.ceil((this.daysInMonth + this.emptyBoxes) / 7)
            },
            fixedBoxes(){
                return this.weekDays.length * this.fixedRows
            },

            emptyBoxes(){
                
                let firstDayOfWeek = this.weekDays[0].day
                let firstDayOfMonth = this.$filters.firstDayOfMonth(this.yearIndex, this.monthIndex)
                let emptyBoxes

                switch (firstDayOfWeek) {
                    
                    case "Sunday":
                        emptyBoxes = firstDayOfMonth + 7
                        break;
                    case "Monday":
                        emptyBoxes = firstDayOfMonth + 6
                        break;
                    case "Tuesday":
                        emptyBoxes = firstDayOfMonth + 5
                        break;
                    case "Wednesday":
                        emptyBoxes = firstDayOfMonth + 4
                        break;
                    case "Thursday":
                        emptyBoxes = firstDayOfMonth + 3
                        break;
                    case "Friday":
                        emptyBoxes = firstDayOfMonth + 2
                        break;
                    case "Saturday":
                        emptyBoxes = firstDayOfMonth + 1
                        break;
                    
                    default:
                        emptyBoxes = firstDayOfMonth //Sunday
                        break;
                }

                return emptyBoxes % 7
            },
            emptyColumnClass(){
                let colStartValue = this.emptyBoxes + 1
                return "col-start-" + (colStartValue);
            }
        },

        methods: {
            isWeekend(boxNumber){
                let modulas = boxNumber % 7
                let day = modulas === 0 ? 7 : modulas
                let isWeekend = this.weekDays.find(weekDay => weekDay.id === day)?.is_weekend
                return isWeekend
            },
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
                console.log(this.emptyBoxes)
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

        created() {
            this.getWeekDays()
            this.yearIndex = this.currentYear
            this.monthIndex = this.$filters.currentMonth()
        },

        mounted(){
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