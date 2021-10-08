<?php if ($msg->hasMessages()) $msg->display(); ?>
<ul class="list-group">
    <li class="list-group-item"><a href="logout">登出</a></li> 
    <li class="list-group-item"><?=$_SESSION['username']?></li> 
</ul>
