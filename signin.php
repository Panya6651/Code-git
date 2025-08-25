<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>

    <!-- Google Font: Kanit -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom CSS -->
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
            filter: blur(2px) brightness(0.7);
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
        <div class="card w-100">
            <div class="row g-0 shadow">
                <!-- ฟอร์มด้านซ้าย -->
                <div class="col-md-6 py-20 px-20">
                    <div class="card-body">
                        <h2 class="text-center mb-4">เข้าสู่ระบบ</h2>
                        <form method="POST" action="./controls/signinUsers.php">
                            <div class="mb-3">
                                <label class="form-label">อีเมล์</label>
                                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">รหัสผ่าน</label>
                                <input type="password" name="pass" class="form-control" placeholder="********" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
                        </form>
                        <div class="text-center mt-3">
                            <span>หากคุณยังไม่มีบัญชีเข้าใช้งาน?</span>
                            <a href="signup.php">สมัครสมาชิก</a>
                        </div>
                    </div>
                </div>

                <!-- ฟอร์มด้านขวา -->
                <div class="col-md-6 d-none d-md-block">
                    <img src="assets/imgs/12.png" alt="Right Side Image" class="img-side">
                </div>
            </div>
        </div>
    </div>

    <script>
        <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid') : ?>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Invalid email or password',
                footer: 'Please try again.'
            });
        <?php endif; ?>
    </script>
</body>

</html>
