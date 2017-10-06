<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- .breadcrumb -->

						<div id="nav-search" class="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" autocomplete="off" id="nav-search-input" class="nav-search-input" placeholder="Search ...">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								列表
								<small>
									<i class="icon-double-angle-right"></i>
									User
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
											<table class="table table-striped table-bordered table-hover" id="sample-table-1">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</th>
														<th>用户名</th>
														<th>手机号</th>
														<th class="hidden-480">邮箱</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															YY号
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody id="tbox">
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">ace.com</a>
														</td>
														<td>$45</td>
														<td class="hidden-480">3,330</td>
														<td>Feb 12</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">base.com</a>
														</td>
														<td>$35</td>
														<td class="hidden-480">2,595</td>
														<td>Feb 18</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">max.com</a>
														</td>
														<td>$60</td>
														<td class="hidden-480">4,400</td>
														<td>Mar 11</td>

														<td class="hidden-480">
															<span class="label label-sm label-warning">Expiring</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">best.com</a>
														</td>
														<td>$75</td>
														<td class="hidden-480">6,500</td>
														<td>Apr 03</td>

														<td class="hidden-480">
															<span class="label label-sm label-inverse arrowed-in">Flagged</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">pro.com</a>
														</td>
														<td>$55</td>
														<td class="hidden-480">4,250</td>
														<td>Jan 21</td>

														<td class="hidden-480">
															<span class="label label-sm label-success">Registered</span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="icon-edit bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

								<div tabindex="-1" class="modal fade" id="modal-table">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header no-padding">
												<div class="table-header">
													<button aria-hidden="true" data-dismiss="modal" class="close" type="button">
														<span class="white">×</span>
													</button>
													Results for "Latest Registered Domains
												</div>
											</div>

											<div class="modal-body no-padding">
												<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
													<thead>
														<tr>
															<th>Domain</th>
															<th>Price</th>
															<th>Clicks</th>

															<th>
																<i class="icon-time bigger-110"></i>
																Update
															</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>
																<a href="#">ace.com</a>
															</td>
															<td>$45</td>
															<td>3,330</td>
															<td>Feb 12</td>
														</tr>

														<tr>
															<td>
																<a href="#">base.com</a>
															</td>
															<td>$35</td>
															<td>2,595</td>
															<td>Feb 18</td>
														</tr>

														<tr>
															<td>
																<a href="#">max.com</a>
															</td>
															<td>$60</td>
															<td>4,400</td>
															<td>Mar 11</td>
														</tr>

														<tr>
															<td>
																<a href="#">best.com</a>
															</td>
															<td>$75</td>
															<td>6,500</td>
															<td>Apr 03</td>
														</tr>

														<tr>
															<td>
																<a href="#">pro.com</a>
															</td>
															<td>$55</td>
															<td>4,250</td>
															<td>Jan 21</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="modal-footer no-margin-top">
												<button data-dismiss="modal" class="btn btn-sm btn-danger pull-left">
													<i class="icon-remove"></i>
													Close
												</button>

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="icon-double-angle-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="icon-double-angle-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  name: 'tables',
  data () {
    return {
      message: ''
    }
  },
	mounted: function() {
		$.ajax({
			url:'http://yii.929.vip/?r=index/show_userlist',
			type:'get',
			dataType:'jsonp',
			jsonp:'call',
			success:function(msg)
			{
//				$('#tbox').html(msg)
				alert(2)
			}
		})
//		alert(3)
//			this.$http.jsonp('http://yii.929.vip/?r=index/api', {}, {
//	        emulateJSON: true
//	    }).then(function(response) {
////	        this.userList = response.body
//			alert(1)
//	    }, function(response) {
//	        console.log(response)
////			alert(2)
//	    });   
	},
  methods:
  {
  	onreadys:function(){
  		$(document).ready(function(){
  		alert('好了')
  	})
  	}
  }
}

try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

<style>
</style>