@extends('i')
@section('content')

	
    

        <div class="main-col">
            <div class="scroll-content">
            	<div class="mod userInfo-edit">
        			<div class="mod-hd">
                        <a href="http://i.huya.com" class="back-to">返回</a>
                        <h3 style="border-left: none;">编辑资料</h3>
                    </div>

                	<form id="userInfoEdit" class="form-edit">
                		<ul>
							<li>
	                			<span class="edit-item">昵称</span>
	                			<input id="edit-nick" class="edit-name" type="text" name="user_name" maxlength="20" readonly="readonly" style="border: 0px;">
	                			<span class="edit-warning edit-warning_nick"></span>
	                		</li>
	                		<li>
	                			<span class="edit-item">个性签名</span>
	                			<textarea id="edit-sign" maxlength="20" class="edit-ps"></textarea>
	                			<span class="edit-warning">字段包含敏感字符，请重新输入！</span>
	                		</li>
	                		<li>
	                			<span class="edit-item">性别</span>
	                			<input class="edit-sex" type="radio" name="sex" value="1" checked="checked">男 
	                			<input class="edit-sex edit-sex_female" type="radio" value="2" name="sex">女
	                		</li>
	                		<li>
	                				                			<span class="edit-item">生日</span>
	                			<div class="select-box sb-year">
	                				<input id="edit-year" class="sb-selected J_sb-selected" type="text" name="" value="1999" readonly="readonly">
	                				
	                			<span>年</span>
	                			<div class="select-box sb-month sb-number">
	                				<input id="edit-month" class="sb-selected J_sb-selected" type="text" name="" value="01" readonly="readonly">
	                				<ul class="sb-list">
	                					<li class="sb-value" data-value="1">1</li>           				</ul>
	                			</div>
	                			<span>月</span>
	                			<div class="select-box sb-date sb-number">
	                				<input id="edit-date" class="sb-selected J_sb-selected" type="text" name="" value="01" readonly="readonly">
	                				<ul class="sb-list">
	                					<li class="sb-value" data-value="1">1</li>                				</ul>
	                			</div>
	                			<span>日</span>
	                		</li>
	                		<li>
	                			<span class="edit-item">所在地</span>
	                			<div class="select-box sb-prov">
	                				<input id="edit-area" class="sb-selected J_sb-selected" type="text" name="" value="北京" readonly="readonly">
	                				
	                			</div>
	                		</li>
	                		<li class="edit-submit"><a id="edit-submit" class="btn-submit clickstat" href="#" eid="click/grzx/infoedit/save" eid_desc="点击/个人中心/信息编辑/保存">保存</a></li>
                		</ul>
                		
                	</form>
            	</div>
            </div>
        </div>

    </div>



@endsection