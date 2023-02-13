<template>
    <div class="container" id='app'>
        <h3>Chat</h3>
        <chat-room-selection
            v-if="currentRoom.id"
            :rooms="chatRooms"
            :currentRoom="currentRoom"
            v-on:roomchanged="setRoom($event)"
            v-on:roomcreated="chatRooms"
        ></chat-room-selection>
        <chat-room-creation
            :rooms="chatRooms"
            v-on:roomcreated="chatRooms"
        ></chat-room-creation>
        <message-container :messages="messages" v-on:messagesent="setRoom(currentRoom)"></message-container>
        <input-message :room="currentRoom"
           v-on:messagesent="getMessages()"
        ></input-message>
    </div>
</template>
<script>
    import MessageContainer from "./MessageContainer.vue";
    import InputMessage from "./InputMessage.vue";
    import ChatRoomSelection from "./ChatRoomSelection.vue";
    import ChatRoomCreation from "./ChatRoomCreation.vue";
    export default {
        components: {ChatRoomCreation, ChatRoomSelection, InputMessage, MessageContainer},
        // name: 'chat-component',
        mounted() {
            // this.getRooms();
            console.log('Component chat mounted.')
        },
        data: function () {
            return {
                chatRooms: [],
                currentRoom: [],
                messages: [],
            }
        },
        watch: {
            currentRoom( val, oldVal) {
                console.log( val, 'val' );
                console.log( oldVal, 'oldVal' );
                if ( oldVal.id) {
                    console.log( 'in2');
                    this.disconnect(oldVal);
                }
                console.log( 'out');
                this.connect();
            }
        },
        methods: {
            connect() {
                if ( this.currentRoom.id) {
                    let vm = this;
                    this.getMessages();
                    this.getRooms();

                    console.log('aaa', this.currentRoom );
                    console.log('aaa-id', this.currentRoom.id );

                    // window.Echo.private('chat.'+ this.currentRoom[this.currentRoom.length - 1].id)
                    window.Echo.private('chat.'+this.currentRoom.id)
                        .listen('.message.new', e => {
                            vm.getMessages();
                        })
                        .listenForWhisper('typing', () => {
                            console.log('type', e.name);
                        })
                    ;

                    window.Echo.private('room-new')
                        .listen('.room.new', e => {
                            vm.getRooms();
                        });
                }

            },
            disconnect(room) {
                window.Echo.leave("chat."+this.currentRoom.id)
            },
            getRooms() {
                axios.get('/chat/rooms')
                .then( response => {
                    this.chatRooms = response.data;
                    this.setRoom(response.data[0]);
                } )
                .catch( error =>
                    console.log('error1')
                )
            },
            setRoom( room ){
                this.currentRoom = room;
                this.getMessages();
            },
            getMessages() {
                axios.get('/chat/rooms/' + this.currentRoom.id + '/messages')
                .then( response => {
                    this.messages = response.data;
                })
                .catch( error =>
                    console.log('error2')
                )
            },
        },
        created(){
            this.getRooms();
        }
    }
</script>
