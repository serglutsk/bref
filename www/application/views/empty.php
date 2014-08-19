<?php defined('SYSPATH') OR die('No direct script access.');

?>


<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$description?>" />

        <?php foreach($styles as $style): ?>
            <link href="<?php echo URL::base(); ?>public/css/<?=$style?>.css"
                  rel="stylesheet" type="text/css" />
        <?php endforeach; ?>

        <title><?=$title?></title>
    </head>
    <body class="test">

    <?=$content?>

    <?php foreach($scripts as $script): ?>
        <script language="JavaScript" src="/public/js/<?=$script?>.js" type="text/javascript"></script>
    <?php endforeach; ?>

    </body>
</html>