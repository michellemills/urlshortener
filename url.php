<?php
echo phpinfo();
$short_url = $_GET["url"];

if ($short_url === "1234") {
    header('Location: https://evanjarrett.com');
}
