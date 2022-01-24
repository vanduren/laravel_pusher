<!DOCTYPE html>
<head>
  <title>Laravel 8 Pusher Notification Example Tutorial - XpertPhp</title>
  <h1>Laravel 8 Pusher Notification Example Tutorial</h1>
  <div id="test"></div>
  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script>

   var pusher = new Pusher('{{env("MIX_PUSHER_APP_KEY")}}', {
      cluster: '{{env("PUSHER_APP_CLUSTER")}}',
      encrypted: true
    });

    var channel = pusher.subscribe('notify-channel');
    channel.bind('App\\Events\\Notify', function(data) {
        document.body.style.background = "grey";
        document.querySelector('#test').innerHTML = data.message;
        alert(data.message);
    });
  </script>
</head>
