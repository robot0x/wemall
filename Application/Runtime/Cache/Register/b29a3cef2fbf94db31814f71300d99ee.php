<?php if (!defined('THINK_PATH')) exit(); echo ($css); ?>
<section>
<div class="header" id="header">
	<div class="header_t">会员注册</div>	
</div>
<<<<<<< .mine

<div id="content">
    <div class="reg">
        <ul>
            <li><label>手机号：</label><input name="phone" type="text" class="input_1" id="phone" onChange="checkMobile(this.value)" maxlength="11"><i><span>*</span></i></li>
            <li><label>微信号：</label><input name="weixinid" type="text" class="input_1" id="weixinid"  maxlength="11"><i><span>*</span></i></li>
            <li class="yanzheng"><label>验证码：</label><input name="checkcode" id="checkcode" type="text" class="input_2"><i><span>*</span></i>
            <button class="btn btn-default" id="message" type="button"  onclick="sendMsg($(this))" >获取验证码</button></li>
            <li class="an"><button id="submit" class="input_an">会员注册</button></li>
        </ul>
    </div>  
=======
</div>
    <div class="pending-detial">
		<form method="post" name="myform" id="myform" onSubmit="return CheckForm();" action="userAddd" >
		<ul>
			<li><span>姓名：</span><input name="nickname" id="nickname" type="text" class="input_1"><i><p>*</p></i></li>
			<li><span>手机号：</span><input name="openid" type="text" class="input_1" id="openid" onChange="checkMobile(this.value)" maxlength="11"><i><p>*</p></i></li>
                        <li><span>邀请码：</span><input name="phone_number" type="text" class="input_1" id="phone_number" onChange="checkMobile(this.value)" maxlength="11"><i><p>*</p></i></li>
                        <li class="yanzheng"><span>验证码：</span><input name="aipayid" id="aipayid" type="text" class="input_2"><i><p>*</p></i></li>
                        <li class="huoqu"><input name="" id="button" type="submit" onclick = "mobile"  value="获取验证码"></li>
			<li class="an"><input name="" id="button" type="submit" class="input_an" value="会员注册"></li>
		</ul>
		</form>
	</div>  
>>>>>>> .r2436
</div>
<div class="nav_b">
</div>
</section>
<!--弹窗开始-->
<div class="scrmask" id="mask" style="display:none"></div>
<div class="popupbox" id="mask_alarm" style="display:none">
        <p id="error_con"></span>
        <a href="javascript:;" id="mask_close">确定</a>
</div>	
<!--弹窗结束-->
<?php echo ($js); ?>