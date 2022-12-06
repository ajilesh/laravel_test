<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('af9ac138d7cbe92e2a6d', {
            cluster: 'eu'
            });

            var channel = pusher.subscribe('customer');
            channel.bind('new-customer', function(data) {
            //alert(JSON.stringify(data));
           // console.log(data.data.email);
            $('h1 span').html(data.data.email);
            });
    </script>
</head>
<body>
    <h1><span></span></h1>
</body>
</html>