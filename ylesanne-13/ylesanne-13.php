<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 13</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    Vali JPG või JPEG fail üleslaadimiseks:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Laadi üles" name="submit">
</form>

<?php
$target_dir = "uploads/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "jpeg") {
        echo "Ainult JPG ja JPEG formaadid on lubatud!";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Fail ". basename( $_FILES["fileToUpload"]["name"]). " on üles laetud.";
        } else {
            echo "Üleslaadimisel tekkis viga.";
        }
    }
}

?>

<?php
$dir = "uploads/";

if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      if($file != "." && $file != "..") {
        echo "<a href='$dir$file' target='_blank'><img src='$dir$file' height='100' /></a>";
      }
    }
    closedir($dh);
  }
}
?>

</body>
</html>
