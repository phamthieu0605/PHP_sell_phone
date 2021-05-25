<div class="banner__wrap">
    <div class="banner">
        <div class="banner__logo">
            <a href="index.php" class="banner__logo-link">
                <img src="../ban_dien_thoai/img/logo.png" alt="" class="banner__logo-img">    
            </a>
        </div>

        <!-- Tài khoản, Giỏ hàng, Tìm kiếm -->
        <div class="banner__center"> 
            <div class="banner__center-top">
                <div class="banner__center-acc">
                    <a href="../ban_dien_thoai/dangnhap.php" class="banner__center-acc-link" title="đăng nhập để xem chi tiết hơn">
                        <i class="banner__center-acc-icon fas fa-user"></i>Đăng nhập
                    </a>
                </div>

                <div class="banner__center-acc">
                    <a href="../ban_dien_thoai/dangky.php" class="banner__center-acc-link" title="Đăng ký để xem chi tiết hơn">
                    <i class="banner__center-acc-icon fas fa-user-plus"></i>Đăng ký
                    </a>
                </div>

                <div class="banner__center-cart">
                    <a href="index.php?u=giohang#" class="banner__center-cart-link" title="Bấm vào đây để xem giỏ hàng">
                        <i class="banner__center-cart-icon fas fa-shopping-cart"></i>Giỏ hàng
                    </a>
                </div>
            </div>

            <div class="banner__center-bot">
                <form action="?u=timkiem" method="POST">
                    <input type="text" placeholder="Tìm kiếm..." class="banner__center-bot-input" name="txtsearch">
                    <button type="submit" class="search-btn" name="search">
                        <i class="search-icon fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Đồng hồ -->
        <div class="banner__clock">
            
        </div>
    </div>
</div>