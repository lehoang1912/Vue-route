class Status {
    static find(id) {
        return axios.get('/statuses/' + id);
    }

    static all() {
        return axios.get('/statuses');
    }
}

export default Status;