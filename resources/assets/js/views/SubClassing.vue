<template>
    <div>
        <p>Name: {{ name }}</p>
        <p>Company: {{ company }}</p>
        <p>Project: {{ project }}</p>
        <p>Age: {{ age }}</p>
        <p>Year of birth: {{ getYearOfBirth(age) }}</p>
    </div>
</template>

<script>
    import SuperClassing from '../utilities/SuperClassing';

    export default SuperClassing.extend({
        data() {
            return {
                project: 'Chat bot project'
            };
        }
    })
</script>
