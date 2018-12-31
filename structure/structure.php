<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo pageTitle(); ?> | <?php echo siteName(); ?></title>
        <link rel="stylesheet" href="<?php echo siteURL() . "/" . config("structure_path") . "/style.css"; ?>">
        <script src="<?php echo siteURL() . "/" . config("structure_path") . "/main.js" ?>"></script>
    </head>
    <body id = "wrapper">
        <header id = "player">
            <?php require config("components_path") . "/player.phtml"; ?>
        </header>
        <section id = "information">
            <?php require config("components_path") . "/information.phtml"; ?>
        </section>
        <main id = "content">
            <?php require config("components_path") . "/main.phtml"; ?>
        </main>
        <footer>
            <p><?php echo siteName() . " " . siteVersion(); ?></p>
            <p>&copy;<?php echo date("Y") . "-" . (date("Y") + 1); ?></p>
        </footer>
    </body>
</html>
