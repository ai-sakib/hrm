require('./bootstrap')

import Store from './store/index.js'

/**Helpers */
import filters from './filters/index.js'
import messages from './filters/messages.js'
import localStorage from './filters/localStorage.js'

/**Buttons */
import PlusButton from './components/layouts/buttons/PlusButton.vue'
import BackButton from './components/layouts/buttons/BackButton.vue'
import PrintButton from './components/layouts/buttons/PrintButton.vue'


/**Sweetalert 2 */
import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css'

/**Components */
import EmployeeIndex from './components/hrm/employees/Index.vue'
import EmployeeCreateOrEdit from './components/hrm/employees/CreateOrEdit.vue'
import CalendarIndex from './components/hrm/calendar/Index.vue'
import HolidayIndex from './components/hrm/holidays/Index.vue'
import HolidayCreateOrEdit from './components/hrm/holidays/CreateOrEdit.vue'
import WeekDayIndex from './components/hrm/week-days/Index.vue'
import OTLevelIndex from './components/hrm/ot-levels/Index.vue'
import OTLevelCreateOrEdit from './components/hrm/ot-levels/CreateOrEdit.vue'
import WorkTypeIndex from './components/hrm/work-types/Index.vue'
import WorkTypeCreateOrEdit from './components/hrm/work-types/CreateOrEdit.vue'
import ShiftIndex from './components/hrm/shifts/Index.vue'
import ShiftCreateOrEdit from './components/hrm/shifts/CreateOrEdit.vue'



import { createApp } from 'vue'
// import App from './components/App.vue'
// import Router from './router/index.js'

const app = createApp({})


/**Helpers */
app.config.globalProperties.$filters = filters;
app.config.globalProperties.$messages = messages;
app.config.globalProperties.$localStorage = localStorage;


app.use(Store)
app.use(VueSweetalert2);

window.Swal =  app.config.globalProperties.$swal;
const Toast = Swal.mixin({
    toast: true,
    iconColor: '#f5f5f5',
    customClass: {
      popup: 'colored-toast'
    },
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
window.Toast = Toast

/**Components */
app.component('EmployeeIndex', EmployeeIndex)
app.component('EmployeeCreateOrEdit', EmployeeCreateOrEdit)
app.component('CalendarIndex', CalendarIndex)
app.component('HolidayIndex', HolidayIndex)
app.component('HolidayCreateOrEdit', HolidayCreateOrEdit)
app.component('WeekDayIndex', WeekDayIndex)
app.component('OTLevelIndex', OTLevelIndex)
app.component('OTLevelCreateOrEdit', OTLevelCreateOrEdit)
app.component('WorkTypeIndex', WorkTypeIndex)
app.component('WorkTypeCreateOrEdit', WorkTypeCreateOrEdit)
app.component('ShiftIndex', ShiftIndex)
app.component('ShiftCreateOrEdit', ShiftCreateOrEdit)

/**Buttons */
app.component('PlusButton', PlusButton)
app.component('BackButton', BackButton)
app.component('PrintButton', PrintButton)


app.mount('#app')
// Now the app has started!
