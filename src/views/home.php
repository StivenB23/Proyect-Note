<?php

use Stive\Notas\models\Note;
    $notes = Note::getAll();
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
    <div class="conteiner-notes">
        <?php 
            foreach ($notes as $note) {
        ?>
                <a href="?view=view&id=<?php echo $note->getUUID(); ?>" class="note" >
                    <h2><?php echo $note->getTitle(); ?></h2>
                    <hr>
                    <div class="note-content">
                        <div class=""><?php echo $note->getContent(); ?></div>
                    </div>
                </a>
        <?php
        }
        ?>
    </div>
</body>
</html>