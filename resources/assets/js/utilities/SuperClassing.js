export default Vue.extend({
    data() {
        return {
            name: 'Hoang Le',
            company: 'Company HHH',
            age: '26'
        };
    },

    methods: {
        getYearOfBirth(age) {
            let year = (new Date()).getFullYear();
            return year - age;
        }
    }
});