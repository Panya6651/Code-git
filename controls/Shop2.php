<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>
<style>
    #img {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        filter: blur(10px) brightness(0.7);
    }
</style>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>รายละเอียดสินค้า - Dell Alienware Monitor</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <style>
        body {
            background: url('https://sdmntprwestus2.oaiusercontent.com/files/00000000-071c-61f8-b151-afeecedd4004/raw?se=2025-07-08T05%3A14%3A45Z&sp=r&sv=2024-08-04&sr=b&scid=b620fe47-ac00-5c15-a534-28f672070326&skoid=ea0c7534-f237-4ccd-b7ea-766c4ed977ad&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-07-07T22%3A08%3A26Z&ske=2025-07-08T22%3A08%3A26Z&sks=b&skv=2024-08-04&sig=9IhXrzRpuL7ybcsBzFDv3XxXS53yoUI0vHt5TeG4z24%3D');
            background-size: cover;
        }

        .blur-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(8px);
            z-index: -1;
        }

        .price-original {
            text-decoration: line-through;
            color: #999;
        }

        .btn-qty {
            width: 40px;
            height: 40px;
            font-size: 20px;
        }

        .tag {
            display: inline-block;
            background-color: rgb(20, 149, 255);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            margin: 5px 5px 0 0;
            font-size: 14px;
        }

        .product-box {
            border: 1px solid #ddd;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .product-image {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            background-color: #f8f9fa;
        }

        .product-title {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <img src="assets/imgs/12.png" id="img">
    <div class="blur-overlay"></div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 product-box">
                <div class="row">

                    <!-- Carousel แทนภาพเดี่ยว -->
                    <div class="col-md-6 text-center product-image">
                        <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://ihcupload.s3.ap-southeast-1.amazonaws.com/img/product/products42698_800.jpg" alt="ภาพสินค้า 1" class="d-block w-100 rounded">
                                </div>
                                <div class="carousel-item">
                               <img src="https://ihcupload.s3.ap-southeast-1.amazonaws.com/img/product/products42702_800.jpg" alt="ภาพสินค้า 2" class="d-block w-100 rounded">
                                  </div>
                                <div class="carousel-item">
                                   <img src="https://ihcupload.s3.ap-southeast-1.amazonaws.com/img/product/products42701_800.jpg" alt="ภาพสินค้า 3" class="d-block w-100 rounded"> 
                                </div>
                            </div>

                            <!-- ปุ่มควบคุม -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ก่อนหน้า</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">ถัดไป</span>
                            </button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <span class="badge bg-success mb-2">มีสินค้า</span>
                        <h2 class="product-title">MONITOR (จอมอนิเตอร์) DELL ALIENWARE AW2725DF - 26.7 QD-OLED 2K 360Hz (3Y)</h2>
                        <p class="text-muted">แบรนด์: DELL | รหัสสินค้า: SKU-240518910</p>

                        <h3 class="text-danger">ราคา: ฿31,500.00 <span class="price-original"> ฿37,990.00</span></h3>

                        <div class="my-3 d-flex align-items-center">
                            <label class="me-3">จำนวน</label>
                            <button class="btn btn-dark bg-dark btn-qty">-</button>
                            <input type="text" value="01" class="form-control text-center mx-2" style="width: 60px" />
                            <button class="btn btn-dark bg-dark btn-qty">+</button>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-dark bg-dark me-2">
                                <i class="bi bi-cart"></i> เพิ่มในตะกร้า
                            </button>
                        </div>

                        <div>
                            <span class="btn btn-dark bg-dark">#MONITOR</span>
                            <span class="btn btn-dark bg-dark">#จอมอนิเตอร์</span>
                            <span class="btn btn-dark bg-dark">#26.7 QD-OLED 2K 360Hz</span>
                        </div>
                        <div class="mb-3">
                            <br>
                            <button class="btn btn-dark bg-primary">ซื้อเลย</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
