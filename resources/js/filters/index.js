import moment from 'moment'

export default {

	textShort(text, length, suffix){
		let textShort = text
		if(text.length > length){
			textShort = text.substring(0, length) + suffix
		}
		return textShort
	},

    currentDate(){
        var today = new Date()
        var dd = String(today.getDate()).padStart(2, '0')
        var mm = String(today.getMonth() + 1).padStart(2, '0') //January is 0!
        var yyyy = today.getFullYear()

        today = yyyy + '-' + mm + '-' + dd
        return today
    },

	currentMonth(){
		var today = new Date()
        var mm = String(today.getMonth() + 1) //January is 0!
        return mm
    },

	currentYear(){
		var today = new Date()
        var yyyy = today.getFullYear()
        return yyyy
    },

	daysInMonth(year, month){
		return new Date(year, month, 0).getDate();
	},

	firstDayOfMonth(year, month){
		let date = new Date(year + '-' + month + '-' + '01')
		return date.getDay()
	},

    currentDateWithDetails(){
        var today = new Date()
        var second = today.getSeconds()
        var minute = today.getMinutes()
        var hour = today.getHours()
        var dd = String(today.getDate()).padStart(2, '0')
        var mm = String(today.getMonth() + 1).padStart(2, '0') //January is 0!
        var yyyy = today.getFullYear()

        today = yyyy + '-' + mm + '-' + dd + ' ' + hour + ':' + minute + ':' + second
        return today
    },

    dateFormatWithDetails(date){
    	let formattedDate = this.dateFormat(date)
    	let hourMinute = this.formatAMPM(date)

    	let finalDate = formattedDate + ' ' + hourMinute
    	return finalDate
    },

    formatAMPM(date) {
    	let hourMinute = date.split(' ')[1]

    	let splittedHourMinute = hourMinute.split(':')
    	let hours = splittedHourMinute[0]
    	let minutes = splittedHourMinute[1]

		let ampm = hours >= 12 ? 'pm' : 'am'
		hours = hours % 12
		hours = hours ? hours : 12 // the hour '0' should be '12'
		minutes = String(minutes).padStart(2, '0')
		let strTime = hours + ':' + minutes + ' ' + ampm
		return strTime
	},

    dateTime(date){
        return moment(date).format("Do MMM 'YY")  
    },

    dateFormat(date){
        return moment(date).format("Do-MMM-YY")  
    },

	getDayName(date){
		let days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']
		let formattedDate = new Date(date)
		let day = days[formattedDate.getDay()]

		return day
	},

	months(month){
		switch(month) {
			case '01':
			    return 'January'
			    break
			case '02':
			    return 'February'
			    break
			case '03':
			    return 'March'
			    break
			case '04':
			    return 'April'
			    break
			case '05':
			    return 'May'
			    break
			case '06':
			    return 'June'
			    break
			case '07':
			    return 'July'
			    break
			case '08':
			    return 'August'
			    break
			case '09':
			    return 'September'
			    break
			case '10':
			    return 'October'
			    break
			case '11':
			    return 'November'
			    break
			case '12':
			    return 'December'
			    break
		}
	},

	monthFormat(date){
		let month = date.split('-')[0]
		return this.months(month)+', ' + date.split('-')[1]
	},

	addDays(date, days) {
     	var result = new Date(date)
      	result.setDate(result.getDate() + days)
      	return this.ymdDateFormat(result)
    },

    subDays(date, days) {
     	var result = new Date(date)
      	result.setDate(result.getDate() - days)
      	return this.ymdDateFormat(result)
    },

	ymdDateFormat(date){
		let formattedDate = new Date(date)

        let dd = String(formattedDate.getDate()).padStart(2, '0')
        let mm = String(formattedDate.getMonth() + 1).padStart(2, '0') //January is 0!
        let yyyy = formattedDate.getFullYear()

        formattedDate = yyyy + '-' + mm + '-' + dd

        return formattedDate
	}
}
