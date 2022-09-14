<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký - Anime Wiki</title>
    <link rel="stylesheet" type="text/css" href="../css/sign in.css">
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
                <a href="../pages/login.php" id="user">Đăng nhập &nbsp &nbsp &nbsp|</a>
                <a href="signin.php" id="user">Đăng kí</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="contentsignin">
            <form class="usersignin" action="signin.php" method="POST" role="form">
                <h1>Đăng kí</h1>
                <div id="signintext">
                    <input type="text" placeholder="Tên tài khoản" id="" name="username" required><br>
                    <br>
                    <input type="text" placeholder="Email" id="" name="email" required><br>
                    <br>
                    <input type="password" placeholder="Mật khẩu" id="" name="password" required><br>
                    <br>
                    <input type="password" placeholder="Nhập lại mật khẩu" id="" name="confirmpassword" required><br><br>
                    <?php
                        if (isset($_POST['signin']))
                        {
                            $tk = $_POST['username'];
                            $mk = $_POST['password'];
                            $cfmk = $_POST['confirmpassword'];
                            $email = $_POST['email'];
                            
                            if ($mk == $cfmk)
                            {
                                $db = mysqli_connect("localhost", "root", "", "animewiki");
                                $sql = "insert into user values ('$tk','$mk','$email')";
                                $rs = mysqli_query($db, $sql);
                                if ($rs)
                                {
                                    echo "Đăng kí thành công!";
                                }
                            }
                            else echo "Mật khẩu phải giống nhau";
                        }
                        
                    ?>
                    <br><br>
                    <button type="submit" name="signin">Đăng kí</button>
                </div><br><br>
                <span>Bạn đã có tài khoản? <a href="../pages/login.php">Đăng nhập</a> ngay</span>
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