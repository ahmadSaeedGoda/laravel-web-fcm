<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
        <link rel="manifest" href="manifest.json">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Notification Test!</div>
                        <div class="panel-body">
                            <div id="map">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <script src='https://www.gstatic.com/firebasejs/3.9.0/firebase-app.js'></script>
        <script src='https://www.gstatic.com/firebasejs/3.9.0/firebase-messaging.js'></script>
        
        <script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
        <script src="{{ asset('js/firebase.js') }}"></script>
    </body>
</html>