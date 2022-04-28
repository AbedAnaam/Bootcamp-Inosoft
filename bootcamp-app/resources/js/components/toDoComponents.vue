<template>
    <div>
        <h2>Daily To-Do </h2>
        <!-- memanggil component input form -->
        <input-form @emitSubmit="addList" />
        <!-- memanggil component ListComponent -->
        <list :list="list" @emitDelete="deleteList" />
    </div>
</template>

<script>
export default ({
    data(){
        return {
            list: [
                {
                    title : "Est distinctio nostrum sit atque"
                },
                {
                    title : "Consequatur ea atque laborum"
                },
                {
                    title : "Delectus beatae a et qui sit"
                },
            ],
            input: ""
        }
    },
    mounted() {
        console.log("component mounted.")
    },
    methods: {
        addList(inputForm) {
            let newList = {
                title: inputForm
            }
            this.list.push(newList)
            // this.$store.dispatch('addList', newList)
        },
        deleteList(index){
            this.list.splice(index,1)
            // this.$store.dispatch('deleteList', index)
        }
    },
})
</script>
