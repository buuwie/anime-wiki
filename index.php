<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Anime Wiki</title>
    <link rel="stylesheet" type="text/css" href="css/homelogin.css">
</head>
<body>
    <div class="header">
        <div class="headercontent">
            <div class="headtype">
                <a href="index.php">
                    <img src="images/Không tiêu đề (3).png" alt="Anime Wiki"></a>
                <form action="#">
                    <input type="text" placeholder="Tìm kiếm tên nhân vật, tên bộ anime">
                    <button type="submit">Tìm kiếm</button>
                </form>
                <a href="pages/login.php" id="user"> &nbsp &nbsp Đăng nhập &nbsp &nbsp &nbsp|</a>
                <a href="pages/signin.php" id="user">Đăng kí</a>
            </div>
        </div>
        <div class="headermenu">
            <div class="menu">
                <ul>
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#">Nhân vật</a>
                    </li>
                    <li>
                        <a href="#">Thể loại</a>
                        <ul id="listanime">
                            <li>
                                <a href="pages/category info.php">Action</a>
                            </li>
                            <li>
                                <a href="#">Adventure</a>
                            </li>
                            <li>
                                <a href="#">Bishoujo/Moe</a>
                            </li>
                            <li>
                                <a href="#">Bishounen</a>
                            </li>
                            <li>
                                <a href="#">Comedy</a>
                            </li>
                            <li>
                                <a href="#">Coming of Age</a>
                            </li>
                            <li>
                                <a href="#">Detective</a>
                            </li>
                            <li>
                                <a href="#">Drama</a>
                            </li>
                            <li>
                                <a href="#">Family</a>
                            </li>
                            <li>
                                <a href="#">Fantasy</a>
                            </li>
                            <li>
                                <a href="#">Food</a>
                            </li>
                            <li>
                                <a href="#">Game</a>
                            </li>
                            <li>
                                <a href="#">Harem</a>
                            </li>
                            <li>
                                <a href="#">Horror</a>
                            </li>
                            <li>
                                <a href="#">Josei</a>
                            </li>
                            <li>
                                <a href="#">Live Action</a>
                            </li>
                            <li>
                                <a href="#">Live Show</a>
                            </li>
                            <li>
                                <a href="#">Mafia</a>
                            </li>
                            <li>
                                <a href="#">Magic</a>
                            </li>
                            <li>
                                <a href="#">Manga</a>
                            </li>
                            <li>
                                <a href="#">Martial Arts</a>
                            </li>
                            <li>
                                <a href="#">Mecha</a>
                            </li>
                            <li>
                                <a href="#">Music</a>
                            </li>
                            <li>
                                <a href="#">Mystery</a>
                            </li>
                            <li>
                                <a href="#">Novel</a>
                            </li>
                            <li>
                                <a href="#">Otaku</a>
                            </li>
                            <li>
                                <a href="#">Parody</a>
                            </li>
                            <li>
                                <a href="#">Psychological</a>
                            </li>
                            <li>
                                <a href="#">Romance</a>
                            </li>
                            <li>
                                <a href="#">School</a>
                            </li>
                            <li>
                                <a href="#">Shoujo</a>
                            </li>
                            <li>
                                <a href="#">Tragedy</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Danh mục bài viết</a>
                        <ul id="listdoc">
                            <li>
                                <a href="#">Bài viết mới nhất</a>
                            </li>
                            <li>
                                <a href="#">Bài viết hay nhất</a>
                            </li>
                            <li>
                                <a href="#">Bài viết chọn lọc</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Thảo luận</a>
                    </li>
                    <li>
                        <a href="#">Trợ giúp</a>
                    </li>
                    <li>
                        <a href="pages/login.php" id="create">Tạo bài viết mới</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="content">
            <div class="leftside">
                <div class="topic">
                    <h1>Chào mừng đến với Anime Wiki</h1><hr>
                    <div class="suggested">
                        <div class="doc">
                            <div class="topdoc" style="background-color: aquamarine;">
                                <a>Bài viết mới nhất</a>
                            </div>
                            <div class="middoc">
                                <a>(Đây là nội dung)</a>
                                <div class="trending">
                                    <a><div class="image">Ảnh 1</div></a>
                                </div>
                            </div>
                            <div class="botdoc" style="background-color: aquamarine;">
                                <a href="#">Xem thêm >>></a>
                            </div>
                        </div>
                        <div class="doc">
                            <div class="topdoc" style="background-color: aqua;">
                                <a>Bạn có biết?</a>
                            </div>
                            <div class="middoc" style="height: 314px;">
                                <div class="trending">
                                    <a><div class="image">Ảnh 2</div></a>
                                </div>
                                <ul id="facts">
                                    <li>
                                        <a> Đây là nội dung 1</a><br>
                                    </li>
                                    <li>
                                        <a> Đây là nội dung 2</a><br>
                                    </li>
                                    <li>
                                        <a> Đây là nội dung 3</a><br>
                                    </li>
                                    <li>
                                        <a> Đây là nội dung 4</a><br>
                                    </li>
                                    <li>
                                        <a> Đây là nội dung 5</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="botdoc" style="background-color: aqua;">
                                <a href="#">Xem thêm >>></a>
                            </div>
                        </div>
                        <div class="doc">
                            <div class="topdoc" style="background-color: rgb(253, 253, 120);">
                                <a>Bài viết chọn lọc</a>
                            </div>
                            <div class="middoc">
                                <a>(Đây là nội dung)</a>
                                <div class="trending">
                                    <a><div class="image">Ảnh 3</div></a>
                                </div>
                            </div>
                            <div class="botdoc" style="background-color: rgb(253, 253, 120);">
                                <a href="#">Xem thêm >>></a>
                            </div>
                        </div>
                        <div class="doc">
                            <div class="topdoc" style="background-color: blueviolet;">
                                <a>Bài viết hay nhất</a>
                            </div>
                            <div class="middoc">
                                <a>(Đây là nội dung)</a>
                                <div class="trending">
                                    <a><div class="image">Ảnh 4</div></a>
                                </div>
                            </div>
                            <div class="botdoc" href="#" style="background-color: blueviolet;">
                                <a href="#">Xem thêm >>></a>
                            </div>
                        </div>
                    </div>
                    <b>Tin tức</b><hr>
                    <ul id="discuss">
                        <li>
                            <b>(Đây là nội dung 1)</b><br>
                            <a>Đăng bởi: Đang cập nhật, Thời gian: Đang cập nhật</a>
                        </li>
                        <li>
                            <b>(Đây là nội dung 2)</b><br>
                            <a>Đăng bởi: Đang cập nhật, Thời gian: Đang cập nhật</a>
                        </li>
                        <li>
                            <b>(Đây là nội dung 3)</b><br>
                            <a>Đăng bởi: Đang cập nhật, Thời gian: Đang cập nhật</a>
                        </li>
                        <li>
                            <b>(Đây là nội dung 4)</b><br>
                            <a>Đăng bởi: Đang cập nhật, Thời gian: Đang cập nhật</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rightside">
                
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="copyright">
            <a>&copy Copyright 2022 | Anime Wiki </a>
        </div>
    </div>
</body>
</html>