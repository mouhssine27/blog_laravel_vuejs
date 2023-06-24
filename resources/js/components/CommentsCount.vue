<template>
    <h5 class="comment-title py-4">{{ store.getComments.length }} Comments</h5>
</template>


<script setup>

    import { useCommentsStore} from '../stores/useCommentsStore';
    const store = useCommentsStore();
    

   

</script>
