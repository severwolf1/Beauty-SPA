<?php
    session_start();
    $online = $_SESSION['online'];
    $id = $_SESSION['id'];
    $id_serv = $_GET['id'];
    $edit = $_GET['edit'];
    $id_sot = $_GET['id_sot'];
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];
    $role = $_SESSION['role'];
    /*if ($online == 0 || $type != "klient")
        header('Location: kabinet_lk.php ');  */     
        
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" media="screen,projection" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/img/logo.png" type="image/png">
    <title>Регистрация</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                        <div class="card" style="width: 50%; margin: auto; margin-top: 2%; margin-bottom: 1%; border-radius: 20px; text-align: center;">
                            <div class="card-body">
                                <h5 class="card-title">Проверка данных на запись</h5>
                                <hr>
                                <small style="color: red" id="error"></small>
                                <p></p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">ФИО</span>
                                    </div>
                                    <input type="text" id="name" value="<?php echo $name; ?>" class="form-control" placeholder="Название" aria-label="Название">
                                </div>  
                                   
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Номер телефона</span>
                                    </div>
                                    <input type="text" id="phone" value="<?php echo $phone; ?>" class="form-control" placeholder="+7-(***)-***-****" aria-label="Номер телефона">
                                </div>  
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">E-mail</span>
                                    </div>
                                    <input type="text" id="email" value="<?php echo $email; ?>" class="form-control" placeholder="example@example.com" aria-label="E-mail">
                                </div>   
                                
                                <a href="kabinet_lk.php"><button type="button" class="btn btn-outline-secondary">НАЗАД</button></a>
                                <button type="button" id="done" class="btn btn-outline-success">ЗАВЕРШИТЬ</button>
                            </div>
                        </div>
                    
            </div>
        </div>
    </div>
    <script>
    function done() {
            $.ajax({
                url:"newKlient.php",
                method:"POST",
                data: { 
                    name: document.getElementById("name").value , 
                    phone: document.getElementById("phone").value, 
                    email: document.getElementById("email").value,
                    id: <?php echo $id; ?>,
                    id_sot: <?php echo $id_sot; ?>,
                    id_serv: <?php echo $id_serv; ?>,
                    <?php if (!empty($edit)) echo "edit: ".$edit; ?>
                }, 
                success: function(data) {                    
                    if (data == "success")
                        location.href = 'kabinet_lk.php';
                    else
                        error.innerHTML = data;
                },
                failure: function(data) { 
                    alert('Got an error dude');
                }});
        }
        document.getElementById("done").onclick =  function() {
        if (document.getElementById("name").value == "" ||
            document.getElementById("phone").value == "" || 
            document.getElementById("email").value == "")
            alert ("Заполните все поля!");
        else
            done();
        }
    </script>
</body>
</html>