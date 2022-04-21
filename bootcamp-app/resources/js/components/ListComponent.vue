<template>
    <ul class="list">
        <li v-for="(item,index) in list" :key="index">
            {{ item.title }} <span class="delete" @click="deleteList(index)">Hapus</span>
        </li>
    </ul>
</template>

<script>
export default {
    props: {
        list: {
            type: Array,
            default: () => {
                return []
            }
        }
    },
    methods: {
        deleteList(index) {
            this.$emit('emitDelete', index)
        }
    }
}
</script>
