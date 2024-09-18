<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PUSHER</title>

        <!-- Fonts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="text-center text-3xl mt-3 text-red-600">Laravel PUSHER</div>
        <div id="messages" class="mt-5 text-center text-lg text-green-600"></div>
        <script type="module">
            window.Echo.channel('messages')
                .listen('MessageCreated', (event) => {
                    console.log('Received event:', event);
                    // Afficher le message reçu
                    const messageContainer = document.getElementById('messages');
                    const messageElement = document.createElement('p');
                    messageElement.textContent = event.message;
                    messageContainer.appendChild(messageElement);
                });
        </script>
    </body>
</html>
