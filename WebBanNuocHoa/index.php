<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .wrapper{
    height: auto;
    width: 100%;
    background-color: white;}
.thantrang{
    height: auto;
    width:100%;
}
.content{
    width: 100%;
    display: flex;
   
}
body{
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
}
*{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
.search{
    flex: 1;
    text-align: right;
    margin-right: 20px;
}
.icon-search{
    width: 50px;
    height: 30px;
    border: 2px solid #084b48 ;
    background-color: #084b48;
}
.tenshop{
    display: flex;
    flex: 2;
    justify-content: center;
    align-items: center;
}
.tenshop img{
    width: 100%;
    height: 300px;
}
.bor{
    border: 2px solid #084b48 ;
    width: 200px;
    height: 30px;
}
.logo img{
    width: 100%;
    height:300px;
}
.all{
    text-decoration: none;
    text-align: left;
    font-size: 25px;
    padding-left: 20px;
}
.right{
    width: 80%;
    border: 1px solid;
    box-sizing: border-box;
	font-size:24px;
	line-height:20px;
}
.danhmucsp a{
    text-decoration: none;
    color: black;
}
.menu li{
    list-style: none;
    line-height: 50px;
    float: left;
    justify-content: center;
    align-items: center;
    position: relative;
    /* text-indent: 50px;  */
    font-size: larger;
    position: relative;
}
.menu li  >a{
    text-decoration: none;
    color: #084b48;    
}
.menu > li > a {
    /* text-align: center; */
    margin: 0 20px;

}

.menu li:hover{
    background-color: #084b48;
    border: 2px solid black;
}
.menu li:hover > a{
    color: aliceblue;
}
.nav-menu{
    display: flex;
    justify-content: space-around;
    font-size: larger;
    font-weight: bolder;
    height: 90px;
}

.menu {
    padding: 0px 110px;
}
.menu li .sub-menu{
    display: none;
    position: absolute;
    background-color: aliceblue;
    text-align: center;
}
.menu li:hover .sub-menu{
    display: block;
}
.menu-slo{
    display: flex;
    justify-content: space-around;
    font-size: larger;
    font-weight: bolder;
}
.menu-slo  a{
    text-decoration: none;
    color: rgb(218, 201, 179);
}
section{
    margin-top: 30px;
    width: 30%;
    float: left;
    border-right: 1px solid;
    text-align: center;
}
.left-comp{
    padding: 250px;
}
.left-comp a{
    text-decoration: none;
    font-size: 30px;
    line-height: 50px;
}
aside{
    margin-top: 30px;
    width: 70%;
    float: left;
    text-align: center;
}
.chu-2 {
    position: absolute;
    bottom: 30px;
    left: 40%;
    color: black;
}

/* footter */
footer{
    background-color:rgb(11, 3, 40);
}
.fot-tt{
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
    border-bottom: 2px solid rgb(19, 18, 18);
    font-size: larger;
}
.fot-0 table{
    text-align: left;
    margin-top: 20px;
}
.fot-0 table td{
    color: rgb(129, 119, 119);
}
.fot-1 table{
    text-align: left;
    margin-top: 20px;
}
.fot-2 table{
    text-align: left;
    margin-top: 20px;
}
.fot-3 table{
    text-align: left;
    margin-top: 20px;
}
.fot-tt a{
    text-decoration: none;
    color: rgb(129, 119, 119);
    font-size: small;
}
.fot-slo h3{
    color: black;
    text-align: center;
    padding: 10px;
}
.fot-tt a:hover{
    background-color: antiquewhite;
}


</style>
<body>
    <div class="wrapper">
        <div class="thantrang">
            <div class="header">
                <header>
                    <div class="tenshop">
                        <a href="index.php"><img src="../banner/image/anh.jpg" alt="" width="100px" ></a>
                    </div>
                    <hr>
                    <div class="nav-menu">
                        <nav>
                            <ul class="menu">
                                <li><a href="../banner/index.php">Trang chủ</a></li>
                                <li><a href="../banner/GioiThieu.php">Giới Thiệu</a></li>
                                <li><a href="../banner/admin.php">Quản lý</a></li>
                                <li><a href="index.php">Sản phẩm</a>
                                <ul class="sub-menu">
                                    <li><a href="index.php?Comp=1">Diorrr</a></li>
                                    <li><a href="index.php?Comp=2">Gucci</a></li>
                                    <li><a href="index.php?Comp=3">Chanel</a></li>
                                    <li><a href="index.php?Comp=4">Versace</a></li>
                                    <li><a href="index.php?Comp=5">Lacoste</a></li>
                                </ul>
                                </li>
                                <li><a href="">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="logo">
                        <a href="index.php"><img src="../banner/image/anh2.jpg" alt="" ></a>
                    </div>
                </header>
            </div>

            
            
            <div class="content">
                <section>
                    <h2>THƯƠNG HIỆU</h2>
                    <div class="left-comp">
                                    <?php
                                        include_once("View/vCompany.php");
                                        $p = new viewCompany();
                                        $p->viewAllCompany();
                                    ?>
                    </div>
                </section>
                
                <aside>
                    <h2> 
                        <div class="danhmucsp">
                            <a href="../banner/index.php">DANH MỤC SẢN PHẨM</a>
                        </div>
                    </h2><br><br>
                    
                    <div class="all">
                        <form action='#' name="gia" method="get">
                                 Giá:<input type="text" name="min" placeholder="min" style="width:90px; height:30px; text-align: center">
                                - <input type="text" name="max" placeholder="max" style="width:90px; height:30px; text-align: center">
                                <button type="submit" name="submitt" value="search" class="icon-search" style="height:30px">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                        </form>
                    </div>

                    <div class="search">
                            <form action="#" name ="timkiem" method="get">
                            Tìm kiếm:<input name="txtSearch" type="search" placeholder="search here" class="bor" style="text-align: center;"/>
                            <span>
                                <button class="icon-search" , type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </span>
                            </form>
                    </div>
                                        <?php
                                            include_once("View/vSanPham.php");
                                            $p = new ViewSanPham();
                                            if(isset($_REQUEST["Comp"])){
                                                $p->viewAllSanPhamByCompany($_REQUEST["Comp"]);
                                            }
                                            elseif(isset($_REQUEST["submitt"])){
                                                $min=$_REQUEST['min'];
                                                $max=$_REQUEST['max'];
                                                $p->viewSearchProductPrice($min,$max);
                                            }
                                            elseif(isset($_REQUEST["txtSearch"])){
                                                $p->viewAllSanPhamBySearch($_REQUEST["txtSearch"]);
                                            }else{
                                                $p->viewAllSanPham();
                                            }
                                        ?>

                    
                </aside>
            </div>
        </div>














        <div class="chantrang">
            <footer>
                <div class="fot-tt">
                    <div class="fot-0">
                        <table>
                            <th style="color:white">Về Chúng Tôi</th>
                            <tr>
                                <td>PerfumeParadise®</td>
                            </tr>
                            <tr>
                                <td>Hộ Kinh Doanh nuớc hoa</td>
                            </tr>
                            <tr>
                                <td>Mã số thuế: 999999</td>
                            </tr>
                            <tr>
                                <td>Ngày cấp: 26/04/2023</td>
                            </tr>
                        </table>
                    </div>
                    <div class="fot-1">
                        <table>
                            <th style="color:white">Thông Tin</th>
                            <tr>
                                <td><a href="index.php">Trang chủ</a></td>
                            </tr>
                            <tr>
                                <td><a href="../banner/GioiThieu.php">Giới thiệu</a></td>
                            </tr>
                            <tr>
                                <td><a href="../banner/index.php">Sản Phẩm</a></td>
                            </tr>
                            <tr>
                                <td><a href="">Liên Hệ</a></td>
                            </tr>
                        </table>
                    </div>

                    <div class="fot-3">
                        <table>
                            <th style="color:white">Liên Hệ</th>
                            <tr>
                                <td><a href=""><i class="fa-brands fa-facebook"></i> Facebook</a></td>
                            </tr>
                            <tr>
                                <td><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></td>
                            </tr>
                            <tr>
                                <td><a href=""><i class="fa-solid fa-phone"></i> 0836459359</a></td>
                            </tr>
                            <tr>
                                <td><a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+nghi%E1%BB%87p+TP.HCM/@10.8221589,106.6842651,17z/data=!3m1!4b1!4m20!1m13!4m12!1m4!2m2!1d106.6880844!2d10.822499!4e1!1m6!1m2!1s0x3174deb3ef536f31:0x8b7bb8b7c956157b!2zxJHhuqFpIGjhu41jIGl1aA!2m2!1d106.6868454!2d10.8221589!3m5!1s0x3174deb3ef536f31:0x8b7bb8b7c956157b!8m2!3d10.8221589!4d106.6868454!16s%2Fm%2F02pyzdj"><i class="fa-solid fa-location-pin"></i> 1 Nguyễn Văn Bảo</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="fot-slo">
                    <h3>PerfumeParadise - Uy tín làm nên thương hiệu</h3>
                </div>
            </footer>
        </div>
    </div>


</body>

</html>