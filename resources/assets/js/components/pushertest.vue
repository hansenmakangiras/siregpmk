<script>
    Pusher.logToConsole = true;
    let pusher = new Pusher('ba656ac0a549f9760ff7', {
        cluster: 'ap1',
        encrypted: true
    });

    let channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        alert(data.message);
    });
</script>