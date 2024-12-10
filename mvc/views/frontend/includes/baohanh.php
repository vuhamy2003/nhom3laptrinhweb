<?php
// warranty-policy.php

// Bắt đầu phiên PHP nếu cần
session_start();

// Dữ liệu về chính sách bảo hành
$storeName = "Cửa Hàng Đặt Trước Sản Phẩm Điện Thoại - SHOPPING";
$policyTitle = "Chính Sách Bảo Hành";
$policyContent = [
    "Thời gian bảo hành" => "Tất cả các sản phẩm đều được bảo hành trong vòng 12 tháng kể từ ngày mua.",
    "Điều kiện bảo hành" => [
        "Sản phẩm vẫn còn trong thời gian bảo hành và có phiếu bảo hành hợp lệ.",
        "Sản phẩm không có dấu hiệu bị can thiệp, sửa chữa bởi bên thứ ba không được ủy quyền.",
        "Không áp dụng bảo hành trong các trường hợp hư hỏng do sử dụng sai cách, rơi vỡ, vào nước hoặc các yếu tố ngoài ý muốn khác."
    ],
    "Quy trình bảo hành" => [
        "Mang sản phẩm và phiếu bảo hành đến cửa hàng hoặc trung tâm bảo hành gần nhất.",
        "Nhân viên sẽ kiểm tra và xác nhận điều kiện bảo hành.",
        "Thời gian xử lý bảo hành có thể từ 7-14 ngày làm việc."
    ],
    "Liên hệ" => "Mọi thắc mắc xin liên hệ qua hotline: 0812021203."
];

// Link trang chủ
$homepageURL = "http://localhost/shopping/";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $policyTitle; ?> - <?php echo $storeName; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
        p {
            margin: 10px 0;
        }
        .back-home {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .back-home a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-home a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $policyTitle; ?></h1>
        <p>Xin chào quý khách!</p>
        <p>Chúng tôi rất cảm ơn bạn đã tin tưởng và lựa chọn sản phẩm của <?php echo $storeName; ?>. Dưới đây là các điều khoản và điều kiện bảo hành của chúng tôi:</p>
        
        <?php foreach ($policyContent as $sectionTitle => $sectionContent): ?>
            <h2><?php echo $sectionTitle; ?></h2>
            <?php if (is_array($sectionContent)): ?>
                <ul>
                    <?php foreach ($sectionContent as $item): ?>
                        <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p><?php echo $sectionContent; ?></p>
            <?php endif; ?>
        <?php endforeach; ?>

        <!-- Nút quay về trang chủ -->
        <div class="back-home">
            <a href="<?php echo $homepageURL; ?>">Quay về trang chủ</a>
        </div>
    </div>
</body>
</html>