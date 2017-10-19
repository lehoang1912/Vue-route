<template>
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="message" v-for="status in statuses">
                    <div class="message-header">
                        <p>{{ status.user.name }} said ...</p>
                        <p>{{ status.created_at | ago | capitalize }}</p>
                    </div>

                    <div class="message-body" v-text="status.body"></div>
                </div>
    
                <add-to-stream @completed="addStatuses"></add-to-stream>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';
    import Status from '../models/Status';
    import AddToStream from '../components/AddToStream';


    export default {
        components: {
            AddToStream
        },

        data() {
            return {
                statuses: []
            }
        },

        filters: {
            ago(date) {
                return moment(date).fromNow();
            },

            capitalize(value) {
                return value.toUpperCase();
            }
        },

        created() {
            Status.all()
                .then(({data}) => this.statuses = data);
        },

        methods: {
            // postedOn(status) {
            //     return moment(status.created_at).fromNow();
            // }

            addStatuses(status) {
                this.statuses.unshift(status);

                alert('Your status is added to stream');

                window.scrollTo(0, 0);
            }
        }
    }
</script>
