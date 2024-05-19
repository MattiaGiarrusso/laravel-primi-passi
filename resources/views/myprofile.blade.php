<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="bg-primary h-25">
        <div class="container">
            <h1>My Profile</h1>
        </div>
    </header>

    <main>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nome Utente: {{ $name }} {{ $lastname }}</h5>
              <p class="card-text">{{ $description }}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Età: {{ $age }}</li>
              <li class="list-group-item">Email: {{ $email }}</li>
            </ul>
            <div class="card-body">
              <a href="http://127.0.0.1:8000/about-me" class="card-link">About me</a>
            </div>
          </div>
    </main>

    <footer>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>