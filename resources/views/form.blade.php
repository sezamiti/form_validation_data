<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <livewire:styles />
</head>
<body>


<div class="container mt-5">
    <div class="row mt-5 justify-content-center">
        <div class="mt-5 col-md-8">
            <div class="card">
                <div class="card-header bg-success">
                    <h2 class="text-white">Laravel Livewire Form Tutorial From Scratch - tutsmake.com</h2>
                </div>
                <div class="card-body">
                    @livewire('register-form')
                </div>
            </div>
        </div>
    </div>
</div>
<livewire:scripts />
</body>
</html>
