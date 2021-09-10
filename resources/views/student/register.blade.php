<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Register</title>
    @livewireStyles
</head>
<body>

    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-6 offset-md-3">
                <h1>Student Register</h1> <hr>
                @livewire('student-register')
            </div>
        </div>
    </div>

    @livewireScripts
</body>
</html>
