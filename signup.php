<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
     <style>
        body {
            font-family: 'Kanit', sans-serif;
        }

        #bgGif {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 150%;
            object-fit: cover;
            z-index: -1;
            filter: blur(10px) brightness(0.7);
        }

        .card {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }

        .form-label,
        h2,
        span,
        a {
            color: white;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.3);
            color: white;
        }

        /* ปรับขนาดภาพด้านขวา */
        .img-side {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;
        }
    </style>
</head>

<body>
    <img src="assets/imgs/4afe65bc-dec0-42f7-a836-06afc0a68a5e.jpg" id="bgGif">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 900px;">
        <div class="card">
            <div class="row g-0 shadow">
                <!-- ฟอร์มด้านซ้าย -->
                <div class="col-md-12 py-3 px-5">
                    <div class="card-body">
                        <!-- สมัครสมาชิก -->
                        <h2 class="text-center">สมัครสมาชิก</h2>
                        <form method="POST" action="controls/createUsers.php">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">ชื่อจริง</label>
                                <input type="text" name="first_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">นามสกุล</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">ที่อยู่ปัจจุบัน</label>
                                <textarea name="address" id="" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">อีเมล์เข้าใช้งาน</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">รหัสผ่าน</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">สมัครสมาชิก</button>
                        </form>
                        <!-- เข้าสู่ระบบ -->
                        <div class="text-center mt-3">
                            <span>หากคุณมีบัญชีเข้าใช้งานแล้ว?</span>
                            <a href="signin.php">เข้าสู่ระบบ</a>
                        </div>
                    </div>
                </div>

                <!-- ฟอร์มด้านขวา -->
                
            </div>
        </div>
    </div>
</body>

</html>

<!-- <div class="container">
    <h2>SignUp Page</h2>
    <form method="POST" action="controls/createUsers.php">
        <div class="mb-3">
            <label for="firstname" class="">Firstname</label>
            <input type="text" name="first_name">
        </div>

        <div>
            <label for="">Lastname</label>
            <input type="text" name="last_name">
        </div>

        <div>
            <label for="">Address</label>
            <textarea name="address" id=""></textarea>
        </div>

        <div>
            <label for="">Phone</label>
            <input type="text" name="phone">
        </div>

        <div>
            <label for="">E-Mail</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>

        <button type="submit">SignUp NOW!!</button>
    </form>
</div> -->