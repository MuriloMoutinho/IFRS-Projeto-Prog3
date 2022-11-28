<?php 
    require_once __DIR__."/vendor/autoload.php";
    
if(isset($_POST['submit'])){


    $u = new User();
    $u->setEmail($_POST['email']);
    $u->setSenha($_POST['password']);
    $u->setNome($_POST['name']);
    $u->setTurma($_POST['turma']);

    $u->setBio($_POST['bio']);
    $u->setFoto($_FILES['foto']['name']);

    if($u->validate()){

        $u->save();
        header("location: login.php");
    }else{
        header("location: register.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="css/commun.css">
    <link rel="stylesheet" href="css/register.css">
    <title>Sign up  </title>
</head>
<body>
<div class="container-register">
        <div class="register-all-box">
            <div class="register-box">
            
                <div class="title-register">
                    <h1>Sign up</h1>
                </div>
                <div class="input-box">
                    <form action="register.php" method="post" class="column" enctype="multipart/form-data">
                        <div class="input-text">
                            <label>User Name <input type="text" name='name' minlength="2" maxlength="50" required></label>
                            <label>Email <input type="email" name='email' required></label>
                            <label>Password <input type="password" minlength="3" name='password' required></label>
                            <div class="select">
                            <label>Enter your class or position in IFRS<br> <select name='turma' required>

                                <option value="" disabled selected >Select...</option>

                                <?php 
                    
                                    $conexao = new MySQL();
                                    $sql = "SELECT * FROM turma order by id asc";
                                    $turmas = $conexao->consulta($sql);
                                    foreach($turmas as $turma){
                                    echo "<option value='{$turma['id']}'>{$turma['curso']}</option>";
                                    }
                                ?>     
                                </select>
                            </label>
                            </div>
                            
                            <div class="bio-input">
                                <label for='bio'>Biografia:</label>
                                <textarea name="bio" id='id' cols="20" rows="3" >Hi! I am using Iframe.</textarea>
                            </div>

                            <label for="foto">Photo</label>A
                            <div class="user-photo">
                                <input type='file' accept="image/*" name='foto'>
                            </div> 
                        </div>

                        <div class="input-button">
                            <div class="input-register">
                                <input type="submit" value="register" name='submit'>
                            </div>
                            <div class="voltar">
                                <a href="index.php">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</body>
</html>