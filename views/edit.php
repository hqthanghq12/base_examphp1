<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm thông tin sách</title>
</head>
<body>
<?php //var_dump($idBook); ?>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">title</label>
    <input type="text" name="title" id="" value="<?php echo $idBook->title ?>">
    <label for="">cover_image</label>
    <input type="file" name="cover_image" id="">
    <img src="<?php echo $idBook->cover_image ?>" alt="">
    <label for="">author</label>
    <input type="text" name="author" id="" value="<?php echo $idBook->author ?>">
    <label for="">publisher</label>
    <input type="text" name="publisher" id="" value="<?php echo $idBook->publisher ?>">
    <label for="">publish_year</label>
    <input type="text" name="publish_year" id="" value="<?php echo $idBook->publish_year ?>">
    <input type="submit" name="btn_submit" value="Gửi">
</form>
</body>
</html>