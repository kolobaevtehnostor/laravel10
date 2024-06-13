const api = {
    params: {
        url: '',
        responseData: null,
    },

    async load(url) {
        await axios.get(url)
            .then(response => this.onSuccess(response))
            .catch((error) => { alert(`Error ${error.message}`) })

        return this.getResponse();
    },

    onSuccess(response) {
        this.params.responseData = response.data;
    },

    getResponse() {
        return this.params.responseData;
    }
}
export default api;
