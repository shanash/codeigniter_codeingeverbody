<ul>
<?php
foreach($list as $data){
?>
	<li><a href="/CodeIgniterTest/index.php/topic/get/<?php echo $data['uuid'];?>"><?php echo $data['nick_name'];?></a></li>
<?php
}
?>
</ul>
