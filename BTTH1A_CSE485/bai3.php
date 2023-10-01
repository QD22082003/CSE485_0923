<!DOCTYPE html>
<html>
<head>
    <title>Danh sách khóa học</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php
    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];

    foreach ($arrs as $course) {
        echo "<tr><td>$course</td></tr>";
    }
    ?>
</table>

</body>
</html>