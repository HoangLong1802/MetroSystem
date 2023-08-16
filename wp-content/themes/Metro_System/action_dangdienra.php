<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .mini__menucontent--wrap {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 0px;
            width: 272px;
            height: 40px;
            position: relative;
            margin-left: 10px;
            margin-bottom: 20px;
        }

        .middle__page--wrap {
            position: relative;
            height: 845px;
        }

        .middle__page--wrap .mini__menucontent--wrap img {
            width: 5.21px;
            height: 8.74px;

        }

        .middle__page--wrap .mini__menucontent--wrap a img {
            width: 15.83px;
            margin-right: 17.48px;
            height: 16.67px;
        }

        .__a--at {
            color: rgba(0, 89, 157, 1);
        }

        .btn__as_alink {
            background-color: #fff;
            border: none;
            height: 40px;
            padding: 10px 16px 10px 16px;
            cursor: pointer;
        }

        .btn__as_alink:hover {
            color: rgba(0, 89, 157, 1);
        }

        .middle__page--wrap {
            margin-left: 160px;
            margin-right: 160px;
        }

        h1 {
            margin-top: 30px;
        }

        .datetime__wrap {
            margin-top: 8px;
            font-size: 14px;
            line-height: 19px;
            color: #6E6E6E;
        }

        .__img__ {
            width: 983px;
            height: 451px;

            margin: 40px 0;
        }

        .join__now--btn {
            background-color: #00599D;
            border-radius: 2px;
            border: unset;
            padding: 10px 24px;
            box-shadow: 0px 0px 6px #E7E9F2;
            font-size: 16px;
            line-height: 22px;
            position: absolute;
            top: 695px;
            left: 384px;
            color: #FFFFFF;
            cursor: pointer;
        }

        .ad__ {
            width: 517px;
            height: 624px;
        }

        .__ad__ {
            position: absolute;
            top: 120px;
            left: 1083px;

        }
    </style>
    <link rel="stylesheet" href="./css/footer__wrap.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/header__wrap.css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HCMC Metro</title>
</head>

<body>
    <div class="metro_home--page">
        <div class="chat__suport--">
            <button class="chat">
                CHAT VỚI<br>
                TƯ VẤN VIÊN
                <img class="__img" src="./image/Icon/messenger.png" alt="">
            </button>
        </div>
        <div class="header__page--wrap">
            <div class="metro_Logo">
                <a href="./index.php"><img src="./image/Logo/Logo.png" alt="HCHC"></a>
            </div>
            <div class="train__info--wrap" onmouseleave="hide__train()">
                <a href="./train_experience1.php">M1</a>
                <a href="./train_experience2.php">M2</a>
                <a href="./train_experience1.php">M3</a>
                <a href="./train_experience2.php">M4</a>
            </div>
            <div class="menu">
                <a href="./home.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/house.png" alt=""> TRANG
                    CHỦ</a>
                <a href="./new.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/new.png" alt=""> TIN
                    METRO</a>
                <a style="cursor: pointer;" onmouseenter="show__train()"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/train.png" alt=""> TUYẾN
                    TÀU <img class="score__btn--wrap" src="./image/Icon/menu_Icon/score.png" alt=""></a>
                <a href="./search.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/search.png" alt=""> TRA
                    CỨU</a>
                <a class="active.php" href="./action"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/work.png" alt=""> HOẠT
                    ĐỘNG</a>
                <a href="./support.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/contact.png" alt=""> HỖ
                    TRỢ</a>
            </div>
            <div class="right__nav--wrap">

                <div class="search_bar">
                    <img src="./image/Icon/search.png" class="search_icon" alt="search_icon">
                    <input type="text" placeholder="Say something">
                </div>
                <a href="./profile.php" class="account__png--wrap">
                    <img src="./image/Account_IMG/Account1.png" alt="user_02158">
                </a>
            </div>
        </div>
        <div class="index__blank--wrap"></div>

        <div class="middle__page--wrap">

            <div class="mini__menucontent--wrap">
                <a href="">
                    <img src="./image/Icon/menu_Icon/home_hover.png" alt="">
                </a>
                <img src="./image/Icon/menu_Icon/score_blank.png" alt="">
                <button class="__a--at btn__as_alink">
                    Hoạt động
                </button>
            </div>
            <h1>Chương trình Thi lái tàu Nhận kho báu</h1>
            <p class="datetime__wrap">12/12/2021</p>
            <img src="./image/Background__img/action_page/Picture1.png" class="__img__" alt="">
            <button class="join__now--btn">
                Tham gia ngay
            </button>
            <a href="" class="__ad__">
                <img src="./image/ad/action/lazada.png" alt="" class="ad__">
            </a>
        </div>
        <div class="center__homepage--content">
        </div>
    </div>


    <div class="footer">
        <div style="background-image: url('./image/Picture/left_footer.png');" class="footer__left--wrap">
            <div style="background-image:url('./image/Picture/Lhouse.png');" class="img__decription--wrap"></div>
            <div class="footer__contact--wrap">

                <tr>
                    <td>
                        <h2>THÔNG TIN LIÊN HỆ</h2>
                    </td>
                    <td>
                        <h3>Ban quản lý đường sắt đô thị</h3>
                    </td>
                    <td>
                        <p style="font-weight: 400; line-height: 19px;">Số điện thoại: <a style="font-weight: 600;">090
                                098 8223</a> </p>
                    </td>
                    <td>
                        <p style="font-size: 16px;font-weight: 400;">Email: <a style="font-weight: 600;">duongmetro@faq.com.vn</a></p>
                    </td>
                    <td>
                        <a href=""><img src="./image/Icon/facebook_icon.png" alt="facebook_icon"></a>
                        <a href=""><img src="./image/Icon/youtube_icon.png" alt="youtube_icon"></a>
                        <a href=""><img src="./image/Icon/phone_icon.png" alt="phone_icon"></a>
                    </td>
                </tr>
            </div>
        </div>
        <div class="footer__middle--wrap">
            <div class="btn__wrap--footer">
                <button><img src="./image/Icon/footer_icon/question_icon.png" alt="">FAQ</button>
                <button><img style="left:40px" src="./image/Icon/footer_icon/than_icon.png" alt="">Hỗ trợ khẩn
                    cấp</button>
            </div>
            <a class="logo__footer--img">
                <img src="./image/Logo/Logo.png" alt="">
            </a>
            <div class="train__footer--contact">
                <a href="./train_experience1.php">Tuyến M1</a>
                <a href="./train_experience2.php">Tuyến M2</a>
                <a href="./train_experience1.php">Tuyến M3</a>
            </div>
        </div>
        <div style="background-image: url('./image/Picture/right_footer.png');" class="footer__right--wrap">
            <div style="background-image: url('./image/Picture/Rhouse.png');" class="img__right--wrap"></div>
            <div class="right__contact--wrap">
                <a href="">Chính sách khuyến mãi</a>
                <a href="">Điều khoản đi tàu</a>
                <a href="">Cam kết của chúng tôi</a>
            </div>
        </div>
    </div>
    </div>
    <script src="./js/header.js"></script>
</body>

</html>