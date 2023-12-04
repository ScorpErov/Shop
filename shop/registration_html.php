<?php
require_once("header.php");
?> <div class="bob2">

       <div class="blok_massege">
        <?php
            if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])) {
                echo $_SESSION["error_messages"];
                unset($_SESSION["error_messages"]);
            }
            if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])) {
                echo $_SESSION["success_messages"];
                unset($_SESSION["success_messages"]);
            }
        ?>
    </div>
    <?php
        if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
    ?>
    <div class="vhod">
        <h2>Регистрация</h2>
        <form action="registration_php.php" method="post" name="form-register">
            <label for="fam">Фамилия:</label> <input name="fam" type="text" required><br>
            <label for="nam">Имя:</label> <input name="nam" type="text" required><br>
            <label for="otc">Отчество:</label> <input name="otc" type="text" required><br>
            <label for="login">Логин:</label> <input name="login" type="text" required><br>
            <label for="pochta">Адрес э. почты:</label> <input name="pochta" type="email" required><br>
            <label for="password">Пароль:</label> <input name="password" type="password" required><br>
            <label for="tpassword">Повторите пароль:</label> <input name="tpassword" type="password" required><br>
            <input type="submit" name="btn" value="Зарегестрироваться" class="buton2"><br><a href="kabinet.php" required>Войти</a>
        </form>
    </div>
    </div>
    <div class="otsup"></div>
    <?php
        }else{
    ?>
    <div id="authorized">
        <h2>Вы уже зарегестрированы</h2>
    </div> 
   </div>
<?php
        }
require_once("footer.php");
?>