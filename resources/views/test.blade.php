<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Livewire Test</title>
    @livewireStyles
</head>
<body>
    <div class="py-1 bg-light">
        <ul class="nav justify-content-center my-1">
            <li class="nav-item">
                <a class="btn mx-2" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="btn mx-2" href="#">Work</a>
            </li>
            <li class="nav-item">
                <a class="btn mx-2" href="#">Change Password</a>
            </li>
        </ul>
    </div>
    <div class="container my-2">
        @livewire('profile')
    </div>

    @livewireScripts
</body>
</html>