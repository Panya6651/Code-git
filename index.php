<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buy & Sell Shop</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>

    <?php include './components/header.php'; ?>

    <!-- Hero Section -->
    <section class="d-flex align-items-center justify-content-center text-white text-center"
        style="background: url('assets/imgs/20.jpg') center center / cover no-repeat; height: 40vh;">
        <div class="container">
            <div class="bg-dark bg-opacity-50 p-5 rounded">
                <h1 class="display-4">ยินดีต้อนรับสู่ร้านซื้อขายออนไลน์</h1>
                <p class="lead">ซื้อขายสินค้าหลากหลาย ได้ง่าย ปลอดภัย และรวดเร็ว</p>
                <a href="#products" class="btn btn-light btn-lg mt-3">เริ่มช้อปเลย</a>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section id="products" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">สินค้าของเรา</h2>
            <div class="row">

                <!-- Product 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div id="productCarouselA" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/imgs/2.jpg" class="d-block w-100" alt="ภาพสินค้า A - 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgs/one.jpg" class="d-block w-100" alt="ภาพสินค้า A - 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgs/products42701_800.jpg" class="d-block w-100"
                                        alt="ภาพสินค้า A - 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarouselA"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ก่อนหน้า</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarouselA"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ถัดไป</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MONITOR DELL ALIENWARE AW2725DF - 26.7" QD-OLED 2K 360Hz</h5>
                            <p class="text-primary fw-bold">ราคา: ฿31,500 บาท</p>
                            <a href="controls/Shop2.php" class="btn btn-primary">รายละเอียด</a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div id="productCarouselA2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/imgs/G.jpg" class="d-block w-100" alt="ภาพสินค้า B - 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgs/H.jpg" class="d-block w-100" alt="ภาพสินค้า B - 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgs/J.jpg" class="d-block w-100" alt="ภาพสินค้า B - 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarouselA2"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ก่อนหน้า</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarouselA2"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ถัดไป</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">VGA ASUS ROG ASTRAL LC RTX 5090 OC EDITION - 32GB GDDR7</h5>
                            <p class="text-primary fw-bold">ราคา: ฿149,990 บาท</p>
                            <a href="controls/Shop2.php" class="btn btn-primary">รายละเอียด</a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div id="productCarouselA3" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/imgs/M.jpg" class="d-block w-100" alt="ภาพสินค้า C - 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imgs/S.jpg" class="d-block w-100" alt="ภาพสินค้า C - 2">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarouselA3"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ก่อนหน้า</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarouselA3"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ถัดไป</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">NOTEBOOK MSI VECTOR 18 HX A2XWHG-662TH</h5>
                            <p class="text-primary fw-bold">ราคา: ฿94,990 บาท</p>
                            <a href="controls/Shop2.php" class="btn btn-primary">รายละเอียด</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include './components/footer.php'; ?>

    <!-- SweetAlert: Success Login -->
    <script>
    <?php if (isset($_GET['success']) && $_GET['success'] == 'true') : ?>
    Swal.fire({
        icon: 'success',
        title: 'เข้าสู่ระบบสำเร็จ!',
        text: 'คุณสามารถเริ่มต้นช้อปปิ้งได้เลย',
        footer: 'ขอให้สนุกกับการซื้อของนะ!'
    });
    <?php endif; ?>
    </script>

</body>

</html>