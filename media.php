<?php
if(isset($_GET['file'])) {
    $fileName = $_GET['file'];
    $filePath = 'media/' . $fileName;
    
    // Pobierz rozszerzenie pliku
    $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);

    // Obsługa wyświetlania obrazków
    if (in_array($fileExtension, array("jpg", "jpeg", "png", "gif","JPG", "JPEG", "PNG", "GIF"))) {
        echo "<section>";
        echo "<h2>Zawartość pliku: $fileName</h2>";
        echo "<img src='$filePath' alt='$fileName'>";
        echo "</section>";
    } else {
        // Obsługa wyświetlania innych typów plików jako tekst
        if (file_exists($filePath)) {
            echo "<section>";
            echo "<h2>Zawartość pliku: $fileName</h2>";
            echo "<pre>";
            readfile($filePath);
            echo "</pre>";
            echo "</section>";
        } else {
            echo "Plik nie istnieje.";
        }
    }
} else {
    echo "Brak wybranego pliku.";
}
?>
