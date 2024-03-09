<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    // ตรวจสอบว่ามีการส่งคำค้นหาหรือไม่
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
        $results = [];

        // ค้นหาไฟล์ที่ตรงกับคำค้นหาในโฟลเดอร์ uploads/
        $files = scandir('uploads/');
        foreach ($files as $file) {
            // ตรวจสอบว่าชื่อไฟล์มีคำค้นหาหรือไม่
            if (strpos($file, $query) !== false) {
                $results[] = $file;
            }
        }

        // แสดงรายการไฟล์ที่ตรงกับคำค้นหา
        if (!empty($results)) {
            echo "<ul>";
            foreach ($results as $result) {
                echo "<li><a href='uploads/$result' download>$result</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No matching files found.</p>";
        }
    } else {
        echo "<p>No search query specified.</p>";
    }
    ?>
</body>
</html>