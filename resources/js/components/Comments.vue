<template>

    <div class="comment d-flex mb-4" v-for="comment in store.getComments.slice(0,data.commentToShow)" :key="comment.id">
    <div class="flex-shrink-0">
        <div class="avatar avatar-sm rounded-circle">
            <img class="avatar-img" src='/assets/img/person-5.jpg' alt="" :class="img-fluid">
        </div>
    </div>
    <div class="flex-grow-1 ms-2 ms-sm-3">
        <div>
            <div class="comment-meta d-flex align-items-baseline">
                <h6 class="me-2">{{ comment.user.name  }}</h6>
                <span class="text-muted">{{comment.created_at}}</span>
            </div>
            <div class="comment-body">
                {{comment.body}}
            </div>
        </div>
    </div>
    
 </div>
 <a style=" cursor: pointer;" v-if="data.commentToShow  < store.getComments.length" @click="loadMoreComments" ><p>afficher plus</p></a>
</template>


<script setup>
    import { onMounted} from 'vue';
    import { reactive } from 'vue';
    import { useCommentsStore } from '../stores/useCommentsStore';
       
    const store = useCommentsStore();

  

    const props = defineProps({
        post_id: {
            type: Number,
            required: true
        }
    });

      const data = reactive ({
        commentToShow : 3
    });

    const loadMoreComments = () =>{
        if(data.commentToShow  >= store.getComments.length){
            return;
        }else{
            data.commentToShow = data.commentToShow  + 3
        }
    }

    onMounted(() => store.fetchComments(props.post_id));

</script>
