<?php
    // THIS FILES MUST CONTAIN ALL THE CONFIGURATION REQUIRED
    // FOR THE WEB APP.

    // CONFIG IS ARRAY TO STORE THE CFG
    function config($key = "") {
        $config = array(
            // SITE DETAILS
            "name" => "Music MD",
            "url" => "http://localhost/Music-Streaming-Web-App",
            "version" => "v0.0",

            // PATHS FOR FOLDERS FROM index.php
            // STRUCTURE STORES THE HTML OVERLAY OF THE APP
            "structure_path" => "structure",
            // COMPONENT STORES THE COMPONENT SPECIFIC DATA
            "components_path" => "components",
     );

        // isset CHECKS IT THE VALUES REQUEST IS NOT EMPTY OR FALSE TO AVOID ERROR
        return isset($config[$key]) ? $config[$key] : null;
    }
 ?>
