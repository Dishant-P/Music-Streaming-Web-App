<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <title><?php echo pageTitle(); ?> | <?php echo siteName(); ?></title>
        <link rel="stylesheet" href = "<?php echo config("structure_path") . "/skeleton.css"; ?>">
        <link rel="stylesheet" href = "<?php echo config("structure_path") . "/normalize.css"; ?>">
        <link rel="stylesheet" href = "<?php echo config("structure_path") . "/style.css"; ?>">
        <script src="<?php echo siteURL() . "/" . config("structure_path") . "/main.js" ?>"></script>
    </head>
    <body class = "container" id = "wrapper">
        <header class = "row" id = "player">
            <section class = "twelve columns">
                <?php require config("components_path") . "/player.phtml"; ?>
            </section>
        </header>
        <main class = "row" id = "main">
            <section class = "three columns" id = "information">
                <?php require config("components_path") . "/information.phtml"; ?>
            </section>
            <section class = "nine columns" id = "content">
                <?php require config("components_path") . "/main.phtml"; ?>
            </section>
        </main>
        <footer class = "row">
            <section class = "twelve columns" id = "foot">
                <p><?php echo siteName() . " " . siteVersion(); ?><br>
                &copy;<?php echo date("Y") . "-" . (date("Y") + 1); ?>
                </p>
            </section>
        </footer>
    </body>
</html>
