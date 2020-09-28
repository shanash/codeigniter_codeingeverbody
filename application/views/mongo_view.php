<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<ul>
    <?php foreach ($list as $data):?>
        <li>
            <?php echo $data['uuid'];?> : <?php echo $data['nick_name'];?> . <?php echo $data['os_id'];?>
        </li>
    <?php endforeach;?>
</ul>

</body>
</html>