<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Circuit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Editar Circuit</h1>
    <form action="/races/update" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($race->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nom:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($race->name) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mb-4">
            <label for="location" class="block text-gray-700">Ubicació:</label>
            <input type="text" name="location" value="<?= htmlspecialchars($race->location) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mb-4">
            <label for="date" class="block text-gray-700">Data:</label>
            <input type="date" name="date" value="<?= htmlspecialchars($race->date) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mb-4">
            <label for="winner" class="block text-gray-700">Guanyador:</label>
            <input type="text" name="winner" value="<?= htmlspecialchars($race->winner) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div class="mb-4">
            <label for="laps" class="block text-gray-700">Voltes:</label> <!-- Afegeix el camp Laps -->
            <input type="number" name="laps" value="<?= htmlspecialchars($race->laps) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Editar</button>
    </form>
    <a href="/races" class="text-gray-500 hover:underline mt-4 block">Tornar</a>
</div>
</body>
</html>
