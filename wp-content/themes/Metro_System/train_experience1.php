<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        .center__homepage--content {
            background-image: url('./image/Background__img/search_page/Picture3.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: 1016px;
            position: relative;
        }

        .btn__train--wrap {
            color: white;
            background-color: rgba(0, 22, 39, 0.6);
            ;
            backdrop-filter: blur(2px);
            border: none;
            border-radius: 8px;
            padding: 14px 16px;
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
            line-height: 22px;
            margin-top: 40px;
        }

        .__absolute {
            position: absolute;
            left: 40px;

        }

        .stroke180 {
            transform: rotate(180deg);
        }

        .top__show--wrap {
            display: flex;
            justify-content: center;
        }

        .stroke {
            height: 24px;
        }

        .div__center-- * {
            margin-left: 12px;
            font-weight: 700;
            font-size: 16px;
            line-height: 22px;
        }
        .wat{
            background-color: #E83A27;
        }
        .bottom__show--wrap{
            position: absolute;
            bottom: 113px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .zoom__show--wrap{
            color: white;
            background-color: rgba(0, 22, 39, 0.6);
            ;
            backdrop-filter: blur(2px);
            border: none;
            border-radius: 8px;
            padding: 14px 16px;
            cursor: pointer;
            font-weight: 700;
            font-size: 16px;
            line-height: 22px;
            margin-top: 40px;
        }
        .zoom__and--content{
            padding: 14px 16px;
            background-color: rgba(0, 22, 39, 0.6);
            backdrop-filter: blur(2px);
            width: fit-content;
            display: flex;
            border-radius: 6px;
            color: white;
        }
        .zoom__and--content button{
            border: none;
            cursor: pointer;
            background-color: unset;
        }
        .zoom__and--content .__img__{
            width: 24px;
            height: 24px;
        }
        .zoom__and--content *{
            margin-right: 5px;
            margin-left: 5px;
        }
        .line{
            width: 1px;
            background-color: white;
        }
        .bottom__show--wrap h2{
            color: white;
            margin-top: 24px;
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
                <a style="cursor: pointer;" onmouseenter="show__train()"><img class="img__wrap--nav"
                        src="./image/Icon/menu_Icon/train.png" alt=""> TUYẾN
                    TÀU <img class="score__btn--wrap" src="./image/Icon/menu_Icon/score.png" alt=""></a>
                <a href="./search.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/search.png" alt=""> TRA
                    CỨU</a>
                <a href="./action.php"><img class="img__wrap--nav" src="./image/Icon/menu_Icon/work.png" alt=""> HOẠT
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
        <div class="center__homepage--content">
            <div class="top__show--wrap">
                <button onclick="window.location.href='./index.php'" class="btn__train--wrap __absolute">
                    Quay lại trang trước
                </button>
                <div class="div__center--">
                    <img class="stroke" src="./image/Icon/Stroke.png" alt="">
                    <button class="btn__train--wrap">
                        Tuyến M1
                    </button>
                    <button class="btn__train--wrap">
                        Tuyến M2
                    </button>
                    <button class="btn__train--wrap wat">
                        Tuyến M3
                    </button>
                    <button class="btn__train--wrap">
                        Tuyến M4
                    </button>
                    <button class="btn__train--wrap">
                        Tuyến M5
                    </button>
                    <img src="./image/Icon/Stroke.png" alt="" class="stroke stroke180">

                </div>
            </div>
            <div class="bottom__show--wrap">
                <div class="zoom__and--content">
                    <button class="out"><img class="__img__" src="./image/Icon/out.png" alt=""></button>
                    <div class="line"></div>
                    <p class="percest">100%</p>
                    <div class="line"></div>
                    <button class="in"><img class="__img__" src="./image/Icon/in.png" alt=""></button>
                </div>
                <h2>Kéo chuột hoặc click vào mũi tên để di chuyển hình ảnh</h2>
            </div>
        </div>
    </div>
    </div>
    <script src="./js/header.js"></script>
</body>

</html>