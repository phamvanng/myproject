<!DOCTYPE html>
<html lang="en">
    <?php include '../connect_db.php'; ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Food.SM.com.vn</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    </head>
    <body>
        <div id="main">
            <div id="header">
                <!--Bắt đầu Navigation-->
                <ul id="nav">
                    <li><a href="">Trang chủ</a></li>
                    <li>
                        <a href="">
                            Đồ ăn
                            <i style="font-size: 60%; line-height: 100%;" class="ti-angle-down"></i>
                        </a>
                            <ul class="subnav">
                                <li><a href="">Đồ ăn nhanh</a></li>
                                <li><a href="">Thực phẩm sạch</a></li>
                            </ul>
                    </li>
                    <li><a href="">Đồ uống</a></li>
                    <li><a href=""> <i class="ti-shopping-cart"></i> Giỏ hàng</a></li>
                    <li>
                        <a href="">
                            Thêm
                            <i style="font-size: 60%; line-height: 100%;" class="ti-angle-down"></i>
                        </a>
                        <ul class="subnav">
                            <li><a href=""> <i class="ti-user"></i>  Đăng nhập </a></li>
                            <li><a href=""> <i class="ti-email"></i>  Liên hệ </a></li>
                        </ul>
                    </li>
                </ul>
                <!--End Navigation-->
                <!--Begin search Button-->
                <div class="search-btn">
                    <i class="search-icon ti-search"></i>
                </div>
                <!--End search Button-->
            </div>

            <div id="slider">
                <div class="text-content">
                    <h2 class="text-heading">SM Foods</h2>
                </div>
            </div>

            <div id="content">

                <!--content-section-->
                <div class="content-section">
                    <h2 class="section-heading">ĐỒ ĂN NHANH</h2>
                    <p class="section-sub-heading">Tiện lợi, nhanh chóng, phục vụ cho cuộc sống bận rộn ngày nay</p>
                </div>


                <div class="fastfoods-list">

                    <div class="fastfood-item">
                        <a class="js-modal-food1" href=""><img  src="./assets/img/foods/comgaran.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >Cơm Gà Rán</p>
                        <p class="fastfood-price">40.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow1" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food2" href=""><img src="./assets/img/foods/ga_xien_que.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" ><p>2 Gà Xiên Que</p>
                        <p class="fastfood-price">30.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow2" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food3" href=""><img src="./assets/img/foods/Burger_Tom.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name">Burger Tôm</p>
                        <p class="fastfood-price">20.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow3" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food4" href=""><img src="./assets/img/foods/my_y_xot_ga_vien.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name">Mì Ý Xốt Cà Xúc Xích Gà Viên</p>
                        <p class="fastfood-price">35.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow4" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food5" href=""><img src="./assets/img/foods/phomaikimsa.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >5 Viên Khoai Môn Kim Sa</p>
                        <p class="fastfood-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow5" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food6" href=""><img src="./assets/img/foods/comphilegaquay.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >Cơm Phi-lê Gà Quay</p>
                        <p class="fastfood-price">40.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow6" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food7" href=""><img src="./assets/img/foods/comphilegagion.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >Cơm phi-lê gà giòn</p>
                        <p class="fastfood-price">50.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow7" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food8" href=""><img src="./assets/img/foods/4banhtrung.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name">4 Bánh trứng</p>
                        <p class="fastfood-price">20.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow8" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food9" href=""><img src="./assets/img/foods/saladhatgavien.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >Salad Hạt Gà viên</p>
                        <p class="fastfood-price">39.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow9" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food10" href=""><img src="./assets/img/foods/gamiengnuggets.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >Gà Miếng Nuggets</p>
                        <p class="fastfood-price">40.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow10" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food11" href=""><img src="./assets/img/foods/comboburger.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >Combo Burger</p>
                        <p class="fastfood-price">40.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow11" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="fastfood-item">
                        <a class="js-modal-food12" href=""><img src="./assets/img/foods/combogaquay.webp" alt="" class="fastfood-img"></a>
                        <p class="fastfood-name" >Combo Gà Quay</p>
                        <p class="fastfood-price">60.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow12" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                </div>



                <!--Tour section-->
                <div class="content-section">
                    <h2 style="margin-top: 25px;" class="section-heading">THỰC PHẨM SẠCH</h2>
                    <p class="section-sub-heading">SM Mart - không gì không có - Siêu tươi, siêu sạch, siêu rẻ, siêu ưu đãi</p>
                </div>


                <div class="foods-list">

                    <div class="food-item">
                        <a class="js-modal-food13" href=""><img src="./assets/img/foods/thucphamtuoi/bachtuoc.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Bạch tuộc</p>
                        <p class="food-price">60.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow13" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food14" href=""><img src="./assets/img/foods/thucphamtuoi/thitbonhapkhau.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Thịt bò nhập khẩu</p>
                        <p class="food-price">120.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow14" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food15" href=""><img src="./assets/img/foods/thucphamtuoi/boxay.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Thịt bò xay Fohla 250g</p>
                        <p class="food-price">90.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow15" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food16" href=""><img src="./assets/img/foods/thucphamtuoi/thitheo.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Thịt heo nhập khẩu</p>
                        <p class="food-price">70.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow16" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food17" href=""><img src="./assets/img/foods/thucphamtuoi/suonheo.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Sườn heo tươi</p>
                        <p class="food-price">60.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow17" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food18" href=""><img src="./assets/img/foods/thucphamtuoi/tomtuoi.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Tôm tươi</p>
                        <p class="food-price">100.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow18" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food19" href=""><img src="./assets/img/foods/thucphamtuoi/cahoidonglanh.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Cá hồi đông lạnh</p>
                        <p class="food-price">150.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow19" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food20" href=""><img src="./assets/img/foods/thucphamtuoi/canhga.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Cánh gà</p>
                        <p class="food-price">40.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow20" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food21" href=""><img src="./assets/img/foods/thucphamtuoi/gaacnguyencon.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Gà ác nguyên con</p>
                        <p class="food-price">90.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow21" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food22" href=""><img src="./assets/img/foods/thucphamtuoi/bido.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Bí đỏ</p>
                        <p class="food-price">20.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow22" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food23" href=""><img src="./assets/img/foods/thucphamtuoi/raucan.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Rau cần</p>
                        <p class="food-price">20.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow23" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="food-item">
                        <a class="js-modal-food24" href=""><img src="./assets/img/foods/thucphamtuoi/raumuong.webp" alt="" class="food-img"></a>
                        <p class="food-name" >Rau muống</p>
                        <p class="food-price">20.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow24" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                </div>


                <!--Contact section-->
                <div class="content-section">
                    <h2 class="section-heading">ĐỒ UỐNG</h2>
                    <p class="section-sub-heading">Are you Thirsty ?</p>
                </div>
                <div class="drinks-list">

                    <div class="drink-item">
                        <a class="js-modal-food25" href=""><img src="./assets/img/drinks/trasuathachdua.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Trà sữa thạch dừa</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow25" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food26" href=""><img src="./assets/img/drinks/tradaotukixuan.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Trà đào tứ kỳ xuân</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow26" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food27" href=""><img src="./assets/img/drinks/hongtrakem.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Hồng trà kem</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow27" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food28" href=""><img src="./assets/img/drinks/suakemlacdao.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Sữa kem lắc đào</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow28" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food29" href=""><img src="./assets/img/drinks/nuocchanhtuoi.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Nước chanh tươi lạnh</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow29" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food30" href=""><img src="./assets/img/drinks/suakemlacdautay.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Sữa kem lắc dâu tây</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow30" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food31" href=""><img src="./assets/img/drinks/fixtrasuachantrau.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Trà sữa trân châu đường đen</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow31" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food32" href=""><img src="./assets/img/drinks/supersundaetranchau.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Super sundae trân châu đường đen</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow32" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food33" href=""><img src="./assets/img/drinks/tradaobigsize.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Trà đào bigsize</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow33" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food34" href=""><img src="./assets/img/drinks/hongtramatong.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Hồng trà mật ong</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow34" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food35" href=""><img src="./assets/img/drinks/duongchicamlo.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Dương chi cam lộ</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow35" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>

                    <div class="drink-item">
                        <a class="js-modal-food36" href=""><img src="./assets/img/drinks/trasuanuong.webp" alt="" class="drink-img"></a>
                        <p class="drink-name" >Trà sữa nướng</p>
                        <p class="drink-price">25.000 VND</p>
                        <div class="btn">
                            <a href="" class="buynow-btn js-buynow36" >Buy Now</a>
                            <a href="" class="add-btn js-add-btn">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </div>

            <!--Contact-->
                <div class="content-section">
                    <h2 class="section-heading">CONTACT</h2>
                    <p class="section-sub-heading">Are you Thirsty ?</p>
                    <div class="row contact-content">
                        <div class="col col-half contact-infor">
                            <p><i class="ti-location-pin"></i>HaUi, Hà Nội, Việt Nam</p>
                            <p><i class="ti-mobile"></i>Phone: +84974746573</p>
                            <p><i class="ti-email"></i>Email: nghiahaui@gmail.com</p>
                        </div>
                        <div class="col col-half contact-form">
                            <form action="">
                                <div class="row">
                                    <div class="col col-half">
                                        <input type="text" placeholder="Name?" class="form-control">
                                    </div>
                                    <div class="col col-half">
                                        <input type="email" placeholder="Email?" class="form-control">
                                    </div>
                                <div class="row">
                                    <div class="col col-full  mt-8 mglr">
                                        <input type="text" placeholder="Message" class="form-control">
                                    </div>
                                </div>
                                <input class="form-submit-btn mt-16" type="submit" value="SEND">
                            </form>
                        </div>
                    </div>
                </div>
                </div>

            <div id="footer">

            </div>
        </div>


        <!--MODAL đồ ăn-->

        <div class="modal js-modal1">
            <div class="modal-container">

                <div class="modal-close js-modal-close1">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/comgaran.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Cơm gà rán</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="js-modal1">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal2">
            <div class="modal-container">

                <div class="modal-close js-modal-close2">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/ga_xien_que.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Gà xiên que</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal2">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal3">
            <div class="modal-container">

                <div class="modal-close js-modal-close3">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/Burger_Tom.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Burger Tom</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="js-modal3">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal4">
            <div class="modal-container">

                <div class="modal-close js-modal-close4">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/my_y_xot_ga_vien.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Mỳ ý Xốt Cà-gà viên</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal4">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal5">
            <div class="modal-container">

                <div class="modal-close js-modal-close5">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/phomaikimsa.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">5 Viên Khoai Môn Kim Sa</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal5">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal6">
            <div class="modal-container">

                <div class="modal-close js-modal-close6">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/comphilegaquay.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Cơm Phi-lê Gà Quay</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal6">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal7">
            <div class="modal-container">

                <div class="modal-close js-modal-close7">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/comphilegagion.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Cơm phi-lê gà giòn</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal7">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal8">
            <div class="modal-container">

                <div class="modal-close js-modal-close8">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/4banhtrung.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">4 Bánh trứng</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal8">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal9">
            <div class="modal-container">

                <div class="modal-close js-modal-close9">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/saladhatgavien.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Salad Hạt Gà viên</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal9">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal10">
            <div class="modal-container">

                <div class="modal-close js-modal-close10">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/gamiengnuggets.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Gà Miếng Nuggets</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal10">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal11">
            <div class="modal-container">

                <div class="modal-close js-modal-close11">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/comboburger.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Combo Burger</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal11">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal12">
            <div class="modal-container">

                <div class="modal-close js-modal-close12">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/combogaquay.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Combo Gà Quay</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal12">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal13">
            <div class="modal-container">

                <div class="modal-close js-modal-close13">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/bachtuoc.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Bạch tuộc</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal13">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal14">
            <div class="modal-container">

                <div class="modal-close js-modal-close14">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/thitbonhapkhau.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Thịt bò nhập khẩu</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal14">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal15">
            <div class="modal-container">

                <div class="modal-close js-modal-close15">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/boxay.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Thịt bò xay Fohla 250g</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal15">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal16">
            <div class="modal-container">

                <div class="modal-close js-modal-close16">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/thitheo.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Thịt heo nhập khẩu</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal16">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal17">
            <div class="modal-container">

                <div class="modal-close js-modal-close17">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/suonheo.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Sườn heo tươi</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal17">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal18">
            <div class="modal-container">

                <div class="modal-close js-modal-close18">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/tomtuoi.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Tôm tươi</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal18">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal19">
            <div class="modal-container">

                <div class="modal-close js-modal-close19">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/cahoidonglanh.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Cá hồi đông lạnh</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal19">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal20">
            <div class="modal-container">

                <div class="modal-close js-modal-close20">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/canhga.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Cánh gà</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal20">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal21">
            <div class="modal-container">

                <div class="modal-close js-modal-close21">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/gaacnguyencon.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Gà ác nguyên con</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal21">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal22">
            <div class="modal-container">

                <div class="modal-close js-modal-close22">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/bido.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Bí đỏ</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal22">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal23">
            <div class="modal-container">

                <div class="modal-close js-modal-close23">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/raucan.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Rau cần</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal23">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal24">
            <div class="modal-container">

                <div class="modal-close js-modal-close24">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/foods/thucphamtuoi/raumuong.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Rau muống</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal24">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal25">
            <div class="modal-container">

                <div class="modal-close js-modal-close25">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/trasuathachdua.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Trà sữa thạch dừa</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal25">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal26">
            <div class="modal-container">

                <div class="modal-close js-modal-close26">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/tradaotukixuan.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Trà đào tứ kỳ xuân</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal26">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal27">
            <div class="modal-container">

                <div class="modal-close js-modal-close27">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/hongtrakem.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Hồng trà kem</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal27">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal28">
            <div class="modal-container">

                <div class="modal-close js-modal-close28">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/suakemlacdao.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Sữa kem lắc đào</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal28">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal29">
            <div class="modal-container">

                <div class="modal-close js-modal-close29">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/nuocchanhtuoi.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Nước chanh tươi lạnh</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal29">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal30">
            <div class="modal-container">

                <div class="modal-close js-modal-close30">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/suakemlacdautay.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Sữa kem lắc dâu tây</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal30">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal31">
            <div class="modal-container">

                <div class="modal-close js-modal-close31">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/fixtrasuachantrau.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Trà sữa trân châu đường đen</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal31">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal32">
            <div class="modal-container">

                <div class="modal-close js-modal-close32">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/supersundaetranchau.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Super sundae trân châu đường đen</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal32">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal33">
            <div class="modal-container">

                <div class="modal-close js-modal-close33">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/tradaobigsize.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Trà đào bigsize</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal33">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal34">
            <div class="modal-container">

                <div class="modal-close js-modal-close34">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/hongtramatong.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Hồng trà mật ong</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal34">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal35">
            <div class="modal-container">

                <div class="modal-close js-modal-close35">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/duongchicamlo.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Dương chi cam lộ</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal35">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal js-modal36">
            <div class="modal-container">

                <div class="modal-close js-modal-close36">
                    <i style="font-weight: 600;" class="ti-close"></i>
                </div>

                <div class="modal-body">
                    <img  src="./assets/img/drinks/trasuanuong.webp" alt="">
                    <div class="modal-name-soluong">
                        <p class="modal-name">Trà sữa nướng</p>
                        <!-- <p class="modal-lable">Số lượng</p>
                        <input type="text" class="modal-input" placeholder="Số lượng ?"> -->
                    </div>
                </div>

                <div class="modal-btn">
                    <div class="modal-btn-add">
                        <i class="ti-shopping-cart"></i>
                        <button href="" class="modal-btn-add">Thêm vào giỏ hàng</button>
                    </div>

                    <div class="modal-btn-buy">
                        <i class="ti-check"></i>
                        <button href="" class="modal-btn-buy" data-modal-id="modal36">Mua ngay</button>
                    </div>
                </div>
            </div>
        </div>
        <!--MODAL đồ ăn-->

        <!--
            buynow
        -->

        <div class="modal-press-buynow-btns js-modal-press-btn-buynow">
            <div class="modal-press-content">
                <h3 class="modal-press-btns">Are you sure?</h3><br>
                    <div class="modal-yes-no-btns">
                        <p class="modal-content-buy-btns1">No</p>
                        <p class="modal-content-buy-btns2">Yes</p>
                    </div>
            </div>
        </div>





        <script>

            const numImg = 36;
            const numModals = 36;
            const showBuy = document.querySelector('.modal-press-buynow-btns');
            const pressBuyBtns = document.querySelectorAll('.modal-btn-buy');

            function showBuynow(event) {
                showBuy.style.display = 'flex';
                event.preventDefault();
            }

            pressBuyBtns.forEach(button => {
                button.addEventListener('click', showBuynow);
            });

            function showModal(modal) {
                modal.style.display = 'flex';
                event.preventDefault();
            }

            for (let i = 1; i <= numModals; i++) {
                const pressImg = document.querySelector(`.js-modal-food${i}`)
                const modal = document.querySelector(`.js-modal${i}`);
                const buyBtn = document.querySelector(`.js-buynow${i}`);
                const modalClose = document.querySelector(`.js-modal-close${i}`);
                buyBtn.addEventListener('click', () => showModal(modal));
                modalClose.addEventListener('click', () => hideModal(modal));
                pressImg.addEventListener('click', () => showModal(modal));
                modal.addEventListener('click',function(event){
                modalDone.style.display = 'none';
                event.preventDefault();
            })

            }

            function hideModal(modal) {
                modal.style.display = 'none';
                event.preventDefault();
            }

        </script>

        <div class="modal-done" id="donePopup">
            <div class="modal-content">
                <span class="close-popup" id="closePopup">&times;</span>
                <h2>Done!</h2>
                <p>Your food is delivered.</p>
            </div>
        </div>


        <script>
            const pressYes = document.querySelector('.modal-content-buy-btns2');
            const modalDone = document.querySelector('.modal-done');
            const modalCloseDone = document.querySelector('.close-popup')
            const pressNo = document.querySelector('.modal-content-buy-btns1');
            const NoBuy = document.querySelector('.js-modal-press-btn-buynow')
            pressYes.addEventListener('click', function(event) {
                modalDone.style.display = 'flex';
                showBuy.style.display = 'none';
                event.preventDefault();
            });

            pressNo.addEventListener('click', function(event) {
                NoBuy.style.display = 'none';
                event.preventDefault();
            });

            modalCloseDone.addEventListener('click',function(event){
                modalDone.style.display = 'none';
                event.preventDefault();
            })
        </script>

        <div class="modal-add" id="addPopup">
            <div class="modal-content-add">
                <span class="close-add" id="closePopup-add">&times;</span>
                <h2>Đã thêm!</h2>
                <p>Sản phẩm của bạn đã được thêm vào giỏ hàng</p>
            </div>
        </div>

        <script>
            const modalAdd = document.querySelector('.modal-add')
            const AddBtns = document.querySelectorAll('.js-add-btn')
            const closeAddBtn = document.querySelector('.close-add')
            const Jsmain = document.querySelector('#main')
            const modalAddBntns = document.querySelectorAll('.modal-btn-add')
            function showAdd(event) {
                modalAdd.style.display = 'flex';
                event.preventDefault();
            }
            function CloseShowAdd(event) {
                modalAdd.style.display = 'flex';
                event.preventDefault();
            }
            AddBtns.forEach(button => {
                button.addEventListener('click', showAdd);
            });

            modalAddBntns.forEach(button => {
                button.addEventListener('click', showAdd);
            });

            closeAddBtn.addEventListener('click',function(event){
                modalAdd.style.display = 'none';
                event.preventDefault();
            })
            pressBuyBtns.addEventListener('click',function(event){
                modalAdd.style.display = 'none';
                event.preventDefault();
            })

        </script>

    </body>
</html>