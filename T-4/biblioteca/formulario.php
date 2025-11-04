<?php
 include_once 'Libro.php';
 include_once './validator/Validator.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $paginas = (int) $_POST['paginas'] ?? '';
    
    try {
        (new Validator($titulo, 'titulo'))->require()->validateField();
    } catch (ValidatorException $e) {
        $errors[] = $e->getMessage();
    }
    
    try {
        (new Validator($autor, 'autor'))->require()->validateField();
    } catch (ValidatorException $e) {
        $errors[] = $e->getMessage();
    }
    
    try {
        (new Validator($paginas, 'paginas'))->require()->validatePages();
    } catch (ValidatorException $e) {
        $errors[] = $e->getMessage();
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="/style/formulario.css">

</head>
<body>
    <?php
      if (empty($errors)) { 
         header('Location: status.php');
         exit;
        
        ?>
        <form method="post">
        <input type="hidden" name="id">

        <label>
            titulo de la pelicula
            <input type="text" name="titulo">
        </label>

        <label>
            autor
            <input type="text" name="autor">
        </label>

        <label>
            paginas
            <input type="number" name="paginas">
        </label>
        <button type="submit" value="ok">enviar</button>
     </form>
    <?php } else {
    ?> 

<form method="post">
        <input type="hidden" name="id">

        <label>
            titulo de la pelicula
            <input type="text" name="titulo">
        </label>

        <label>
            autor
            <input type="text" name="autor">
        </label>

        <label>
            paginas
            <input type="number" name="paginas">
        </label>
        <button type="submit" value="ok">enviar</button>
     </form>
    <ul class="ul_errors">
        <?php
        foreach ($errors as $error) { ?>
         <li><?= $error ?></li>
       <?php } ?>
    </ul>
    <?php } ?>
</body>
</html>