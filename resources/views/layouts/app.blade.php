<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <title>exam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include('inc.nav')
        @yield('contents')
        @include('inc.modals')

        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
        <script>
            var base_url =  "{{ url('/')}}";

        </script>
        <script src="{{asset('js/myapp.js')}}"></script>
    </body>
</html>
