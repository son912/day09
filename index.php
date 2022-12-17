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
    include("./variables.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['submit']) {
            $count = 0;
            $result = 0;
            foreach ($questions as $key => $value) {
                $count++;
                if ($count > 5) break;
                if (isset($_POST["$key"])) {
                    if ($_POST["$key"] == $answers["ans" . $count]) {
                        $result++;
                    }
                }
            }
        }
        setcookie("result", $result);
        header("location: ./second.php");
    }
    ?>

    <form action="" method="post">
        <h1 class="mt-3 text-center text-3xl font-bold">Trắc nghiệm toán học</h1>
        <div>
            <?php
            $count = 0;
            foreach ($questions as $ques => $value) {
                $count++;
                echo '<div class="mt-5 mx-5">
                                    <label class="text-xl font-semibold" for=""> Câu ' . $count . ': ' . $value[0] . '</label><br>
                                    <input type="radio" name="' . $ques . '" value="a">' . $value[1]["choice1"] . '<br>
                                    <input type="radio" name="' . $ques . '" value="b">' . $value[1]["choice2"] . '<br>
                                    <input type="radio" name="' . $ques . '" value="c">' . $value[1]["choice3"] . '<br>
                                    <input type="radio" name="' . $ques . '" value="d">' . $value[1]["choice4"] . '<br>
                                </div>';
                if ($count == 5) break;
            }
            ?>
            <input class="mt-3 px-3 py-1 bg-[#1a4e8f] border-solid border-2 border-[#4f85b4] rounded-lg text-white" type="submit" name="submit" value="Next">

        </div>
    </form>
</body>

</html>