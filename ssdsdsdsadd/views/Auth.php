
<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include("particles/head.php"); ?>
<body>
<?php include("particles/header.php"); ?>


    <section class="welcome" >
        <p class="welcome-text"> ID пользователя: <?= $_SESSION['user']['UserID'] ?></p>
        <p class="welcome-text"> Имя: <?= $_SESSION['user']['UserName'] ?></p>
        <p class="welcome-text">Фамилия: <?= $_SESSION['user']['UserSurname'] ?></p>
        <p class="welcome-tex">Логин: <?= $_SESSION['user']['UserLogin'] ?></p>
        <p class="welcome-text">Почта: <?= $_SESSION['user']['UserEmail'] ?></p>
        <p class="welcome-text"> Тип пользователя: <?= $_SESSION['user']['UserAdmin'] ?></p>
        </div>
    </section>
    <section class ="container">
    <?php
    if(isset($_SESSION['message'])){
        echo '<p class="msg">' . $_SESSION['message'] .'</p>';
        }
        unset($_SESSION['message']);    
        ?>
    </section>
    <!---->
</body>

<?php
        if($UserAdmin === 1){
            header('Location: ../views/admin_page.php');
        }
        ?>


<?php include("particles/footer.php"); ?>
</html>