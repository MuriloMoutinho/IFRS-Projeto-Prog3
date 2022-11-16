<?php
    require 'assets.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/commun.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>Profile</title>
</head>
<body>
    
<?php
echo $header;
?>

    <main>


        <div class="container">

            <div class="flex-row-short">

                <img src="assets/istockphoto-1016744034-170667a.jpg"  class="profile-photo" alt="Foto de Perfil">
                
                <div class="column">
                    <h2>Nome Perfil</h2>
                    <span>Turma a1</span>
                    <div>    
                        <img src="assets/home.png" alt="Likes" class="like">
                        xx
                    </div>
                </div>

            </div>

            <div class="profile-bio">
                <p>asasjdfsjdkjvndcjkvnxjkcnvdfv</p>
            </div>

        </div>

        <hr class="division">

    <div class="container">
        <div class="container-posts">

            <div class="post">
                
                <div class="post-img">
                    <img class="img-format" src="assets/img.jpg" alt="">
                </div>
                <img src="assets/home.png" class="like" alt="">

            </div>

            <div class="post">
                
                <div class="post-img">
                    <img class="img-format" src="assets/img.jpg" alt="">
                </div>
                <img src="assets/home.png" class="like" alt="">

            </div>    
            <div class="post">
                
                <div class="post-img">
                    <img class="img-format" src="assets/img.jpg" alt="">
                </div>
                <img src="assets/home.png" class="like" alt="">

            </div>

        </div>
</div>


    </main>


    <div class="footer-fake">
    </div>
    <?php
    echo $footer;
    ?>   

</body>
</html>