<template>
    <form class="form">
        <input v-model="inputForm" />
        <!-- <button type="button" @click="reset">Reset</button>
        <button type="button" @click="addList">Submit</button> -->
        <button-form @emitClick="reset" text="Reset"/>
        <button-form @emitClick="addList" text="Submit" />
    </form>
</template>

<script>
export default ({
    data(){
        return {
            inputForm: "",
        }
    },
    methods: {
        addList() {
            this.$emit('emitSubmit', this.inputForm)
            this.inputForm = ""
        },
        reset() {
            this.inputForm = ""
        }
    }
})
</script>
