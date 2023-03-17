<template>
    <div class="comments-container">   
        <div class="inner-comments-container">
            <div class="comment-form">
                <h1 class="comment-form-title">Lăsați un comentariu</h1>
                <div class="error-container">
                    <input :class="['form-input', 'comment-name-input', numeError == '' ? '' : 'error']" id="comment-input" type="text" placeholder="Nume:">
                    <h3 v-if="numeError != ''" class="error-text">{{ numeError }}</h3>
                </div>                
                <div class="error-container">
                    <textarea :class="['form-textarea', 'comment-textarea', comentariuError == '' ? '' : 'error']" name="comentariu" id="comment-text" rows="5" placeholder="Lăsați un comentariu"></textarea>
                    <h3 v-if="comentariuError != ''" class="error-text">{{ comentariuError }}</h3>
                </div>    
                <button class="btn comment-btn" @click="postComment()">Plasează comentariul</button>
            </div>
            <div class="comments-list">
                <h1 class="comments-list-title">Comentariile clienților :</h1>
                <div v-if="comments.length > 0" v-for="item in comments" class="comments-list-item">
                    <h2 class="comment-item-name">{{ item.nume }}</h2>
                    <pre class="comment-item-text">{{ item.comentariu }}</pre>
                </div>
                <div v-else class="comments-list-item">
                    <h2 class="comments-length-0">Nu sunt comentarii !</h2>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

    export default {
        data() {
            return {
                comments: [],
                numeError: '',
                comentariuError: '',
            }
        },
        mounted() {
            this.getComments();
        },
        methods: {
            getComments() {
                axios.get('/get-comments').then((result) => {
                    this.comments = result.data.comments;
                }).catch((err) => {
                    console.log(err);
                });
            },
            async postComment() {
                let form = new FormData();
                let nume = document.getElementById('comment-input').value;
                let comentariu = document.getElementById('comment-text').value;
                form.append('nume', nume);
                form.append('comentariu', comentariu);
                await axios.post('/create-comment', form).then((result) => {
                    document.getElementById('comment-input').value = '';
                    document.getElementById('comment-text').value = '';
                    this.numeError = '';
                    this.comentariuError = '';
                    this.getComments();
                }).catch((err) => {
                    this.numeError = err.response.data.errors.nume[0];
                    this.comentariuError = err.response.data.errors.comentariu[0];
                });
            }
        },
    }
</script>
<style lang="scss">
    .comments-container {
        background-image: url('https://catherineasquithgallery.com/uploads/posts/2021-03/1614625811_54-p-fon-dereva-dlya-fotoshopa-100.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        padding: 80px;
    }
    .inner-comments-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    .comment-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }
    .comment-form-title {
        color: white;
        text-align: center;
    }
    .comment-name-input {
        width: 80%;
    }
    .comment-textarea {
        width: 80%!important;
        resize: none;
    }
    .comments-list-title {
        color: white;
        text-align: center;
    }
    .comment-btn {
        width: 80%;
        background-color: #3BB84C;
    }
    .comments-list {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }
    .comments-length-0 {
        text-align: center;
        color: #DC3545;
    }
    .error-container {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .error {
        border: 2px solid #DC3545;
    }
    .error::placeholder {
        color: #DC3545;
    }
    .error-text {
        color: #DC3545;
        width: 80%;
        margin: 0;
        padding: 0;
    }
    .comments-list-item {
        width: 80%;
        border: 2px solid rgba(255, 255, 255, 0.788);
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.5);
    }
    .comment-item-name {
        color: #634737;
        border-bottom: 2px solid rgba(255, 255, 255, 0.788);
        padding: 10px;
    }
    .comment-item-text {
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        padding: 10px
    }
    @media (max-width: 786px)  {
        .inner-comments-container {
            grid-template-columns: 1fr;
            gap: 50px;
        }
        .comments-container {
            padding: 0;
            padding-top: 20px;
            padding-bottom: 20px;
        }
    }
</style>