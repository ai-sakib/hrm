export default  {
    
    getBuyers(){
        return new Promise((resolve, reject) => {
            axios.get('api/v1/settings/buyers')
            .then((response) => {
                resolve(response.data)
            })
            .catch((catchUserError) => {
                reject(error)
            });
        });
    }
    
};