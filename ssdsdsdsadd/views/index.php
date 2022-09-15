<?php
session_start();
?>
<?php require("../php/connect.php");?>
<!DOCTYPE html>
<html lang="en">
<?php require("particles/head.php"); ?>
<body>

    <?php require("particles/header.php"); ?>
    <?php require("particles/welcome_section.php"); ?>

    <section class="articles articles-text">
        <div class="container">
            <p class="title">Решено более 0 городских проблем</p>
            <div class="textcols articles">
                <div class="textcols-item">
                    <img src = "../image/1.jpg" class="image">
                    <p>Наименование заявки: Благоустройство парка им. Горького</p>
                    <p>Тип заявки: Благоустройство</p>
                    <p>Дата: 07.08.2021</p>
                </div>
                <div class="textcols-item">
                    <img src = "../image/2.jpg" class="image">
                    <p>Наименование заявки: Установка велосипедных дорожек на ул. Трубецкой</p>
                    <p>Тип заявки: Благоустройство</p>
                    <p>Дата: 13.05.2019</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts">
        <div class="container">
            <h2 class="title">Оставьте заявку на устранение проблем в городе прямо сейчас</h2>
            <form class="contacts-form" method="post" action="/">
            
                <button class="contacts-form-button" type="submit">Оставить заявку</button>
            </form>
        </div>
    </section>
        
    <!---->
</body>
<?php include("particles/footer.php"); ?>
</html>