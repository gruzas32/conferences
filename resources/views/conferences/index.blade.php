<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Konferencijų Sąrašas</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/">Pagrindinis</a></li>
        <li><a href="/login">Prisijungti</a></li>
    </ul>
</nav>

<div>
    <h1>Konferencijų Sąrašas</h1>

    <?php foreach ($conferences as $conference): ?>
    <div>
        <h2><?= $conference->title ?></h2>
        <p><?= $conference->description ?></p>
        <p><?= $conference->date ?></p>
    </div>
    <?php endforeach; ?>
</div>
</body>
</html>
