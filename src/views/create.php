<?php

use Stive\Notas\models\Note;


if (count($_POST)>0){
    $title= $_POST['title'];
    $content= $_POST['content'];
    $note = new Note($title, $content);
    $note->save();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/views/resources/css/style.css">

</head>
<body>
    <?php include 'resources/layouts/nav.php'; ?>
    <form method="post" action="?view=create">
        <h3>Create Note</h3>
        <label for="">Title of note: </label>
        <input type="text" name="title" placeholder="Promise...">
        <label for="">Content of note: </label>
        <textarea rows="20" cols="40" name="content" >Contenido</textarea>
        <button type="submit">Create Note</button>
    </form>
</body>
</html>