<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4SCinema Cầu Giấy</title>
    <link rel="icon" href="/assets/img/logo4S-onlyic.png" type="x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/cinemas/Showing_Movies/showing_movies.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-free-6.6.0-web/css/all.min.css">
</head>

<body>
    <div class="app">
        <header class="hd">
            <div class="grid">
                <div class="hd__main">       
                    <ul class="hd__left">
                        <li class="hd__logo">
                            <a href="/index.html" class="hd__logo-link">
                                <img src="/assets/img/logo4S.png" alt="4S CINEMA" class="hd__logo-img">
                            </a>
                        </li>
                        <li class="hd__nav-item hd__nav-item--local ">
                            Rạp phim
                            <div class="hd__local">
                                <a href="/cinemas/Showing_Movies/4SCinema_CauGiay.html" class="hd__local-link">
                                    4SCinema Cầu Giấy
                                </a>
                                <a href="/cinemas/Showing_Movies/4SCinema_HaiBaTrung.html" class="hd__local-link">
                                    4SCinema Hai Bà Trưng
                                </a>
                                <a href="/cinemas/Showing_Movies/4SCinema_LongBien.html" class="hd__local-link">
                                    4SCinema Long Biên
                                </a>
                                <a href="/cinemas/Showing_Movies/4SCinema_MyDinh.html" class="hd__local-link">
                                    4SCinema Mỹ Đình
                                </a>
                                <a href="/cinemas/Showing_Movies/4SCinema_TayHo.html" class="hd__local-link">
                                    4SCinema Tây Hồ
                                </a>
                                <a href="/cinemas/Showing_Movies/4SCinema_ThanhXuan.html" class="hd__local-link">
                                    4SCinema Thanh Xuân
                                </a>                           
                            </div>
                        </li>
                        <li class="hd__nav-item">
                            <a href="/showtimes.html" class="hd__nav-link">Lịch chiếu</a>
                        </li>
                        <li class="hd__nav-item">
                            <a href="/promotion.html" class="hd__nav-link">Ưu đãi</a>
                        </li>
                    </ul>

                   
                    <ul class="hd__right">
                        <li class="hd__search">
                            <div class="hd__search-wr">
                                <input type="text" class="hd__search-input" placeholder="Tìm phim, rạp">
                                <i class="hd__search-icon fa-solid fa-magnifying-glass"></i>
                            </div>
                        </li>
                        <li class="hd__login">
                            <i class="hd__login-icon fa-regular fa-circle-user"></i>
                            <a href="/login.html" class="hd__login-link">                                   
                                Đăng nhập
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>


        <!-- Phần thân trang web -->
        <div class="main__container">
            <main class="main">
                <div class="cinemas__banner">
                    <div class="cinemas__banner">
                        <div class="cinemas__banner-left">
                            <img class="cinemas__banner-img" src="/assets/img/banner-showtime.jpg" alt="">
                        </div>
                        <div class="cinemas__banner-right">
                            <div class="cinemas__banner-right-box">
                                <div class="cinemas__banner-name">4SCinema Cầu Giấy</div>
                                
                                <div class="cinemas__banner-location">
                                    <span class="icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <span class="cinemas__banner-location">Số 321, Đường Trần Duy Hưng, Phường Trung Hòa, Quận Cầu Giấy, Hà Nội</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cinemas__banner-menu-bar">
                    <div class="banner__menu-list"><a class="banner__menu-link" href="/cinemas/Showing_Movies/4SCinema_CauGiay.html">Phim đang chiếu</a></div>
                    <div class="banner__menu-list"><a class="banner__menu-link" href="/cinemas/Upcoming_Movies/4SCinema_CauGiay.html">Phim sắp chiếu</a></div>
                    <div class="banner__menu-list"><a class="banner__menu-link" href="">Suất chiếu đặc biệt</a></div>
                    <div class="banner__menu-list"><a class="banner__menu-link" href="/cinemas/Ticket_Price/4SCinema_CauGiay.html">Bảng giá vé</a></div>
                </div>

                <div class="cinemas__showing-container">
                    <div class="cinemas__showing-title">Phim đang chiếu</div>
                    <!-- Phim 1 -->
                    <div class="cinemas__showing-movies-row">
                        <div class="showing__movies">
                            <img class="showing__movies-img" src="/assets/img/Avengers_EndGame_poster.jpg" alt="">
                            <div class="showing__movies-infor">
                                <span class="showing__movies-name">Avengers: Hồi kết</span>
                                <ul class="showing__movies-attribute">
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-tag"></i>
                                        <li class="movies__list-content">Hành động</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-clock"></i>
                                        <li class="movies__list-content">182</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <li class="movies__list-content">Mỹ</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-closed-captioning"></i>
                                        <li class="movies__list-content">Phụ đề</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-user"></i>
                                        <li class="movies__list-content">Phim dành cho khán giả từ đủ 13 tuổi trở lên(13+)</li>
                                    </div>
                                </ul>

                                <div class="showing__movies-showtimes"> 
                                    <div class="showing__movies-date">
                                        <span class="showing__movies-time">
                                            Thứ 6, ngày 20/09/2024
                                        </span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="showing__movies-time">
                                        <p class="showing__movies-ticket-class">Standard</p>
                                        <div class="showing__movies-time-container">
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:15</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:45</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:30</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="showing__movies-showtimes"> 
                                    <div class="showing__movies-date">
                                        <span>
                                            Thứ 7, ngày 21/09/2024
                                        </span>
                                        <i class="toggle fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="showing__movies-time">
                                        <p class="showing__movies-ticket-class">Standard</p>
                                        <div class="showing__movies-time-container">
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">14:10</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">14:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:15</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:45</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">18:00</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="showing__showtimes-link">
                                    <a class="showtimes-link" href="">Xem thêm lịch chiếu</a>
                                </div>
                            </div>
                        </div>

                        <!-- Phim thứ 2 -->
                        <div class="showing__movies">
                            <img class="showing__movies-img" src="/assets/img/Dune-Movie-Main-Poster.jpg" alt="">
                            <div class="showing__movies-infor">
                                <span class="showing__movies-name">Xứ cát</span>
                                <ul class="showing__movies-attribute">
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-tag"></i>
                                        <li class="movies__list-content">Hành động, Phiêu lưu</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-clock"></i>
                                        <li class="movies__list-content">155</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <li class="movies__list-content">Mỹ, Canada</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-closed-captioning"></i>
                                        <li class="movies__list-content">Phụ đề</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-user"></i>
                                        <li class="movies__list-content">Phim dành cho khán giả từ đủ 13 tuổi trở lên(13+)</li>
                                    </div>
                                </ul>

                                <div class="showing__movies-right">
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span class="showing__movies-time">
                                                Thứ 6, ngày 20/09/2024
                                            </span>
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span>
                                                Thứ 7, ngày 21/09/2024
                                            </span>
                                            <i class="toggle fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:10</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">18:00</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="showing__showtimes-link">
                                    <a class="showtimes-link" href="">Xem thêm lịch chiếu</a>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Phim thứ 3 -->
                        <div class="showing__movies">
                            <img class="showing__movies-img" src="/assets/img/SpiderMan_poster.png" alt="">
                            <div class="showing__movies-infor">
                                <span class="showing__movies-name">Người nhện: Không còn nhà</span>
                                <ul class="showing__movies-attribute">
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-tag"></i>
                                        <li class="movies__list-content">Hành động</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-clock"></i>
                                        <li class="movies__list-content">148</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <li class="movies__list-content">Mỹ</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-closed-captioning"></i>
                                        <li class="movies__list-content">Phụ đề</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-user"></i>
                                        <li class="movies__list-content">Phim dành cho khán giả từ đủ 13 tuổi trở lên(13+)</li>
                                    </div>
                                </ul>

                                <div class="showing__movies-showtimes"> 
                                    <div class="showing__movies-date">
                                        <span class="showing__movies-time">
                                            Thứ 6, ngày 20/09/2024
                                        </span>
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="showing__movies-time">
                                        <p class="showing__movies-ticket-class">Standard</p>
                                        <div class="showing__movies-time-container">
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:15</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:45</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:30</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="showing__movies-showtimes"> 
                                    <div class="showing__movies-date">
                                        <span>
                                            Thứ 7, ngày 21/09/2024
                                        </span>
                                        <i class="toggle fa-solid fa-angle-down"></i>
                                    </div>
                                    <div class="showing__movies-time">
                                        <p class="showing__movies-ticket-class">Standard</p>
                                        <div class="showing__movies-time-container">
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">14:10</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">14:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">15:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:15</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">16:45</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:00</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">17:30</a>
                                            </div>
                                            <div class="movies__time-box">
                                                <a class="movies__box-link" href="">18:00</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="showing__showtimes-link">
                                    <a class="showtimes-link" href="">Xem thêm lịch chiếu</a>
                                </div>
                            </div>
                        </div>

                        <!-- Phim thứ 4 -->
                        <div class="showing__movies">
                            <img class="showing__movies-img" src="/assets/img/get-out-poster.jpg" alt="">
                            <div class="showing__movies-infor">
                                <span class="showing__movies-name">Trốn thoát</span>
                                <ul class="showing__movies-attribute">
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-tag"></i>
                                        <li class="movies__list-content">Kinh dị, Tâm lý</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-clock"></i>
                                        <li class="movies__list-content">104</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <li class="movies__list-content">Mỹ</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-closed-captioning"></i>
                                        <li class="movies__list-content">Phụ đề</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-user"></i>
                                        <li class="movies__list-content">Phim dành cho khán giả từ đủ 17 tuổi trở lên(17+)</li>
                                    </div>
                                </ul>

                                <div class="showing__movies-right">
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span class="showing__movies-time">
                                                Thứ 6, ngày 20/09/2024
                                            </span>
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span>
                                                Thứ 7, ngày 21/09/2024
                                            </span>
                                            <i class="toggle fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:10</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">18:00</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="showing__showtimes-link">
                                    <a class="showtimes-link" href="">Xem thêm lịch chiếu</a>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Phim thứ 5 -->
                        <div class="showing__movies">
                            <img class="showing__movies-img" src="/assets/img/inside-out-2-poster.webp" alt="">
                            <div class="showing__movies-infor">
                                <span class="showing__movies-name">Những mảnh ghép cảm xúc 2</span>
                                <ul class="showing__movies-attribute">
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-tag"></i>
                                        <li class="movies__list-content">Hoạt hình, Hài hước</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-clock"></i>
                                        <li class="movies__list-content">98</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <li class="movies__list-content">Mỹ</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-closed-captioning"></i>
                                        <li class="movies__list-content">Phụ đề</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-user"></i>
                                        <li class="movies__list-content">Phim dành cho khán giả từ đủ 13 tuổi trở lên(13+)</li>
                                    </div>
                                </ul>

                                <div class="showing__movies-right">
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span class="showing__movies-time">
                                                Thứ 6, ngày 20/09/2024
                                            </span>
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span>
                                                Thứ 7, ngày 21/09/2024
                                            </span>
                                            <i class="toggle fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:10</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">18:00</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="showing__showtimes-link">
                                    <a class="showtimes-link" href="">Xem thêm lịch chiếu</a>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Phim thứ 6 -->
                        <div class="showing__movies">
                            <img class="showing__movies-img" src="/assets/img/BoGia_poster.jpg" alt="">
                            <div class="showing__movies-infor">
                                <span class="showing__movies-name">Bố Già</span>
                                <ul class="showing__movies-attribute">
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-tag"></i>
                                        <li class="movies__list-content">Tâm lý, Gia đình</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-clock"></i>
                                        <li class="movies__list-content">128</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <li class="movies__list-content">Việt Nam</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-closed-captioning"></i>
                                        <li class="movies__list-content">VN</li>
                                    </div>
                                    <div class="showing__movies-label">
                                        <i class="fa-regular fa-user"></i>
                                        <li class="movies__list-content">Phim dành cho khán giả từ đủ 18 tuổi trở lên(18+)</li>
                                    </div>
                                </ul>

                                <div class="showing__movies-right">
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span class="showing__movies-time">
                                                Thứ 6, ngày 20/09/2024
                                            </span>
                                            <i class="fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showing__movies-showtimes"> 
                                        <div class="showing__movies-date">
                                            <span>
                                                Thứ 7, ngày 21/09/2024
                                            </span>
                                            <i class="toggle fa-solid fa-angle-down"></i>
                                        </div>
                                        <div class="showing__movies-time">
                                            <p class="showing__movies-ticket-class">Standard</p>
                                            <div class="showing__movies-time-container">
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:10</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">14:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">15:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:15</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">16:45</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:00</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">17:30</a>
                                                </div>
                                                <div class="movies__time-box">
                                                    <a class="movies__box-link" href="">18:00</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="showing__showtimes-link">
                                    <a class="showtimes-link" href="">Xem thêm lịch chiếu</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <!-- khuyến mãi -->
                <section class="promotion">
                
                    <div class="movie-slide-hd">
                        <h1>Khuyến mãi</h1>
                    </div>
                    <div class="swiper-container">

                        <div class="promotion-container">
                            <div class="promotion-list">
                                <div class="promotion-item">
                                    <a href="" >
                                        <img src="/assets/img/promotion1.webp" alt="khuyến mãi 1">
                                    </a>
                                </div>
    
                                <div class="promotion-item">
                                    <a href="">
                                        <img src="/assets/img/promotion2.webp" alt="khuyến mãi 2">
                                    </a>
                                </div>
    
                                <div class="promotion-item">
                                    <a href="">
                                        <img src="/assets/img/promotion3.webp" alt="khuyến mãi 3">
                                    </a>                                
                                </div>
    
                                <div class="promotion-item">
                                    <a href="">
                                        <img src="/assets/img/promotion4.webp" alt="khuyến mãi 4">
                                    </a>                 
                                </div>                               
                            </div>               
                        </div>
                        <!-- bullet -->
                        <div class="movie-change-bullet">
                            <span class="movie-bullet movie-bullet-active"></span>
                            <span class="movie-bullet"></span>
                        </div>

                        <!-- nút chuyển trang -->
                        <div class="arrow-btn-prev">
                            <i class="fa-solid fa-angle-left"></i>
                        </div>
                        <div class="arrow-btn-next">
                            <i class="fa-solid fa-angle-right"></i>
                        </div>

                        <!-- nút tất cả ưu đãi -->
                        <div class="btn-showtimes">
                        <a href=""> 
                            <button class="btn-more ">Tất cả ưu đãi</button>
                        </a>
                        </div>
                    </div>        
                 </section>
            </main>
        </div>





















        <!-- Footer -->
        <footer class="footer">
            <div class="grid">

                <div class="footer-container">
                    <!-- Khối footer top -->
                    <div class="footer-top">
                        <!-- Khối footer nhỏ bên trái                     -->
                        <div class="footer-top-left">
                            <div class="footer-left-logo"><img class="footer__logo-img" src="/assets/img/logo4S-footer.png" alt=""></div>
                            <div class="footer-left-slogan">Your satisfaction is our joy !</div>
                            <div class="btn-order">
                                <button class="btn ticket">Đặt vé</button>
                                <button class="btn food">Đặt bắp nước</button>
                            </div>
                            <div class="footer-left-contact">
                                <a href="https://www.facebook.com/chotung.mrt"><i class="fa-brands fa-facebook"></i></a>
                                <a href="https://www.tiktok.com/@nguyenducha264"><i class="fa-brands fa-tiktok"></i></a>
                                <a href="https://www.instagram.com/bo0.905/"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://discord.gg/tvpEumX9"><i class="fa-brands fa-discord"></i></a>
                            </div>
                        </div>
        
                        <!-- Khối footer nhỏ bên phải                     -->
                        <div class="footer-top-right">
                            <div class="footer-column">
                                <div class="footer-menu-column footer-column-account">
                                    <ul class="footer-menu-list">
                                        <p class="footer-column-title">Tài khoản</p>
                                        <a class="footer-column-link" href="/login.html"><li class="footer-column-menu">Đăng nhập</li></a>
                                        <a class="footer-column-link" href="/login.html"><li class="footer-column-menu">Đăng ký</li></a>
                                        <a class="footer-column-link" href=""><li class="footer-column-menu">Membership</li></a>
                                    </ul>
                                </div>
                            </div>    
                            <div class="footer-column">
                                <div class="footer-menu-column footer-column-watching-movie">
                                    <ul class="footer-menu-list">
                                        <p class="footer-column-title">Xem phim</p>
                                        <a class="footer-column-link" href="/cinemas/Showing_Movies/Showing_Movies.html"><li class="footer-column-menu">Phim đang chiếu</li></a>
                                        <a class="footer-column-link" href="/cinemas/Upcoming_Movies/Upcoming_Movies.html"><li class="footer-column-menu">Phim sắp chiếu</li></a>
                                        <a class="footer-column-link" href=""><li class="footer-column-menu">Suất chiếu đặc biệt</li></a>
                                    </ul>
                                </div>
                            </div>
        
                            <div class="footer-column">
                                <div class="footer-menu-column footer-column-my-cinemas">
                                    <ul class="footer-menu-list">
                                        <p class="footer-column-title">4SCinema</p>
                                <a class="footer-column-link" href=""><li class="footer-column-menu">Giới thiệu</li></a>
                                <a class="footer-column-link" href=""><li class="footer-column-menu">Liên hệ</li></a>
                                <a class="footer-column-link" href=""><li class="footer-column-menu">Tuyển dụng</li></a>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-column">
                        <div class="footer-menu-column footer-column-cinemas-system">
                            <ul class="footer-menu-list">
                                <p class="footer-column-title">Hệ thống rạp</p>
                                <a class="footer-column-link" href="/cinemas/Showing_Movies/4SCinema_CauGiay.html"><li class="footer-column-menu">4SCinema Cầu Giấy</li></a>
                                <a class="footer-column-link" href="/cinemas/Showing_Movies/4SCinema_HaiBaTrung.html"><li class="footer-column-menu">4SCinema Hai Bà Trưng</li></a>
                                <a class="footer-column-link" href="/cinemas/Showing_Movies/4SCinema_LongBien.html"><li class="footer-column-menu">4SCinema Long Biên</li></a>
                                <a class="footer-column-link" href="/cinemas/Showing_Movies/4SCinema_MyDinh.html"><li class="footer-column-menu">4SCinema Mỹ Đình</li></a>
                                <a class="footer-column-link" href="/cinemas/Showing_Movies/4SCinema_TayHo.html"><li class="footer-column-menu">4SCinema Tây Hồ</li></a>
                                <a class="footer-column-link" href="/cinemas/Showing_Movies/4SCinema_TayHo.html"><li class="footer-column-menu">4SCinema Thanh Xuân</li></a>          
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <i class="fa-regular fa-copyright"></i>
                    <p class="copyright">2024 4SCinema. All rights reserved.</p>
                </div>

                <div class="footer-bottom-right">
                    <a class="footer-bottom-right-items" href="/policy.html">Chính sách bảo mật</a>
                    <a class="footer-bottom-right-items" href="">Tin điện ảnh</a>
                    <a class="footer-bottom-right-items" href="">Hỏi và đáp</a>
                </div>
            </div>
        </div>
            </div>

    </footer>
    </div>
    <script src="/script.js"></script>    
</body>
</html>