<!DOCTYPE html>
<html>
<head>
    <title>Pisipildid</title>
    <style>
        .thumbnail {
            max-width: 200px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
$directory = "images/"; // Change this to your image directory
$images = glob($directory . "*.jpg"); // Get all jpg files from the directory

$num_columns = 3; // Veergude arv
$num_images = count($images);
$num_rows = ceil($num_images / $num_columns);

for ($i = 0; $i < $num_rows; $i++) {
    echo "<div style='display:flex;'>";

    for ($j = 0; $j < $num_columns; $j++) {
        $index = $i * $num_columns + $j;
        if ($index < $num_images) {
            echo "<img class='thumbnail' src='" . $images[$index] . "' onclick='displayImage(\"" . $images[$index] . "\")'>";
        }
    }

    echo "</div>";
}
?>

<div id="overlay" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5);">
    <img id="fullImage" style="max-width: 80%; max-height: 80%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
</div>

<script>
function displayImage(src) {
    var overlay = document.getElementById("overlay");
    var fullImage = document.getElementById("fullImage");
    fullImage.src = src;
    overlay.style.display = "block";
}

document.getElementById("overlay").addEventListener("click", function() {
    this.style.display = "none";
});
</script>

</body>
</html>
