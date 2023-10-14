

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php

    $firstname = null;
    $phone = null;
    $password = null;
    if(isset($_POST['firstname']) && !empty($_POST['firstname']) && 
    isset($_POST['phone']) && !empty($_POST['phone']) &&
    isset($_POST['passwovd']) && !empty($_POST['password'])
    ){
        $firstname = $_POST['firstname'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        if(strlen($firstname)<6 || strlen($password) <6){
            echo "Xatolik firstname 6 tadan kam";
        }
        if($password[0] != '+'){
            echo "Xatolik - telefon nomer emas";
        }
        if(substr($phone, 1, 3) != '998'){
            echo "Xatolik - 998 telefon nomer emas";
        }
        if(strlen($phone) != 13 || ! is_numeric($phone, 1)){
            echo "xatolik";
        }
    }
?>

<div class="col-md-3">
<form method="post" action="form.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ism</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?$firstname?>" name="firstname" placeholder="Ismingiz">
  </div>

  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Telefon nomer</label>
    <input type="text" class="form-control" id="exampleInputPhone" value="<?$phone?>" name="phone" placeholder="Telefon nomer">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" value="<?$password?>" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>