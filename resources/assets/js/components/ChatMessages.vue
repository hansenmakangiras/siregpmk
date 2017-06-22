<template>
<div>
    <div v-for="message in messages" class="item">
        <img v-bind:src="'../img/avatar.png'" alt="user image" class="online">
        <p class="message">
            <a href="#" class="name">
                <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                {{ message.user.name }}
            </a>
            {{ message.message }}
        </p>
        <div class="attachment">
            <h4>Attachments:</h4>
            <p class="filename">
                Theme-thumbnail-image.jpg
            </p>
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        props: ['messages'],
    };
</script>