<ol>
<?php
$num = 0;
foreach($list as $data){
?>
	<li><a href="/CodeIgniterTest/index.php/topic/get/<?php echo $num;?>"><?php echo $data['nick_name'];?></a></li>
<?php
}
?>
</ol>
