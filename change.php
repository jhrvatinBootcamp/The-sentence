<?php
    include 'header.php';
    include 'nav.php';
?>



<div id="login-container">
    <div id="poruke1">

    <?php
    //<---- dodao sam novi <div> id poruke1, u kojem ce se prema kodu success stvari prikazivati text (trebat ce dotjerat) ---->
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        if (strpos($url,'good=changed') !== false){
        echo 'Your password is changed!';
        }

    //<---------------------------------------------------------------------------------------------------------------------->
    ?>
    </div>

    <div id="poruke">

        <?php
            //<---- dodao sam novi <div> id poruke, u kojem ce se prema kodu errora prikazivati text errora (trebat ce dotjerat) ---->
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

            if (strpos($url,'error=missmatch1') !== false){
            echo 'Old password incorrect!';
            }
            if (strpos($url,'error=missmatch2') !== false){
            echo 'New password missmatch!';
            }
            //<---------------------------------------------------------------------------------------------------------------------->
        ?>
    </div>

    <form action="include/change.include.php" method="POST" id="form-container">
        <div class="input-wrapper">
            <div class="icon-wrapper">
                <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
            </div>

            <input type="password" class="input-login" name="password" placeholder="Old Password">
        </div>

        <div class="input-wrapper">
            <div class="icon-wrapper">
                <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
            </div>

            <input type="password" class="input-login" name="password1" placeholder="New password">
        </div>

        <div class="input-wrapper">
            <div class="icon-wrapper">
                <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
            </div>
            <input type="password" class="input-login" name="password2" placeholder="Confirm new password">
        </div>

        <button type="submit" id="submit-button">Change password</button>
    </form>

</div>

<?php
    include 'footer.php';
?>
