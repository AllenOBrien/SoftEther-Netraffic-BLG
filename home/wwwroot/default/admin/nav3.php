<?php
function checkIfActive($string) {
	$array=explode(',',$string);
	$php_self=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
	$php_self=str_replace('.php','',$php_self);
	if (in_array($php_self,$array)){
		return 'active';
	}else
		return null;
}
?>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">管理中心</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php echo checkIfActive('index,')?>">
            <a href="./"><span class="glyphicon glyphicon-home"></span> 平台首页</a>
          </li>
          <!--li class="<?php echo checkIfActive('log')?>">
            <a href="./log.php"><span class="glyphicon glyphicon-book"></span> 操作记录</a>
          </li-->
		  <!--li class="<?php echo checkIfActive('fwqlist,online,addfwq')?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-globe"></span> 服务器管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./addfwq.php">添加服务器</a></li>
              <li><a href="./fwqlist.php">服务器列表</a></li>
            </ul>
          </li-->
		  <li class="<?php echo checkIfActive('qqlist,addqq,online,qqlist,black')?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cloud"></span> 账号管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./qqlist.php">账号列表</a></li>
			  <li><a href="./addqq.php">添加账号</a></li>
			  <li><a href="./online.php">在线用户</a></li>
            </ul>
          </li>
		  <!--li class="<?php echo checkIfActive('fwqlist,addfwq')?>">
           <a href="../app_api/admin.php"><span class="glyphicon glyphicon-book"></span> 云端APP管理</a>
          </li-->
		  <li class="<?php echo checkIfActive('list_line,add_line,add_gg,list_gg,AdminShengji,qq_admin,')?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cloud"></span> 云端APP管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./list_line.php">线路列表</a></li>
			  <li><a href="./add_line.php">添加线路</a></li>
			  <li><a href="./add_gg.php">发布公告</a></li>
			  <li><a href="./list_gg.php">公告列表</a></li>
			  <li><a href="./AdminShengji.php">升级推送</a></li>
			  <li><a href="./qq_admin.php">客服QQ</a></li>
            </ul>
          </li>
		  <!--li class="<?php echo checkIfActive('daili,dlconfig,dlkm')?>">
            <a href="./dlconfig.php"><span class="glyphicon glyphicon-book"></span> 用户公告</a>
          </li-->
		  <li class="<?php echo checkIfActive('user,dlconfig,count')?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cloud"></span> 高级设置<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./user.php">管理员设置</a></li>
			  <li><a href="./dlconfig.php">用户公告</a></li>
			  <li><a href="./count.php">使用统计</a></li>
            </ul>
          </li>
          <!--li class="<?php echo checkIfActive('payset,shop,kucun,tlist')?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> 即时到账<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./payset.php">信息配置</a></li>
			  <li><a href="./shop.php">商品管理</a></li>
			  <li><a href="./kucun.php">库存管理</a></li>
              <li><a href="./tlist.php">交易列表</a></li>
            </ul>
          </li-->
		  <li><a href="./login.php?logout"><span class="glyphicon glyphicon-log-out"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">