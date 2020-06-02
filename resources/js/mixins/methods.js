import Calculator from './Calculator';

export default {
    data() {
        return {
            result: []
        }
    },

    methods: {
        calculate(data) {
            let form = new Calculator(data);

            form.execute(`${location.pathname}/execute`)
                .then(({data}) => {
                    this.result = data.result;
                });
        }
    }
}
