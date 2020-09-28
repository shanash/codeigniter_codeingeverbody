<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<ul>
    <?php foreach ($list as $data):?>
        <li>
            <?php echo $data['_id'];?> : <?php echo $data['ScannerId'];?> . <?php echo $data['ScannerRssi'];?>
        </li>
    <?php endforeach;?>
</ul>

</body>
</html>