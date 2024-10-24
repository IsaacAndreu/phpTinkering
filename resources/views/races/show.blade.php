<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($race->name) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4"><?= htmlspecialchars($race->name) ?></h1>

    <p class="mb-2"><strong>Lloc:</strong> <?= htmlspecialchars($race->location) ?></p>
    <p class="mb-2"><strong>Data:</strong> <?= htmlspecialchars($race->date) ?></p>
    <p class="mb-2"><strong>Guanyador:</strong> <?= htmlspecialchars($race->winner) ?></p>
    <p class="mb-2"><strong>Voltes:</strong> <?= htmlspecialchars($race->laps) ?></p> <!-- Afegeix aquí el camp Laps -->

    <div class="mt-4">
        <a href="/races/edit/<?= $race->id ?>" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-700">Editar</a>
        <form action="/races/destroy" method="POST" style="display:inline;">
            <input type="hidden" name="id" value="<?= $race->id ?>">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
        </form>
        <a href="/races" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tornar als circuits</a>
    </div>
</div>
</body>
</html>
