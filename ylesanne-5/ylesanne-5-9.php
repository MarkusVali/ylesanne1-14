<?php
$imageNames = array("prentice.jpg", "freeland.jpg", "peterus.jpg", "devlin.jpg", "gabriel.jpg", "pete.jpg");

echo "<div class='container'><div class='row'>";
foreach ($imageNames as $imageName) {
    echo "<div class='col-md-2'>";
    echo "<img src='imgage/$imageName' class='img-thumbnail' alt='$imageName' width='150' height='150'>";
    echo "</div>";
}
echo "</div></div>";
?>