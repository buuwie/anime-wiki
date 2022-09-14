<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Anime Wiki</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <div class="header">
        <div class="headercontent">
            <div class="headtype">
                <a href="../index.php">
                    <img src="../images/Không tiêu đề (3).png" alt="Anime Wiki"></a>
                <form action="#">
                    <input type="text" placeholder="Tìm kiếm tên nhân vật, tên bộ anime">
                    <button type="submit">Tìm kiếm</button>
                </form>
                <a href="login.php" id="user">Đăng nhập &nbsp &nbsp &nbsp|</a>
                <a href="../pages/signin.php" id="user">Đăng kí</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="contentlogin">
            <form class="userlogin" action="login.php" method="POST" role="form">
                <h1>Đăng nhập</h1>
                <div id="logintext">
                    <input type="text" placeholder="Email hoặc tên tài khoản" id="" name="username" required><br>
                    <br><br>
                    <input type="password" placeholder="Mật khẩu" id="" name="password" required><br>
                    <br>
                    <?php
                        if (isset($_POST['login']))
                        {
                            $tk = $_POST['username'];
                            $mk = $_POST['password'];
                            $db = mysqli_connect("localhost", "root", "", "animewiki");
                            $sql = "select * from user where username = '$tk' and password = '$mk' or email = '$tk' and password = '$mk'";
                            $rs = mysqli_query($db, $sql);
                            if (mysqli_num_rows($rs) > 0)
                            {
                                $_SESSION["login_mess"]= $tk;
                                header('location:../homelogin.php');
                                
                            }
                            else
                            {
                                echo "Tài khoản hoặc mật khẩu không đúng";
                            }
                        }
                    ?><br><br>
                    <button type="submit" name="login">Đăng nhập</button>
                </div><br>
                <span>Bạn chưa có tài khoản? <a href="../pages/signin.php">Đăng kí</a> ngay</span>
                <br><br>
                <span>Hoặc đăng nhập bằng: &nbsp
                    <a href="login.php"><img src = "../images/logo-fb.png" height="20px" width="20px"></a> &nbsp
                    <a href="login.php"><img src = "../images/logo-gg.png" height="20px" width="20px"></a>
                </span>
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="copyright">
            <a>&copy Copyright 2022 | Anime Wiki </a>
        </div>
    </div>
</body>
</html>