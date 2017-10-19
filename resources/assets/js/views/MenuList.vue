<template>
    <div>
        <menu-example :items="['one', 'two', 'three']">
            <template slot="menu-item" slot-scope="props">
                <em v-text="props.item"></em>
            </template>
            <!-- <template slot-scope="props">
                <em v-text="props.item"></em>
            </template> -->
        </menu-example>
    </div>
</template>

<script>
    import MenuExample from '../components/MenuExample';

    export default {
        components: {
            MenuExample
        }
    }
</script>
