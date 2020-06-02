class Calculator {
    /**
     * Create new calculator class instance.
     *
     * @param  {mixed} data
     * @return {mixed}
     */
    constructor(data) {
        this.data = data;
    }

    /**
     * Execute request.
     *
     * @param  {string} endpoint
     * @return {mixed}
     */
    execute(endpoint) {
        return this.submit(endpoint);
    }

    /**
     * Submit arguments to controller to be processed.
     *
     * @param  {string} endpoint
     * @return {mixed}
     */
    submit(endpoint = null) {
        if (endpoint === null) {
            endpoint = `${location.pathname}/execute`;
        }

        return axios.post(endpoint, {
            arguments: this.data
        });
    }
}

export default Calculator;
