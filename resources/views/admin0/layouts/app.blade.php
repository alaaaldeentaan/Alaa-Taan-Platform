<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" >

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('admin.layouts.css');
    <title>Admin Panel</title>
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
    @include('admin.layouts.navbar')

    <div>
        @include('admin.layouts.sidebar');
    </div>

    <div>
        @yield('content')
    </div>
    @include('admin.layouts.js');
        </div>
    </div>
</body>
</html>