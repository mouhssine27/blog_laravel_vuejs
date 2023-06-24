require('./bootstrap');
import { createApp } from 'vue';
import { createPinia } from 'pinia';
import Comments from './components/Comments.vue';
import addComment from './components/addComment.vue';
import CommentsCount from './components/CommentsCount.vue';

const app = createApp({});
const pinia = createPinia();

app.use(pinia);
app.component('comments-component', Comments);
app.component('add-comment', addComment);
app.component('comment-count', CommentsCount);

app.mount('#app');

