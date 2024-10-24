<html lang="es">
<?php include(__DIR__ . '/../layout/html_header.blade.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pel·lícules</title>
    <link href="/css/pages.css" rel="stylesheet"> <!-- Enllaç al nou fitxer CSS -->
</head>
<body class="bg-gray-100 p-8">
<?php include(__DIR__ . '/../layout/nav.blade.php'); ?>
<div class="container"> <!-- Utilitza la classe container -->
    <h1>Pel·lícules</h1>
    <a href="/films/create" class="add-film-btn">Afegir una nova pel·lícula</a>
    <table>
        <thead>
        <tr class="table-header">
            <th>ID</th>
            <th>Títol</th>
            <th>Director</th>
            <th>Any</th>
            <th>Accions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($films)): ?>
        <tr>
            <td colspan="5" class="py-3 px-6 text-center">No hi ha pel·lícules disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($films as $film): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td><?= $film['id'] ?></td>
            <td><?= htmlspecialchars($film['name']) ?></td>
            <td><?= htmlspecialchars($film['director']) ?></td>
            <td><?= htmlspecialchars($film['year']) ?></td>
            <td class="text-center">
                <a href="/films/edit/<?= $film['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Editar</a>
                <a href="/films/delete/<?= $film['id'] ?>" class="text-red-500 hover:text-red-700">Eliminar</a>
                <a href="/films/show/<?= $film['id'] ?>" class="text-blue-500">Veure Detalls</a>
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
