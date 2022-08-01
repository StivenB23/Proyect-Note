<?php

use Stive\Notas\models\Note;
if (count($_POST)>0) {
    $title = $_POST['title']? $_POST['title']:'';
    $content = $_POST['content'];
    $uuid = $_POST['id'];
    $note = NOte::get($uuid);
    $note->setTitle($title);
    $note->setContent($content);
    $note->update();
}else if (isset($_GET['id'])) {
    $note = Note::get($_GET['id']);
} else {
   header('location: https://localhost/proyecto_notas/?view=home');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="src/views/resources/css/style.css">

</head>
<body>
<?php include 'resources/layouts/nav.php'; ?>

<form method="post" action="?view=view&id=<?php echo $note->getUUID()?>">
        <h1>Update Note</h1>
        <input type="hidden" name="id" value="<?php echo $note->getUUID();?>" >
        <label for="">Update title of note: </label>
        <input type="text" name="title" placeholder="Ingrese el titulo" value="<?php echo $note->getTitle() ?>">
        <label for="">Update content of note: </label>
        <textarea rows="20" cols="30" name="content"><?php echo $note->getContent(); ?></textarea>
        <button type="submit">Update Note</button>
    </form>
</body>
</html>