<?php include(__DIR__ . '/../layout/html_header.blade.php'); ?>
        <!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvingut al Projecte MVC en PHP</title>
    <link href="/css/landing.css" rel="stylesheet"> <!-- Enllaç al CSS específic -->
</head>
<body>
<?php include(__DIR__ . '/../layout/nav.blade.php');?>

<header class="bg-blue-600 text-white text-center py-10">
    <h1 class="text-4xl font-bold">Benvingut al Projecte MVC en PHP</h1>
    <p class="mt-2 text-lg">Gestiona circuits de F1 i un catàleg de pel·lícules!</p>
</header>

<main class="max-w-4xl mx-auto p-4">
    <section class="my-10">
        <h2 class="text-3xl font-semibold text-center mb-5">Presentació del Projecte</h2>
        <p class="text-center mb-5">Aquesta aplicació permet gestionar dues seccions principals:</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6"> <!-- Canviat a 3 columnes -->
            <div class="bg-gray-100 rounded-lg shadow-lg p-4 flex flex-col">
                <h3 class="text-2xl font-bold text-center">
                    <a href="/films" class="hover:underline">Pel·lícules</a>
                </h3>
                <a href="/films">
                    <img src="../images/films-image.jpg" alt="Pel·lícules" class="w-full h-48 object-cover rounded mt-2">
                </a>
                <p class="text-center">Explora un catàleg de pel·lícules amb opcions per afegir, editar i eliminar títols.</p>
            </div>
            <div class="bg-gray-100 rounded-lg shadow-lg p-4 flex flex-col">
                <h3 class="text-2xl font-bold text-center">
                    <a href="/races" class="hover:underline">Carreres de Formula 1</a>
                </h3>
                <a href="/races">
                    <img src="../images/f1-image.jpg" alt="Carreres de F1" class="w-full h-48 object-cover rounded mt-2">
                </a>
                <p class="text-center">Accedeix a informació sobre les carreres, circuits, guanyadors i més.</p>
            </div>
            <div class="bg-gray-100 rounded-lg shadow-lg p-4 flex flex-col">
                <h3 class="text-2xl font-bold text-center">Proximament</h3>
                <img src="../images/upcoming-image.jpg" alt="Proximament" class="w-full h-48 object-cover rounded mt-2">
                <p class="text-center">Estem treballant en noves funcionalitats que milloraran l'experiència de l'usuari!</p>
            </div>
        </div>
    </section>
</main>

<?php include(__DIR__ . '/../layout/footer.blade.php');?>
</body>
</html>
