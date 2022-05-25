<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Controle de Series</title>
</head>
<body>
<div class="container-md">
    <div class="jumbotron bg-secondary">
        <h1 class="p-5">Series</h1>
    </div>

    <a href="series/adicionar" class="btn btn-dark mb-2 mt-5">adicionar</a>

    <ul class="list-group">
        <?php foreach ($series as $serie): ?>
            <li class="list-group-item"><?= $serie ?> </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
