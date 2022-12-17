<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $result = $_COOKIE["result"];
    ?>
    <div class="relative left-1/3 w-1/3 border-solid bg-red-500 border-solid border-2 border-[#4f85b4] ">
        <h4 class="italic font-bold text-center">Điểm: <?php echo $result ?>/10</h4>
        <h4 class="italic font-bold text-center">Nhận xét:
            <?php
            if ($result < 4) {
                echo 'Bạn quá kém, cần ôn tập thêm';
            }
            if ($result >= 4 && $result <= 7) {
                echo 'Cũng bình thường';
            }
            if ($result > 7) {
                echo 'Sắp sửa làm được trợ giảng lớp PHP';
            }
            ?>
        </h4>
    </div>
</body>

</html>