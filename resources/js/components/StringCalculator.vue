<template>
    <div>
        <form @submit.prevent="calculate(characters)" method="POST">
            <div>
                <label class="block">
                    <span class="text-gray-700 block text-sm font-medium">Number in string format</span>

                    <input type="text" class="form-input mt-1 block w-full" v-model="characters" placeholder="5, 5, 5, 4" min="0">

                    <div class="mt-1">
                        <span class="text-sm text-gray-500">Enter any number and it will we converted to string format.</span>
                    </div>
                </label>
            </div>

            <div class="mt-6">
                <button type="submit" class="whitespace-no-wrap inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">Generate</button>
            </div>
        </form>

        <div class="mt-10">
            <div class="overflow-hidden rounded-lg">
                <div class="px-2 py-3 sm:px-4 bg-gray-300">
                    <span class="text-gray-800">Sum of string characters:</span>

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
                characters: "",
            }
        },
    };
</script>
