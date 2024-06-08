<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sách</title>
</head>
<body>
<a href="?act=addBook"><button>Thêm</button></a>
<!--Thêm không phải truyền theo id-->
<table border="1">
    <tr>
        <td>id</td>
        <td>title</td>
        <td>cover_image</td>
        <td>author</td>
        <td>publisher</td>
        <td>publish_year</td>
        <td>Hành Động</td>
    </tr>
    <?php
//    var_dump($listBook);
    foreach ($listBook as $value){
    ?>
    <tr>
        <td><?php echo $value->id ?></td>
        <td><?php echo $value->title ?></td>
        <td><img src="<?php echo $value->cover_image ?>"></td>
        <td><?php echo $value->author ?></td>
        <td><?php echo $value->publisher ?></td>
        <td><?php echo $value->publish_year ?></td>
        <td>
            <a href="?act=editBook&id=<?php echo $value->id ?>"><button>Sửa</button></a>
            <a href="?act=deleteBook&id=<?php echo $value->id ?>"><button>Xóa C1</button></a>
            <button onclick="confirmDelete('?act=deleteBook&id=<?php echo $value->id ?>')">Xóa</button>
<!--            Sửa và xóa cần truyền theo id-->
        </td>
    </tr>
    <?php } ?>
</table>
</body>
<script>
    function confirmDelete(delUrl) {
        if (confirm("Bạn có chắc chắn muốn xóa")) {
            document.location = delUrl;
        }
    }
</script>
</html>