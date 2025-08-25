<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: /itweb1/index.php");
    exit;
}
include "controls/idshop.php";  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="d-flex">
        <?php include '../backend/components/header.php'; ?>

        <main class="p-4 flex-grow-1">
            <h2>เเก้ไขผู้ใช้งาน</h2>
            <form action="controls/editUser.php" method="POST">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">

                <div class="mb-3">
                    <label for="">item</label>
                    <input type="text" name="item" class="form-control" value="<?= htmlspecialchars($user['item']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">delivery</label>
                    <input type="text" name="delivery_status" class="form-control"
                        value="<?= htmlspecialchars($user['delivery_status']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">order</label>
                    <input type="text" name="order_date" class="form-control"
                        value="<?= htmlspecialchars($user['order_date']); ?>">
                </div>
                <div class="mb-3">
                    <label for="">expected</label>
                    <input type="text" name="expected_date" class="form-control"
                        value="<?= htmlspecialchars($user['expected_date']); ?>">

                    <button type="submit" class="btn btn-primary">บันทึก</button>
                    <button type="reset" class="btn btn-dark">รีเซ็ต</button>
                    <a href="food.php"></a>
                </div>
            </form>
            </maim>
    </div>
</body>

</html>