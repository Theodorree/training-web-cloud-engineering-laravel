<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="margin-right: -13%">
        @foreach ($data as $biodata)
        <ul class="list-group mb-3 col-6">
            <li class="list-group-item active" aria-current="true">Biodata</li>
            <li class="list-group-item">Nama : {{ $biodata['nama']}}</li>
            <li class="list-group-item">Alamat : {{ $biodata['alamat']}}</li>
        </ul>
        @endforeach
        <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>
