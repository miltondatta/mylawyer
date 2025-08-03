@php
    $site_title = App\Models\GeneralSetting::where('name' , 'site_title')->first();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ $site_title && $site_title->value ? $site_title->value : config('app.name', 'Admin') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCiLJ2oj495NdwWjSm3I_fBGX7UxYYW6s&libraries=places"></script>


</head>

<body class="font-sans antialiased">
    @inertia
</body>

<script type="text/javascript" src="https://chatterpal.me/build/js/chatpal.js?8.3" integrity="sha384-+YIWcPZjPZYuhrEm13vJJg76TIO/g7y5B14VE35zhQdrojfD9dPemo7q6vnH44FR" crossorigin="anonymous" data-cfasync="false"></script>
<script>
    var chatPal = new ChatPal({embedId: 'RWvE8Za29KJL', remoteBaseUrl: 'https://chatterpal.me/', version: '8.3'});
</script>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script src="https://js.pusher.com/beams/1.0/push-notifications-cdn.js"></script>
</html>

