<html lang="es">
<?php include(__DIR__ . '/../layout/html_header.blade.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuits de F1</title>
    <link href="/css/pages.css" rel="stylesheet"> <!-- Enllaç al nou fitxer CSS per a races -->
</head>
<body class="bg-gray-100 p-8">
<?php include(__DIR__ . '/../layout/nav.blade.php'); ?>
<div class="container"> <!-- Utilitza la classe container -->
    <h1>Circuits de F1</h1>
    <a href="/races/create" class="add-race-btn">Afegir un nou circuit</a>
    <table>
        <thead>
        <tr class="table-header">
            <th>ID</th>
            <th>Nom</th>
            <th>Ubicació</th>
            <th>Data</th>
            <th>Guanyador</th>
            <th>Voltes</th>
            <th>Accions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($races)): ?>
        <tr>
            <td colspan="7" class="py-3 px-6 text-center">No hi ha circuits disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($races as $race): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td><?= $race['id'] ?></td>
            <td><?= htmlspecialchars($race['name']) ?></td>
            <td><?= htmlspecialchars($race['location']) ?></td>
            <td><?= htmlspecialchars($race['date']) ?></td>
            <td><?= htmlspecialchars($race['winner']) ?></td>
            <td><?= htmlspecialchars($race['laps']) ?></td>
            <td class="text-center">
                <a href="/races/edit/<?= $race['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Editar</a>
                <a href="/races/delete/<?= $race['id'] ?>" class="text-red-500 hover:text-red-700">Eliminar</a>
                <a href="/races/show/<?= $race['id'] ?>" class="text-blue-500">Veure Detalls</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?php include(__DIR__ . '/../layout/footer.blade.php'); ?>
</body>
</html>
