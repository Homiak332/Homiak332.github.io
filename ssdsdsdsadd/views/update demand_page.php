<?php 
    session_start();
    require("../php/login.php");?>
<!DOCTYPE html>
<html lang="en">
<?php include("particles/head.php"); ?>
<?php require("particles/header.php"); ?>
<?php include("particles/welcome_section.php");?>
<body>
<section class="contacts">
			<div class="container">
				<h2 class="title">Изменение заявки</h2>
				<form class="contacts-form" enctype="multipart/form-data" action="../php/update_demand.php" method="post" >
					<label >Название</label>
                    <input type="hidden" name="DemandID" class="contacts-form-field" value = "<?= $_GET['DemandID'] ?>" required>
					<input type="text" name="DemandTitle" placeholder="Название" class="contacts-form-field" required>
                    <label >Описание</label>
                    <input type="text" name="DemandDescription" placeholder="Описание"  class="contacts-form-field" required>
                    <option>Категория</option>
                    <?php include("../php/cat.php"); ?>
					<p ALIGN="left">Выберите фото</p>
                    <input type="file" accept="image/*" id="text" name="DemandIMG" placeholder="" class="contacts-form-field" >
					<button class="contacts-form-button" type ="submit" name ="update_demand" >Изменить заявку</button>
                    <?php 
                    if(isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message'] .'</p>';
                    }
                    unset($_SESSION['message']);    
                    ?>
				</form>
			</div>
		</section>
</body>
<?php include("particles/footer.php"); ?>
</html> 