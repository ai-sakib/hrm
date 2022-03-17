// import errorSound from "../assets/sounds/error.mp3";
// import successSound from "../assets/sounds/success.mp3";

export default {

	async error(message){
        // await this.sound(errorSound)
        await this.toastMessage('error',message)
    },

    async success(message){
        // await this.sound(successSound)
        await this.toastMessage('success',message)
    },

    confirm(){
        return new Promise((resolve, reject) => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2f9481',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Sure !'
            }).then((result) => {
                resolve(result.isConfirmed)
            })
        })
        
    },

    sound(audio){
        return new Promise((resolve, reject) => {
            let sound = new Audio(audio)
            sound.play()
            resolve('ok')
        })
    },

    toastMessage(icon, message){
        return new Promise((resolve, reject) => {
            Toast.fire({
                icon: icon,
                title: message
            })
            resolve('ok')
        })
    },
}
