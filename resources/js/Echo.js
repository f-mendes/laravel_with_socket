import Vue from 'vue'
import Bus from './bus'

window.Echo.channel('laravel_database_post_created')
    .listen('PostCreated', (e) => {
        
        Bus.$emit('post', e.post)

        Vue.$vToastify.success(`Título do post ${e.post.name}`, 'Novo Post')
    })