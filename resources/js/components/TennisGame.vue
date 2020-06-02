<template>
    <div>
        <form @submit.prevent="playMatch" method="POST">
            <div class="rounded-lg bg-gray-300 p-3">
                <div class="rounded-lg bg-white border border-gray-400 p-3">
                    <span class="font-semibold">John's</span> score: <span class="text-indigo-600">{{ john }}</span>
                </div>

                <div class="mt-2 rounded-lg bg-white border border-gray-400 p-3">
                    <span class="font-semibold">Jane's</span> score: <span class="text-indigo-600">{{ jane }}</span>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="whitespace-no-wrap inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">Start match</button>
            </div>
        </form>

        <div class="mt-10">
            <div class="overflow-hidden rounded-lg">
                <div class="px-2 py-3 sm:px-4 bg-gray-300">
                    <span class="text-gray-800">Match score:</span>

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
                john: 0,
                jane: 0,
            }
        },

        methods: {
            playMatch() {
                this.john = this.randomPoint();
                this.jane = this.randomPoint();

                let data = [this.john, this.jane];

                this.calculate(data);
            },

            randomPoint() {
              return Math.floor(Math.random() * (5 - 0) ) + 0;
            }
        }
    };
</script>
