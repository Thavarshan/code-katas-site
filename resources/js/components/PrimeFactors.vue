<template>
    <div>
        <form @submit.prevent="calculate(number)" method="POST">
            <div>
                <label class="block">
                    <span class="text-gray-700 block text-sm font-medium">Number</span>

                    <input type="number" class="form-input mt-1 block w-full" v-model="number" placeholder="8" min="0">
                </label>
            </div>

            <div class="mt-6">
                <button type="submit" class="whitespace-no-wrap inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">Generate</button>
            </div>
        </form>

        <div class="mt-10">
            <div class="overflow-hidden rounded-lg">
                <div class="px-2 py-3 sm:px-4 bg-gray-300">
                    <span class="text-gray-800">Prime factors:</span>

                    <code>
                        <span class="font-mono text-indigo-600">{{ result }}</span>
                    </code>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import methods from '../mixins/methods';

    export default {
        mixins: [methods],

        data() {
            return {
                number: 0,
            }
        },
    };
</script>
