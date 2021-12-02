<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>形象頁</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        padding: 0;
        margin: 0;
        height: 100%;
    }

    .fk { /*標題縮小後 */
        background-image: linear-gradient(50deg, rgba(131, 98, 48, 0.8), rgba(127, 64, 187, 0.6)), url(https://source.unsplash.com/random);
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        padding: 30px 0;
        height: 100%;
        overflow: auto;
        /* display: flex;
        justify-content: center;
        align-items: center;        */
    }

    @media screen and (min-width: 740px) { /*標題正常網頁 */
        .fk {
            background-image: linear-gradient(50deg, rgba(131, 98, 48, 0.8), rgba(127, 64, 187, 0.6)), url(https://source.unsplash.com/random);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding: 100px 0;
            height: 100%;
            overflow: auto;
        }
    }

    .tit {
        text-align: center;
    }

    .tit h1 {
        font-family: 微軟正黑體; /*標題縮小後 */
        /* font-family: 標楷體; */
        color: rgb(0, 0, 0);
        font-size: 40px;

    }

    @media screen and (min-width: 740px) { /*標題正常網頁 */
        .tit h1 {
            font-family: 微軟正黑體;
            font-size: 80px;
            /* font-family: 標楷體; */
            color: rgb(255, 255, 255);
        }
    }

    .box { /*表格框線縮小後 */
        background-color: rgba(255, 255, 255, .2);
        border: 1px solid #fff;
        padding: 15px;

    }

    @media screen and (min-width: 740px) { /*表格框線正常網頁 */
        .box {
            background-color: rgba(255, 255, 255, .2);
            border: 2px solid #fff;
            padding: 50px;
        }
    }

    #title { /*表格置中縮小後 */
        /*width: 80%;*/
        width: calc(100%/1.5);
        margin: auto;
        padding: 40px;
        text-align: left;
    }

    @media screen and (min-width: 740px) { /*表格置中正常網頁 */
        #title {
            width: 47%;
            /* width: calc(100%/2); */
            /* margin: auto; */
            padding: 40px;
            text-align: center;
        }
    }

    .box a {
        text-decoration: none;
        color: rgb(217, 215, 250);
    }

    @media screen and (min-width: 740px) {
        .box a {
            text-decoration: none;
            color: antiquewhite;
        }
    }

    p { /*表格縮小後 */
        margin: 10px;
    }

    @media screen and (min-width: 740px) { /*表格正常網頁 */
        p {
        margin: 5px;
    }
    }
</style>

<body>
    <div class="fk full-width">
        <div class="tit">
            <h1>形象連結</h1>
            <a href="login.php" class="badge badge-danger">登入</a>
            <a href="logout.php?logout=ture" class="badge badge-danger">登出</a>
            <!-- 判斷若無session則顯示登入，若判斷有SESSION則顯示登出-->
            <a href="admin.php" class="badge badge-warning">後台</a>
            <a href="games-total.php" class="badge badge-info">賽事表</a>
        </div>
        <div class="fixed-width" id="title">
            <div class="box">   
                <a href="NO.8.house/index.html" target="_blank">民宿的範本</a>
                <p>也可以改成汽車旅館</p>
                <br>
                <hr>
                <br>
                <a href="Number.7.restaurant/index.html" target="_blank">餐廳範本</a>
                <p>也可以改成小飯館</p>
                <br>
                <hr>
                <br>
                <a href="layout/layout.html" target="_blank">婚攝網頁</a>
                <p>RWD未完成</p>
                <br>
                <hr>
                <br>
                <a href="phpmysql/lo/kai.html" target="_blank">blog首頁</a>
                <p>BLOG網站範例</p>
                <br>
                <hr>
                <br>
                <a href="phpmysql/lo/Blog.html" target="_blank">blog文章</a>
                <p>BLOG網站範例</p>
                <br>
                <hr>
                <br>
                <a href="phpmysql/lo/album.html" target="_blank">blog相簿</a>
                <p>BLOG網站範例 </p>
                <br>
                <hr>
                <br>
                <a href="phpmysql/lo/login.php" target="_blank">登入</a>
                <p>登入範例</p>
                <br>
                <hr>
                <br>
                <a href="phpmysql/lo/greate.php" target="_blank">註冊</a>
                <p>註冊範例</p>
                <br>
                <hr>
                <br>
                <a href="ask.html" target="_blank">問卷調查</a>
                <p>簡易版</p>
                <br>
                <hr>
                <br>
                <a href="old-car/car.html" target="_blank">中古車網</a>
                <p>RWD未完成</p>
                <br>
                <hr>
                <br>
                <a href="hamburger-king/hamburger.html" target="_blank">BLOG</a>
                <p>BLOG網站範例</p>
                <br>
                <hr>
                <br>
                <a href="col-grid.html" target="_blank">瀑布流</a>
                <p>可結合後端，可使用於相簿或商品頁</p>
                <hr>
                <br>
                <a href="profile/profile.html" target="_blank">個人檔案</a>
                <p>50% %</p>
                <br>
                <hr>
                <br>
                <a href="etf/ETF.html" target="_blank">巴菲特文章</a>
                <p>半成品</p>
                <br>
                <hr>
                <br>
                <a href="gallery.html" target="_blank">相片切換</a>
                <p>點擊換張</p>
                <br>
                <hr>
            </div>
        </div>
    </div>
</body>

</html>
<!-- ,rgba(57, 47, 150, 0.4),rgba(161, 41, 121, 0.2) -->