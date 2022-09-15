<?php session_start();?>
<?php require("../php/login.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require("particles/head.php"); ?>
<?php require("particles/header.php"); ?>
<?php require("particles/welcome_section.php"); ?>
<body>
    <h2 class="title">Авторизация</h2>
    <form class="contacts-form" action="../php/login.php" method ="post">
        <label >Логин</label>
        <input type="hidden" name="UserAdmin" class="contacts-form-field" value = "<?= $_SESSION['user']['UserAdmin'] ?>" required>
		<input type="text" name="UserLogin" placeholder="Логин" class="contacts-form-field">
		<label >Пароль</label>
		<input type="password" name="UserPassword" placeholder="Password" class="contacts-form-field"></input>
		<button class="contacts-form-button" type ="submit" name ="log_in">Войти</button>
        <div id="vk_auth"></div>
        <script type="text/javascript">
  
            VK.Widgets.Auth("vk_auth", {authUrl: "../php/login.php"});
        </script>
        <?php 
                    if(isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message'] .'</p>';
                    }
                    unset($_SESSION['message']);     
        ?>
	</form>
    <!---->
</body>
<?php include("particles/footer.php"); ?>
</html>