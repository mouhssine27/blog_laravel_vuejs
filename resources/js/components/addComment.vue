<template>
    <div class="col-lg-12">
        <h5 class="comment-title">Leave a Comment</h5>
        <div class="row">
            <form @submit.prevent="addComment">
                
                <div class="col-12 mb-3">
                    <label for="comment-message">Message</label>

                    <textarea class="form-control" id="comment-message" v-model="data.body" :required="true"
                        placeholder="Enter your name" cols="30" rows="10"></textarea>
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Post comment">
                </div>
            </form>
        </div>
    </div>
</template>


<script setup>
   import {reactive} from 'vue';
   import {useCommentsStore} from '../stores/useCommentsStore';
   const data = reactive({
       body:''
   })

    const store = useCommentsStore();
   const props = defineProps({
       user_id:{
           type: Number,
           required : true
       },
         post_id:{
           type: Number,
           required : true
       }
   })

   const addComment = async () => {
       store.storeComment(props.user_id, props.post_id , data.body);
       data.body = '';
   };

</script>
