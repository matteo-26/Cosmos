

<?php

include 'check-login.php';

?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>COSMOS Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard-homepage.css">
    <script src="https://kit.fontawesome.com/1030d32312.js" crossorigin="anonymous"></script>
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"-->
    <!--          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <!--    <link rel="stylesheet" href="../css/style.css">-->
    <!--    <link rel="stylesheet" href="../css/dashboard_old.css">-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/q4g9xf6hmegyk4ait2zefclrkuit1w92oa1lo3rg7y619op4/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>

</head>
<body>
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">COSMOS</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="dashboard-homepage.php">
                <i class='bx bx-book-content'></i>
                <span class="links_name">Homepage</span>
            </a>
            <span class="tooltip">Homepage</span>
        </li>
        <li>
            <a href="dashboard-newsletter.php">
                <i class='bx bx-news'></i>
                <span class="links_name">Newsletter</span>
            </a>
            <span class="tooltip">Newsletter</span>
        </li>
        <li>
            <a href="dashboard-contacto.php">
                <i class='bx bxs-chat'></i>
                <span class="links_name">Contacts</span>
            </a>
            <span class="tooltip">Contacts</span>
        </li>
        <li>
            <a href="dashboard-estudio.php">
                <i class='bx bx-male'></i>
                <span class="links_name">Office</span>
            </a>
            <span class="tooltip">Office</span>
        </li>
        <li>
            <a href="dashboard-project.php">
                <i class="fa-solid fa-diagram-project"></i>
                <span class="links_name">Projects</span>
            </a>
            <span class="tooltip">Projects</span>
        </li>
        <li>
            <p>
                &nbsp
            </p>
        </li>
        <li>
            <a href="dashboard-terms-of-use.php">
                <i class='bx bx-columns'></i>
                <span class="links_name">Terms of use</span>
            </a>
            <span class="tooltip">Terms of use</span>
        </li>
        <li>
            <a href="dashboard-privacy-cookie-policy.php">
                <i class='bx bx-cookie'></i>
                <span class="links_name">Privacy & Cookies Policy</span>
            </a>
            <span class="tooltip">Privacy & Cookies Policy</span>
        </li>
        <li>
            <a href="dashboard-credits.php">
                <i class='bx bxs-face'></i>
                <span class="links_name">Credits</span>
            </a>
            <span class="tooltip">Credits</span>
        </li>
        <li>
            <a href="dashboard-all-rights-reserved.php">
                <i class='bx bx-check'></i>
                <span class="links_name">All Rights Reserved</span>
            </a>
            <span class="tooltip">All Rights Reserved</span>
        </li>
    </ul>
</div>

<!--page start-->
<?php include '../functions/getContactInformation.php' ?>

<section class="home-section">
    <div class="text">Dashboard - Contacts</div>

    <BR>

    <hr class="dividingLine">
    <div class="headline">Update Contact Information</div>

    <textarea id="contacto-information" class="terms-of-use-textarea"
              placeholder="add some text here (Contact Information)"><?php echo getContactoInformation("../files/contacto-information.txt") ?></textarea>
    <BR>

    <button class="saveButton" onclick="updateContactInformation()">
        Save
    </button>

    <a href="../php/contacto.php" class="openPageButton">Open Page</a>

    <script>
        tinymce.init({
            selector: '#contacto-information',
            plugins: [
                'advlist', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | table help'
        });
    </script>

</section>
<!--page end-->

<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange();
    });

    function menuBtnChange() {
        if (sidebar.classList.contains("open")) {
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else {
            closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    }

    function updateContactInformation() {
        let myContent = tinymce.get("contacto-information").getContent();

        if (myContent === "") {
            alert("please enter some text");
            return;
        }

        $.ajax({
            url: "../functions/updateContactInformation.php",
            type: "POST",
            data: {functionCall: "update", text: myContent},
            success: function (result) {
                // window.localStorage.clear();
                window.location.reload();
            }
        });
    }

</script>
</body>
</html>
