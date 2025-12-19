<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Thi Cuối Kỳ</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            color: #333;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }
        /* Đây là phần quan trọng nhất của đề bài */
        h1 {
            color: #d63031; /* Màu đỏ nổi bật */
            font-size: 1.5rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        p {
            color: #636e72;
            line-height: 1.6;
        }
        .info-box {
            background: #f1f2f6;
            padding: 10px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 0.9rem;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #0984e3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #74b9ff;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1> PM1_CuoiKy_TranTuanDat </h1>
        
        <p>Xin chào! Đây là sản phẩm bài thi kết thúc học phần.</p>
        
        <div class="info-box">
            <?php 
                echo "Thời gian server: " . date("H:i:s d/m/Y");
                echo "<br>Phiên bản PHP: " . phpversion();
            ?>
        </div>

        <a href="#" class="btn">Xem chi tiết</a>
    </div>

</body>
</html>