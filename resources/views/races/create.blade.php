<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegir Nou Circuit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Afegir Nou Circuit</h1>
    <form action="/races/store" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nom del Circuit:</label>
            <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introduïu el nom del circuit">
        </div>

        <div class="mb-4">
            <label for="location" class="block text-sm font-medium text-gray-700">Ubicació:</label>
            <input type="text" name="location" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introduïu la ubicació del circuit">
        </div>

        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Data de la Carrera:</label>
            <input type="date" name="date" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        </div>

        <div class="mb-4">
            <label for="winner" class="block text-sm font-medium text-gray-700">Guanyador:</label>
            <input type="text" name="winner" class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introduïu el guanyador (opcional)">
        </div>

        <div class="mb-4">
            <label for="laps" class="block text-sm font-medium text-gray-700">Voltes:</label>
            <input type="number" name="laps" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Introduïu el nombre de voltes">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Afegir Nou Circuit</button>
    </form>
</div>
</body>
</html>
