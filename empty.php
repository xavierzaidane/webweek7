<?php
$myArray = array(); // Array kosong

// Pengecekan apakah array kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.<br>";
} else {
    echo "Array terdefinisi dan tidak kosong.<br>";
}

// Pengecekan apakah variabel nonExistentVar terdefinisi atau kosong
if (!isset($nonExistentVar) || empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>
