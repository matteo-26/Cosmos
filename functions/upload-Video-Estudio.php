<?php
$target_dir = "../estudio-video/";
$target_file = $target_dir . basename("video-estudio" . ".mp4");
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submitVideo"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        #echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } /*else {
        echo "File is not an image.";
        $uploadOk = 0;
    }*/
}

//

// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists. You can not upload the same Video";
//    $uploadOk = 0;
//}

//// Check file size
//if ($_FILES["fileToUpload"]["size"] > 1000000) {
//    echo "Sorry, your file is too large.";
//    $uploadOk = 0;
//}

// Allow certain file formats
if ($imageFileType != "mp4") {
    echo "Sorry, only mp4 files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
//    echo "Your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//        echo "Upload successfully (" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . ")";
        ?>
        <a id="goBack" href="../dashboard/dashboard-estudio.php">Go Back</a>

        <script>
            var elm = document.getElementById('goBack');
            elm.click();
            document.getElementById('thisLink').click();

        </script>
        <?php

    } else {
        echo "There was an error uploading your file.";
    }
}

?>
