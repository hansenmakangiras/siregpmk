<template>
    <div class="box-footer">
        <div class="input-group">
            <input id="btn-input" type="text" name="message" class="form-control"
                   placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">
            <div class="input-group-btn">
                <button type="button" class="btn btn-success" id="btn-chat" @click="sendMessage"><i
                        class="fa fa-plus"></i></button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                newMessage: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>