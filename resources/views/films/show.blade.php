<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($film->name) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4"><?= htmlspecialchars($film->name) ?></h1>
    <p class="mb-2"><strong>Director:</strong> <?= htmlspecialchars($film->director) ?></p>
    <p class="mb-2"><strong>Any de llançament:</strong> <?= htmlspecialchars($film->year) ?></p>

    <div class="mt-4">
        <a href="/films/edit/<?= $film->id ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Editar</a>
        <form action="/films/destroy" method="POST" style="display:inline;">
            <input type="hidden" name="id" value="<?= $film->id ?>">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
        </form>
        <a href="/films" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tornar a les pel·licules</a>
    </div>
</div>
</body>
</html>
