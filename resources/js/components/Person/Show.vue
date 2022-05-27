<template>
    <div v-if="person">
        <div>
            Name: {{ this.person.name }}
        </div>
        <div>
            Age: {{ this.person.age }}
        </div>
        <div>
            Job: {{ this.person.job }}
        </div>
        <router-link :to="{ name: 'person.edit', params: { id: this.person.id } }">Edit</router-link>
    </div>
</template>

<script>
export default {
    name: "Show",

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
    },
    computed: {
        person() {
            return this.$store.getters.person
        }
    },

    methods: {
    }
}
</script>

<style scoped>

</style>
