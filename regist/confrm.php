<?php
// セッション開始
session_start();
// セッションハイジャック対策
session_regenerate_id(true);

// セッションにPOSTデータを登録
$_SESSION['my_shop']['regist'] = $_POST;

// POSTデータ受信
$post = $_POST;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="m-auto w-50">
        <h2 class="p-2 text-center">会員登録確認</h2>
        <form action="add.php" method="post">
            <div class="form-group mt-3">
                <label class="form-label" for="">氏名</label>
                <p><?= $post["name"] ?></p>
            </div>

            <div class="form-group mt-3">
                <label class="form-label" for="">Email</label>
                <p><?= $post["email"] ?></p>
            </div>

            <div class="d-flex mt-3">
                <button class="btn btn-primary w-50 me-1">登録</button>
                <a href="./input.php" class="btn btn-outline-primary w-50">戻る</a>
            </div>
        </form>
    </main>
</body>

</html>