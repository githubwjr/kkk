<template>
	<div id="sidebar" class="sidebar">
					<div id="sidebar-shortcuts" class="sidebar-shortcuts">
						<div id="sidebar-shortcuts-large" class="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div id="sidebar-shortcuts-mini" class="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<router-link to="/" class="router-item">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
						</router-link>
						</li>

						<li>
							<router-link to="/typography" class="router-item">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 文字排版 </span>
							</router-link>
						</li>

						
						
						<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-list"></i>
								<span class="menu-text"> 分类列表</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								

								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										添加分类
									</router-link>
								</li>
								
								<li>

										<router-link to="/tables" class="router-item" v-on:click="h_type">
										<i class="icon-double-angle-right"></i>
										分类
									</router-link>
								</li>
							</ul>
						</li>
						
							<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-list"></i>
								<span class="menu-text"> 礼物列表</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/tables" class="router-item">
										<i class="icon-double-angle-right"></i>
										添加礼物
									</router-link>
								</li>

								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										礼物展示
									</router-link>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 用户列表 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/form_elements" class="router-item">
										<i class="icon-double-angle-right"></i>
										添加用户	
									</router-link>
								</li>
								
								<li>
									<router-link to="/profile" class="router-item">
										<i class="icon-double-angle-right"></i>
										用户信息
									</router-link>
								</li>

								<li>
									<router-link to="/form_wizard" class="router-item">
										<i class="icon-double-angle-right"></i>
										验证
									</router-link>
								</li>

								<li>
									<router-link to="/wysiwyg" class="router-item">
										<i class="icon-double-angle-right"></i>
										编辑器
									</router-link>
								</li>

								<li>
									<router-link to="/dropzone" class="router-item">
										<i class="icon-double-angle-right"></i>
										文件上传
									</router-link>
								</li>
							</ul>
						</li>
						
						<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-list"></i>
								<span class="menu-text"> 个人中心</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/tables" class="router-item">
										<i class="icon-double-angle-right"></i>
										我的信息
									</router-link>
								</li>

								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										成长等级
									</router-link>
								</li>
								
								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										订阅与历史
									</router-link>
								</li>
								
								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										我的消息
									</router-link>
								</li>
								
								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										我的贵族
									</router-link>
								</li>
								
								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										我的头衔
									</router-link>
								</li>
								
								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										我的财产
									</router-link>
								</li>
								
								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										CDkey兑换
									</router-link>
								</li>
								
								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										虎牙认证
									</router-link>
								</li>
							</ul>
						</li>

						

					

						<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-tag"></i>
								<span class="menu-text"> 更多页面 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								

								<li>
									<router-link to="/inbox" class="router-item">
										<i class="icon-double-angle-right"></i>
										收件箱
									</router-link>
								</li>

								<li>
									<router-link to="/pricing" class="router-item">
										<i class="icon-double-angle-right"></i>
										售价单
									</router-link>
								</li>

								<li>
									<router-link to="/invoice" class="router-item">
										<i class="icon-double-angle-right"></i>
										购物车
									</router-link>
								</li>

								<li>
									<router-link to="/timeline" class="router-item">
										<i class="icon-double-angle-right"></i>
										时间轴
									</router-link>
								</li>

								<li>
									<a href="javascript:" v-on:click="login_out">
										<i class="icon-double-angle-right"></i>
										登录 &amp; 注册
									</a>
								</li>
							</ul>
						</li>

						<!--<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									其他页面
									<span class="badge badge-primary ">5</span>
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/faq" class="router-item">
										<i class="icon-double-angle-right"></i>
										帮助
									</router-link>
								</li>

								<li>
									<router-link to="/error_s" class="router-item">
										<i class="icon-double-angle-right"></i>
										404错误页面
									</router-link>
								</li>

								<li>
									<router-link to="/error_w" class="router-item">
										<i class="icon-double-angle-right"></i>
										500错误页面
									</router-link>
								</li>

								<li>
									<router-link to="/grid" class="router-item">
										<i class="icon-double-angle-right"></i>
										网格
									</router-link>
								</li>

								<li>
									<router-link to="/blank" class="router-item">
										<i class="icon-double-angle-right"></i>
										空白页面
									</router-link>
								</li>
							</ul>
						</li>-->
					</ul><!-- /.nav-list -->

					<div id="sidebar-collapse" class="sidebar-collapse">
						<i data-icon2="icon-double-angle-right" data-icon1="icon-double-angle-left" class="icon-double-angle-left"></i>
					</div>
				</div>
</template>

<script>
export default {
  name: 'imeun',
  data () {
    return {
      message: ''
    }
  },
  methods:
  {
  	login_out:function()
  	{
  		$.ajax({
  			dataType:'jsonp',
  			url:host+'?r=login/login_out',
  			success:function(e)
  			{
  				switch (e.error)
  				{
  					case '200':
  					alert(e.msg);
  					$('#sidebar').hide();
  					$('#navbar').hide();
  					location.href='/#/login';
  					break;
  					default:
  					alert(e.msg);
  					break;
  				}
  			}
  		})
  	},
  	mounted:function()
  	{
	  	this.h_type(function()
	  	{
	  		alert(1)
	//		$ajax({
	//			type:'GET',
	//			url: 'http://yii.929.vip/index.php?r=index/type',
	//			dataType:'jsonp',
	//			jsonp: 'call',
	//			success:function(msg)
	//			{
	//				console.log(msg);
	//			},
	//			error:function(info)
	//			{
	//				alert(错误);
	//			}
	//		})
	  })
  }
  }
}
try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>

<style>
	
</style>