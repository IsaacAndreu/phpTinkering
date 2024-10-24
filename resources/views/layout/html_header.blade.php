<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Benvingut'; ?></title> <!-- Títol per defecte -->
    <link rel="stylesheet" href="../css/layout.css"> <!-- Enllaça aquí el teu fitxer CSS -->
</head>
<body>



<div class="content"> <!-- Contingut principal -->
    <?php echo isset($content) ? $content : ''; ?> <!-- Aquí s'inserirà el contingut de la vista -->
</div>



</body>
</html>
