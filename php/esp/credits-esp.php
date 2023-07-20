<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créditos</title>
    <link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
</head>

<style>
    * {

        font-family: "Helvetica", sans-serif;
    }

    .fusion-text {
        padding-left: 100px;
        padding-right: 100px;
    }

    .fusion-text h3 {
        font-size: 20px;
    }
</style>

<body>

<?php include '../../functions/getFooterTexts.php' ?>

<div class="fusion-builder-row fusion-row" style="margin-bottom:50px;">
    <div style="margin-top:50px;">
        <div class="fusion-column-wrapper"
             style="padding: 0px; background-position: left top; background-repeat: no-repeat; background-size: cover; height: auto;">
            <div class="fusion-text">
                <h3 style="text-align: center; --fontSize:20; line-height: 1.3; --minFontSize:20;"><strong>
                Créditos</strong></h3>

                <?php echo getFooterTexts('../../files/esp/credits-esp.txt') ?>
            </div>
        </div>

</body>
</html>