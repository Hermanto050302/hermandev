<?php   
include 'include/header.php';
?>
<style>
    body {
        background-color: #eee;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh
    }

    .card {
        width: 400px;
        padding: 20px;
        border: none
    }

    .account {
        font-weight: 500;
        font-size: 17px
    }

    .contact {
        font-size: 13px
    }

    .form-control {
        text-indent: 14px
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #4a148c;
        outline: 0;
        box-shadow: none
    }

    .inputbox {
        margin-bottom: 10px;
        position: relative
    }

    .inputbox i {
        position: absolute;
        left: 8px;
        top: 12px;
        color: #dadada
    }

    .form-check-label {
        font-size: 13px
    }

    .form-check-input {
        width: 14px;
        height: 15px;
        margin-top: 5px
    }

    .forgot {
        font-size: 14px;
        text-decoration: none;
        color: #4A148C
    }

    .mail {
        color: #4a148c;
        text-decoration: none
    }

    .form-check {
        cursor: pointer
    }

    .btn-primary {
        color: #fff;
        background-color: #4A148C;
        border-color: #4A148C
    }
</style>
<div class="card">
    <form action="proseslogin.php" method="post">
        <div class="text-center intro"> <img src="https://i.imgur.com/uNiv4bD.png" width="160"> <h1 class="d-block account">Welcome Admin</h1> </div>
        <div class="mt-4 text-center">
            <h4>Log In.</h4> <span>Login with your admin credentials</span>
            <div class="mt-3 inputbox"> <input type="text" class="form-control" name="username" placeholder="Email"> <i class="fa fa-user"></i> </div>
            <div class="inputbox"> <input type="password" class="form-control" name="password" placeholder="Password"> <i class="fa fa-lock"></i> </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
        </div>
    </form>
</div>  


<?php  
if ($_GET['pesan']=='belum_login') {
   echo "<script>
        alert('Data Anda Salah');
        </script>";
} 
if ($_GET['pesan']=='logout') {
   echo "<script>
        alert('Anda Berhasil Keluar');
        </script>";
} 
include 'include/footer.php';
?>

