<template>
    <div>
        <form @submit.prevent="tick" method="POST">
            <div class="rounded-lg bg-gray-300 p-3">
                <div>
                    <label class="block">
                        <span class="text-gray-700 block text-sm font-medium">Item</span>

                        <select class="form-select mt-1 block w-full" v-model="item">
                            <option value="normal">Normal item</option>
                            <option value="Aged Brie">Aged Brie (Cheese)</option>
                            <option value="Sulfuras, Hand of Ragnaros">Sulfuras, Hand of Ragnaros</option>
                            <option value="Backstage passes to a TAFKAL80ETC concert">Backstage passes to a TAFKAL80ETC concert</option>
                            <option value="Conjured Mana Cake">Conjured Mana Cake</option>
                        </select>
                    </label>
                </div>

                <div class="mt-4">
                    <label class="block">
                        <span class="text-gray-700 block text-sm font-medium">Quality</span>

                        <input type="number" class="form-input mt-1 block w-full" v-model="quality" placeholder="8" min="0" max="50">
                    </label>
                </div>

                <div class="mt-4">
                    <label class="block">
                        <span class="text-gray-700 block text-sm font-medium">Sell by date/Expiry date</span>

                        <input type="number" class="form-input mt-1 block w-full" v-model="sellin" placeholder="5" min="-10" max="10">
                    </label>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="whitespace-no-wrap inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-lg text-white hover:text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">Update items</button>
            </div>
        </form>

        <div class="mt-10">
            <div class="overflow-hidden rounded-lg">
                <div class="px-2 py-3 sm:px-4 bg-gray-300">
                    <span class="text-gray-800">Item status:</span>

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
                item: 'normal',
                quality: 0,
                sellin: 0,
            }
        },

        methods: {
            tick() {
                let data = [this.item, this.quality, this.sellin];

                this.calculate(data);
            },
        }
    };
</script>
