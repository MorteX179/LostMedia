<?php
$mediaFiles = scandir('media/');
echo "<section>";
echo "<h2>Lista plików w bazie:</h2>";
foreach ($mediaFiles as $file) {
    if ($file != '.' && $file != '..') {
        echo "<a href='media.php?file=$file'>$file</a><br>";
    }
}
echo "</section>";
?>
