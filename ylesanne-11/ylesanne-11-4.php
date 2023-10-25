<?php
$fileSize = filesize('andmefail.txt');

if ($fileSize > 200) {
    unlink('andmefail.txt');
    echo "Fail on kustutatud, sest selle suurus oli suurem kui 200 baiti.";
} else {
    echo "Fail ei vasta kustutamise kriteeriumile.";
}
?>
