<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>登入頁</title>
<style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    }

    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
    }
    html,
    body {
    height: 100%;
    }

    body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
    }

    .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
    }
    .form-signin .checkbox {
    font-weight: 400;
    }
    .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
    }
    .form-signin .form-control:focus {
    z-index: 2;
    }
    .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
</style>
</head>
<body class="text-center">
    <?php if(!isset($_SESSION["user"])){ ?>
        <form class="form-signin" action="auth.php" method="post">
        <img class="mb-4" src="https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.52sh.com.tw%2Findex.php%2Fmain%2Fknowledge_detail%2F8370&psig=AOvVaw2CXblk6IQJAmzAFf6pXD80&ust=1636794774293000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIjS94i-kvQCFQAAAAAdAAAAABAE" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <a href="register.php" target="_blank">註冊</a>
        <a href="index.php" target="_blank">回首頁</a>
        <input type="text" class="form-control" name="user" placeholder="帳號" class="form-control col-xl-6">
        <input type="password" class="form-control" name="pw" placeholder="密碼" class="form-control col-xl-6" id="pwd">
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <input type="submit" class="btn btn-lg btn-primary btn-block" name="Sign in">
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
    </form>
    <?php }else{ 
        header("location:admin.php");
     } ?>

     <!-- 彈出提醒視窗 -->
     <div class="errcode">
        <?php
        if(isset($_GET["errcode"])) {
            switch($_GET["errcode"]){
                case 0:
                    echo "<script>alert('請輸入帳號密碼');</script>";
                    break;
                case 1:
                    echo "<script>alert('帳號或密碼錯誤');</script>";
                    break;
                case 2:
                    echo "<script>alert('請登入會員');</script>";
                    break;
                case 3:
                    echo "<script>alert('拒絕存取');</script>";
                    break;
            }
        }
        ?>
    </div>
</body>
</html>