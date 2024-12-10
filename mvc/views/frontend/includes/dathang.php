<?php
// order-policy.php

// Bắt đầu phiên PHP nếu cần
session_start();

// Dữ liệu chính sách đặt hàng
$storeName = "Cửa Hàng Đặt Trước Sản Phẩm Điện Thoại - SHOPPING";
$policyTitle = "Chính Sách Đặt Hàng";
$policyContent = [
    "Đối tượng áp dụng" => "Chính sách đặt hàng này áp dụng cho tất cả khách hàng có nhu cầu đặt trước các sản phẩm điện thoại mới sắp ra mắt của cửa hàng Shopping.",
    "Lợi ích khi đặt trước" => [
        "Được đảm bảo nhận hàng ngay trong đợt phát hành đầu tiên.",
        "Hưởng ưu đãi giảm giá đặc biệt lên đến 5% giá trị sản phẩm.",
        "Nhận quà tặng kèm như tai nghe, ốp lưng hoặc voucher giảm giá cho lần mua tiếp theo.",
        "Ưu tiên hỗ trợ trong các chương trình bảo hành và chăm sóc khách hàng."
    ],
    "Quy trình đặt hàng" => [
        "Bước 1: Khách hàng truy cập website của cửa hàng để chọn sản phẩm muốn đặt trước.",
        "Bước 2: Nhận thông báo xác nhận đặt hàng qua cuộc gọi hoặc tin nhắn SMS.",
        "Bước 3: Đặt cọc trước 20% giá trị sản phẩm để xác nhận đặt hàng.",
        "Bước 4: Đến nhận sản phẩm tại cửa hàng hoặc chọn giao hàng tận nơi vào ngày phát hành chính thức."
    ],
    "Chính sách hủy đơn hàng" => "Khách hàng có thể hủy đơn đặt hàng trước ngày phát hành chính thức và sẽ được hoàn lại tiền đặt cọc. Sau ngày phát hành, việc hủy đơn sẽ không được áp dụng.",
    "Liên hệ" => "Nếu có bất kỳ thắc mắc nào, vui lòng liên hệ qua hotline: 0812021203."
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
        <p>Kính gửi quý khách hàng,</p>
        <p>Chúng tôi cảm ơn quý khách đã tin tưởng và lựa chọn sản phẩm của <?php echo $storeName; ?>. Để mang đến sự tiện lợi và quyền lợi tối đa, chúng tôi cung cấp chính sách đặt hàng như sau:</p>
        
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