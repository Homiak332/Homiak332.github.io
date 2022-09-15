<?php 
    session_start();
    require("../php/login.php"); 


    if(isset($_SESSION['user']['UserAdmin'])){

        if ($_SESSION['user']['UserAdmin'] == 1) {
            echo "
            <header class=\"header\">
            <div class=\"container\" style=\"background-color: #e5f6fe;\">
                        <a href=\"admin_page.php\" style=\"width: 10%;\">
                            <img src=\"/../logo/logo.jpg\" class=\"logo\" alt=\"Logo\">
                        </a>
                        <p class=\"welcome-text\"> Имя: ".$_SESSION['user']['UserName'] ."</p>
                        <nav style=\"width: 50%;\">
    
                        <a href=\"../views/admin_page.php\" class=\"menu-link\">ВСЕ ЗАЯВКИ</a>
                        <a href=\"../php/logout.php\" class=\"menu-link\">ВЫЙТИ</a>
                        </nav>
            
                        
            </div>
        </header>
            
            ";
        } 
        if($_SESSION['user']['UserAdmin'] == 0){
    
            echo "
            <header class=\"header\">
            <div class=\"container\" style=\"background-color: #e5f6fe;\">
            
                        <a href=\"Auth.php\" style=\"width: 10%;\" >
                            <img src=\"/../logo/logo.jpg\" class=\"logo\" alt=\"Logo\">
                        </a>
            
                        
                        <nav style=\"width: 70%;\">
                        <a href=\"../views/new_demand.php\" class=\"menu-link\">СОЗДАТЬ ЗАЯВКУ</a>
                        <a href=\"../views/demand.php\" class=\"menu-link\">МОИ ЗАЯВКИ</a>
                        <a href=\"../php/logout.php\" class=\"menu-link\">ВЫЙТИ</a>
                        </nav>
            
                        
            </div>
        </header>
            ";
        } 


    } else {


        echo "
        
        <header class=\"header\">
        <div class=\"container\" style=\"background-color: #e5f6fe;\">
                    <a href=\"index.php\" style=\"width: 10%;\">
                        <img src=\"/../logo/logo.jpg\" class=\"logo\" alt=\"Logo\">
                    </a>
                    
                    <nav style=\"width: 40%;\">
                
                        <a href=\"reg.php\" class=\"menu-link\">РЕГИСТРАЦИЯ</a>
                        <a href=\"log.php\" class=\"menu-link\">ВХОД</a>
                    </nav>
               
                    
        </div>
    </header>
        
        ";
    }
    

    


    
    
    ?>



