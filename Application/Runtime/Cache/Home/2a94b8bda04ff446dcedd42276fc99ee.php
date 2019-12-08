<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>宿舍维修</title>
	<link rel="icon" href="/bootstrap/Public/home/images/websiteicon_.ico">
	<link rel="stylesheet" href="/bootstrap/Public/Home/css/bootstrap.4.1.min.css">
	<link rel="stylesheet" href="/bootstrap/Public/Home/css/custom.css">
</head>
<body>
	<!-- 菜单栏 -->
	<nav class="navbar navbar-expand-lg navbar-light" style="background: rgba(25,185,85,1.0)">
			<a href="" class="navbar-brand text-light">
				<img src="/bootstrap/Public/Home/images/dormitory.png" alt="dormitoryIcon"
				style="height: 40px;">
				宿舍维修
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
				 <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#login" class="nav-link text-light" data-toggle="modal" >	
							登录
						</a>
					</li>
					<li class="nav-item " >
						<a href="" class="nav-link text-light ">
							<span class="cancel" style="padding-right: 15px;">|</span>注销
						</a>
					</li>
				</ul>
			</div>
	</nav>
	<div class="container">
		<div class="row">
			<!--  -->
			<div class="col-sm-12 col-lg-8 p-0 m-0" >
				<div class="carousel slide" data-ride="carousel" >
					<div class="carousel-inner">
						<div class="carousel-item active"> 
							<img src="/bootstrap/Public/Home/images/slideshow_one.jpg" alt="slideshow" class="d-block w-100  h-100">
						</div>
						<div class="carousel-item">
							<img src="/bootstrap/Public/Home/images/slideshow_two.jpg" alt="slideshow" class="d-block 	w-100 h-100">
						</div>
					</div>
				</div>
			</div>
			<!-- 登录之前的状态-->
			<div class="col-sm-12 col-lg-4" style="text-align: center;box-shadow: 0 0 20px 0 #ccc" id='loginStatusBefore'>
				<div class="img-fluid  mt-3 border border-dark mb-4" style="width: 150px;height: 150px; border-radius: 75px;overflow: hidden;margin: 0 auto">
					<img src="/bootstrap/Public/Home/images/student_icon_before.png" alt="slideshow" class="img-fluid">
				</div>
				<button class="btn btn-success w-75 mt-4" 
				data-target="#login"  data-toggle="modal">
					登录
				</button>
			</div>
			<!-- 登录之后的状态 -->
			<div class="col-sm-12 col-lg-4 d-none" style="text-align: center;box-shadow: 0 0 20px 0 #ccc" id='loginStatusAfter'>
				<div class="img-fluid  mt-3 border border-info mb-1" style="width: 150px;height: 150px; border-radius: 75px;overflow: hidden;margin: 0 auto">
					<img src="/bootstrap/Public/Home/images/student_icon_after.png" alt="slideshow" class="img-fluid" id="loginStatusAfter_img">
				</div>
					<p>您好:<span id='loginName'></span></p>
				<button class="btn btn-success w-75" id="iQ" data-target="#question"
				data-toggle='modal' style="margin:0 auto">马上报修</button>
				<button class="btn btn-success w-75 d-none" id="acceptTakes"  style="margin:0 auto">我接受的任务</button>
				<button class="btn btn-success w-75 mt-3" onclick="quit()">立即退出</button>
			</div>
		</div>
		<div class="row pt-5">
			<div class="w-100 " style="position: relative;">
				<p >
					<img src="/bootstrap/Public/home/images/questionlist.png" alt="??ͼ??
					 class="img-fluid" style="width: 25px;">
					 <span>问题清单</span>
					 <a href="<?php echo U('Instruction/index');?>" style="position: absolute; right: 0;font-size: 10px;">
							<img src="/bootstrap/Public/Home/images/link.svg" alt="linkLogo"
							style="width: 15px;">
					 		使用手册
					 </a>
				</p>
			</div>
			<!-- 问题清单内容 -->
			<article class="border border-muted w-100" id="question_list" style="position: relative">
					
			</article>
		</div>
			<a href="<?php echo U('more/index');?>" class="mt-3" style="float: right;">更多</a>
	</div>
	<!-- 模态窗内容-->
	<div class="modal fade " tabindex="-1" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
	              <h5 class="modal-title">登录</h5>
	              <a class="close" data-dismiss="modal" aria-label="Close">
	                  <span aria-hidden="true">&times;</span>
	              </a>
	          	</div>
	          	<div class="modal-body">
					<button type="button" class="btn btn-success active" onclick="form_student()">学生</button>
					<button type="button" class="btn btn-success" onclick="form_maintain()">维修人员</button>
					<form action="" class="mt-2" id="form_content">
						<div class="form-group" style="position: relative;">
							<img src="/bootstrap/Public/Home/images/user.png" alt="学号"
							style="width: 20px;height: 20px;position: absolute;margin-top: 8px;
							margin-left: 8px;">
						    <input type="text" placeholder="请输入学号" id="studentId" class="form-control mb-2" style="padding-left: 33px;">
						    <span></span>
						</div>
	                    <div class="form-group" style="position: relative;">
	                    	<img src="/bootstrap/Public/Home/images/user.png" alt="用户"
	                    	style="width: 20px;height: 20px;position: absolute;margin-top: 8px;
	                    	margin-left: 8px;">
	                        <input type="text" placeholder="请输入姓名"  id="studentName" class="form-control mb-2" style="padding-left: 33px;">
	                        <span></span>
	                    </div>
	                    <div class="form-group" style="position: relative;">
	                    	<img src="/bootstrap/Public/Home/images/password.png" alt="密码"
	                    	style="width: 20px;height: 20px;position: absolute;margin-top: 8px;margin-left: 8px">
	                        <input type="password" placeholder="请输入密码"  id="password" class="form-control mb-2" style="padding-left: 33px;">
	                        <span></span>
	                    </div>
	                    <div class="form-group">
	                        <input type="button" value="登 录" class="form-control btn btn-success" id="submit" onclick="login_student_do()" >
	                    </div>
                	</form>
	          	</div>
			</div>	
		</div>
	</div>
	<!-- 问题描述-->
	<div class="modal fade" id="question" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						问题描述
					</h5>
					<a  class="close" data-dismiss='modal'>x</a>
				</div>
				<div class="modal-body">
					<form >
						<div class="row">
							<div class="col-12">
								<textarea  rows="10" class="w-100" placeholder="请详细描述您的问题" style="font-size: 18px;" id="getContent"></textarea>
							</div>
						</div>	
						<div class="form-group mt-3">
							<input type="button" value="提 交" class="form-control btn btn-success"
							onclick="submitContent()">
						</div>						
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- 初始化查看详细的问题 -->
	<div class="modal fade" id="InitshowQuestion" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						详细问题描述
					</h5>
					<a  class="close" data-dismiss='modal'>x</a>
				</div>
				<div class="modal-body">
					<form >
						<div class="row">
							<div class="col-12">
								<span id="show_question_content"></span>
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>	<!-- 初始化查看详细的问题 -->
	<div class="modal fade" id="InitshowQuestion" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						详细问题描述
					</h5>
					<a  class="close" data-dismiss='modal'>x</a>
				</div>
				<div class="modal-body">
					<form >
						<div class="row">
							<div class="col-12">
								<span id="show_question_content"></span>
							</div>
						</div>	
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- 学生-登录之后查看详细的问题与处理结果 -->
	<div class="modal fade" id="showQuestion" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						详细问题描述
					</h5>
					<a  class="close" data-dismiss='modal'>x</a>
				</div>
				<div class="modal-body">
					<form >
						<div class="row">
							<div class="col-12">
								<span id="show_question_content_two"></span>
							</div>
						</div>	
					</form>
					<div class="row pt-2 mt-2" style="border-top: 1px solid #E9ECEF">
						<div class="col-12">
							<img src="/bootstrap/Public/Home/images/student_icon_after.png" alt=""
							width="15px;">
							<span style="font-size: 10px;">学生处理结果:</span>
							<button class="btn btn-success btn-sm ml-5 w-25" id="interview">申请已完成</button>
							<button class="btn btn-success btn-sm ml-5 w-25" onclick="complaim()">投诉</button>
						</div>
						
						<div class="col-12 mt-2" style="font-size: 10px;">
							<img src="/bootstrap/Public/Home/images/student_icon_after.png" alt=""
							width="15px;">
							<span>维修人员处理结果:</span>
							<span id="accendant_msg">暂无结果</span>
						</div>
						<div class="col-12 mt-2 d-none" id="countDown">
							<img src="/bootstrap/Public/Home/images/cout_down.png" alt="" width="15px">
							<span class="text-muted" style="font-size: 10px;margin-right: 2%;">还剩:</span>
							<span class="text-muted" style="font-size: 10px">0</span>
							<span class="text-muted" style="font-size: 10px">0</span>
							<span class="text-muted" style="font-size: 10px">:</span>
							<span class="text-muted" style="font-size: 10px">0</span>
							<span class="text-muted" style="font-size: 10px">0</span>
							<span class="text-muted" style="font-size: 10px">:</span>
							<span class="text-muted" style="font-size: 10px">0</span>
							<span class="text-muted" style="font-size: 10px">0</span>
							<span class="text-danger" style="font-size: 10px;margin-left: 2%;">自动申请已完成</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 维修人员登录之后查看详细的问题，并是否点击接受此问题 -->
	<div class="modal fade" id="accendantShowQuestion" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
						详细问题描述
					</h5>
					<a  class="close" data-dismiss='modal'>x</a>
				</div>
				<div class="modal-body">
					<form >
						<div class="row">
							<div class="col-12">
								<span id="show_question_content_three"></span>
							</div>
						</div>	
					</form>
					<div class="row pt-2 mt-2" style="border-top: 1px solid #E9ECEF">
						<div class="col-12 mt-2" style="font-size: 10px;">
							<img src="/bootstrap/Public/Home/images/dormitory_number.png" alt=""
							width="15px;">
							<span>宿舍地址:</span>
							<span id="dormitory_number"></span>
						</div>
						<div class="col-12 mt-3" style="font-size: 10px;">
							<span class="mr-2">是否接受维修任务:</span>
							<button class="btn btn-success btn-sm ml-5 w-25" id="accept">接受</button>
							<button class="btn btn-success btn-sm ml-5 w-25" id="giveUp">放弃</button>
						</div>
						<div class="col-12 mt-3" style="font-size: 10px;">
							<span class="mr-5" style="float: left;">是否已经完成:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
							<button class="btn btn-success btn-sm ml-5 w-50 d-block" id="good" >完工</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/bootstrap/Public/Home/js/jquery-3.3.1.min.js"></script>
	<script src="/bootstrap/Public/Home/js/bootstrap.4.1.min.js"></script>
	<script src="/bootstrap/Public/Home/js/popper.min.js"></script>
	<script src="/bootstrap/Public/Home/js/index.js"></script>
	<script>
		// 找到我接受的任务的按钮
		let acceptTakes = document.querySelector("#acceptTakes");
		// 定义计时表达式
		let timer;
		// 申请已经完成按钮
		let interview = document.querySelector("#interview");
		// 获取倒计时本身
		let countDownSelf = document.querySelector("#countDown");
		// 找到倒计时
		let countDown = document.querySelectorAll("#countDown > span");
		// 找到学生维修单的accendant_msg字段
		let accendantMsg = document.querySelector("#accendant_msg");
		// 维修人员点击的表出现的字段
		// 找到宿舍号
		let dormitoryNumber = document.querySelector("#dormitory_number");
		// 找到接受按钮
		let accept = document.querySelector("#accept");
		// 找到放弃按钮
		let giveUp = document.querySelector("#giveUp");
		// 找到完成按钮
		let good = document.querySelector("#good");
		// 验证各个字段是否成功-默认是false
		let fieldStudentOne = false;
		let fieldStudentTwo = false;
		let fieldStudentThree = false;
		//????ǳ??ɹ?֮??λ?
		let loginName = document.querySelector("#loginName");
		//????????ѧ?ŵı??
		let studentIdValue;
		//??????????????α??
		let studentNameValue;
		//???????????????
		let studentPassword;
		//???????İ?ť
		let loginButton = document.getElementById("submit");
		// ????д????
		let getContent = document.querySelector("#getContent");
		// ??????֮????
		let getLoginName;
		//  ????Ҫ?????ť
		let iQ = document.querySelector("#iQ");
		// ???????
		let questionDescribe = document.querySelector("#questionDescribe");
		// let submitContent = document.querySelector("#submitContent");
		// ???һ??????洢??ǰ??????Ѿ????
		let isUserStatus = false;
		// ?ֱ?ҵ????ѧ?ţ??????????pan???
		let studentIdSpan = document.querySelector(".form-group:first-child > span");
		// console.log(studentIdSpan);
		let studentNameSpan = document.querySelector(".form-group:nth-of-type(2) > span");
		// console.log(studentNameSpan);
		let studentPasswordSpan = document.querySelector(".form-group:nth-of-type(3) > span");
		// console.log(studentPasswordSpan);
		// ??????״̬
		let loginStatus = document.querySelector("#loginStatus");
		// ???һ??????洢??????֮??ѧ??
		let student_id;
		// 学生住址
		let studentAddress;
		// 学生所属部门
		let department;
		// ????????????
		let  createQuestionTime = document.querySelector("#createQuestionTime");
		// ????????
		let question_list = document.querySelector("#question_list"); 
		// 找到问题描述内容框
		let showQuestionContent = document.querySelector("#show_question_content");
		// 找到问题描述内容框-处理结果框
		let showQuestionContentTwo = document.querySelector("#show_question_content_two");
		// 找到维修人员问题描述的框
		let showQuestionContentThree = document.querySelector("#show_question_content_three");
		//	获取初始化的每条的id
		let getInitCurrId; 
		// console.log(createQuestionTime);
		// console.log(loginStatus);
		/*studentIdValue = studentId.value;
		studentNameValue = studentName.value;
		studentPassword = password.value;
		console.log(studentIdValue + "|" + studentNameValue + "|" + studentPassword);
		*/
		//ʵʱ????????ѧ??
		studentId.oninput = function(){
			studentIdValue = studentId.value;
			// console.log(studentIdValue);
			// ???Ҫ????????
			let data = {
				"studentIdValue":studentIdValue
			};
			$.ajax({
			    url: "/bootstrap/index.php/Home/Index/queryStudentInfo_id",
			    method: "post",
			    data:data,
			    dataType: "json",
			    success: function (data) {
			    	// alert(JSON.stringify(data));
			    	if(data.status == "true"){
			    		studentIdSpan.style.color = "green";
			    		studentIdSpan.innerHTML = "学号正确";
			    		fieldStudentOne = true;
			    	}else{
			    		studentIdSpan.style.color = "red";
			    		studentIdSpan.innerHTML = "学号错误";
			    		fieldStudentOne = false;
			    	}
			    }
			})  
		}
		//ʵʱ????????????
		studentName.oninput = function(){
			studentNameValue = studentName.value;
			console.log(studentNameValue);
			// ???Ҫ????????
			let data = {
				"studentNameValue":studentNameValue
			};
			$.ajax({
			    url: "/bootstrap/index.php/Home/Index/queryStudentInfo_name",
			    method: "post",
			    data:data,
			    dataType: "json",
			    success: function (data) {
			    	// alert(JSON.stringify(data));
			    	if(data.status == "true"){
			    		studentNameSpan.style.color = "green";
			    		studentNameSpan.innerHTML = "姓名正确";
			    		fieldStudentTwo = true;
			    	}else{
			    		studentNameSpan.style.color = "red";
			    		studentNameSpan.innerHTML = "姓名错误";
			    		fieldStudentTwo = false;
			    	}
			    }
			})  
		}

		//ʵʱ????????????
		password.oninput = function(){
			studentPassword = password.value;
			console.log(studentPassword);
			// ???Ҫ????????
			let data = {
				"studentPassword":studentPassword
			};
			$.ajax({
			    url: "/bootstrap/index.php/Home/Index/queryStudentInfo_password",
			    method: "post",
			    data:data,
			    dataType: "json",
			    success: function (data) {
			    	// alert(JSON.stringify(data));
			    	if(data.status == "true"){
			    		studentPasswordSpan.style.color = "green";
			    		studentPasswordSpan.innerHTML = "密码正确";
			    		fieldStudentThree = true;
			    	}else{
			    		studentPasswordSpan.style.color = "red";
			    		studentPasswordSpan.innerHTML = "密码错误";
			    		fieldStudentThree = false;
			    	}
			    }
			})  
		}
		/*
		@method form_student(),??ѧ???ť???ѧ????
		*/
		function form_student(){
			// 学生栏
			let form_content = document.querySelector("#form_content");
			console.log(form_content); 
			form_content.innerHTML = 
				"<form class='mt-2'>"
		  		+"<div class='form-group' style='position:relative'>"
		  		+	"<img src='/bootstrap/Public/home/images/user.png'/ style='width: 20px;height: 20px;margin-left: 8px;margin-top: 8px;position: absolute'>" 
		  		+	"<input type='text' placeholder='请输入学号' id='studentId' class='form-control mb-2' style='padding-left: 33px'/>"
		  		+	"<span id='span1'></span>"
		  		+"</div>"
		  		+ "<div class='form-group' style='position: relative'>"
		  		+	"<img src='/bootstrap/Public/Home/images/user.png' style='width: 20px;height: 20px;position: absolute;margin-top: 8px;margin-left: 8px;'/>"
		  		+	"<input type='text' placeholder='请输入姓名' id='studentName' class='form-control mb-2' / style='padding-left: 33px'>"
		  		+	"<span id='span2'></span>"
		  		+ "</div>"
		  		+ "<div class='form-group' style='position: relative'>"
		  		+	"<img src='/bootstrap/Public/Home/images/password.png'/ style='width: 20px;height: 20px;margin-left: 8px;margin-top: 8px;position: absolute'>"
		  		+	"<input type='password' placeholder='请输入密码' id='password' class='form-control mb-2' style='padding-left: 33px'/>"
		  		+	"<span id='span3'></span>"
		  		+ "</div>"
		  		+ "<div class='form-group'>"
		  		+	"<input type='button' value='登 录' onclick='login_student_do()'  class='form-control btn btn-success' id='submit'/>"
		  		+ "</div>"
				+ "</form>";
			// ȥ?????Ա?ļ????̬????????
			adjustStatusButton(maintainButton,studentButton);
			
			// console.log(span1);
			//?????Ҫ?ı??
			loadedVariable();
			//ʵʱ????????ѧ??
			studentId.oninput = function(){
				studentIdValue = studentId.value;
				console.log(studentIdValue);
				// ???Ҫ????????
				let data = {
					"studentIdValue":studentIdValue
				};
				$.ajax({
				    url: "/bootstrap/index.php/Home/Index/queryStudentInfo_id",
				    method: "post",
				    data:data,
				    dataType: "json",
				    success: function (data) {
				    	// alert(JSON.stringify(data));
				    	console.log( "fdf" + studentIdSpan);
				    	if(data.status == "true"){
				    		span1.style.color = "green";
				    		span1.innerHTML = "学号正确";
				    		fieldStudentOne = true;
				    	}else{
				    		span1.style.color = "red";
				    		span1.innerHTML = "学号错误";
				    		fieldStudentOne = false;
				    	}
				    }
				})  
			}
			//ʵʱ????????????
			studentName.oninput = function(){
				studentNameValue = studentName.value;
				console.log(studentNameValue);
				// ???Ҫ????????
				let data = {
					"studentNameValue":studentNameValue
				};
				$.ajax({
				    url: "/bootstrap/index.php/Home/Index/queryStudentInfo_name",
				    method: "post",
				    data:data,
				    dataType: "json",
				    success: function (data) {
				    	// alert(JSON.stringify(data));
				    	if(data.status == "true"){
				    		span2.style.color = "green";
				    		span2.innerHTML = "姓名正确";
				    		fieldStudentTwo = true;
				    	}else{
				    		span2.style.color = "red";
				    		span2.innerHTML = "姓名错误";
				    		fieldStudentTwo = false;
				    	}
				    }
				})  
			}
			//ʵʱ????????????
			password.oninput = function(){
				studentPassword = password.value;
				console.log(studentPassword);
				// ???Ҫ????????
				let data = {
					"studentPassword":studentPassword
				};
				$.ajax({
				    url: "/bootstrap/index.php/Home/Index/queryStudentInfo_password",
				    method: "post",
				    data:data,
				    dataType: "json",
				    success: function (data) {
				    	// alert(JSON.stringify(data));
				    	if(data.status == "true"){
				    		span3.style.color = "green";
				    		span3.innerHTML = "密码正确";
				    		fieldStudentThree = true;
				    	}else{
				    		span3.style.color = "red";
				    		span3.innerHTML = "密码错误";
				    		fieldStudentThree = false;
				    	}
				    }
				})  
			}
		}
		/*
		@method form_maintain(),??ѧ???ť???ѧ????
		*/
		function form_maintain(){
					// ???????????
					let form_content = document.querySelector("#form_content");
					console.log(form_content); 
					form_content.innerHTML = 
						"<form class='mt-2'>"
				  		+"<div class='form-group' style='position: relative'>" 
				  		+	"<img src='/bootstrap/Public/Home/images/work_number.png' style='width: 20px;height: 20px;margin-top: 8px;margin-left: 8px;position: absolute'/>"
				  		+	"<input type='text' placeholder='请输入您的工号' id='maintainId' class='form-control mb-2' style='padding-left: 33px;'/>"
				  		+	"<span id='span4'></span>"
				  		+"</div>"
				  		+ "<div class='form-group' style='position: relative'>"		
				  		+	"<img src='/bootstrap/Public/Home/images/user.png' style='width: 20px;height: 20px;margin-top: 8px;margin-left: 8px;position: absolute'/>"				
				  		+	"<input type='text' placeholder='请输入您的姓名' id='maintainName' class='form-control mb-2'/ style='padding-left: 33px'>"
				  		+	"<span id='span5'></span>"
				  		+ "</div>"
				  		+ "<div class='form-group' style='position: relative'>"
				  		+	"<img src='/bootstrap/Public/Home/images/password.png' style='width: 20px;height: 20px;margin-top: 8px;margin-left: 8px;position: absolute'/>"				

				  		+	"<input type='password' placeholder='请输入您的密码' id='password' class='form-control mb-2' style='padding-left: 33px'/>"
				  		+	"<span id='span6'></span>"
				  		+ "</div>"
				  		+ "<div class='form-group'>"
				  		+	"<input type='button' value='登 录'  class='form-control btn btn-success' id='submit' onclick='login_maintain_do()'/>"
				  		+ "</div>"
						+ "</form>";
						// ȥ?????ļ????̬????????
						adjustStatusButton(studentButton,maintainButton);
						//???????ֶ?
						loadedMaintainVariable();
						//ʵʱ????????????
						maintainId.oninput = function(){
							maintainIdValue = maintainId.value;
							console.log(maintainIdValue);
							// ???Ҫ????????
							let data = {
								"maintainIdValue":maintainIdValue
							};
							// alert(data);
							$.ajax({
							    url: "/bootstrap/index.php/Home/Index/queryAccendantInfo_id",
							    method: "post",
							    data:data,
							    dataType: "json",
							    success: function (data) {
							    	// alert(JSON.stringify(data));
							    	if(data.status == "true"){
							    		span4.style.color = "green";
							    		span4.innerHTML = "工号正确";
							    	}else{
							    		span4.style.color = "red";
							    		span4.innerHTML = "工号错误";
							    	}
							    }
							})  
						}
						//ʵʱ????????????
						maintainName.oninput = function(){
							maintainNameValue = maintainName.value;
							console.log(maintainNameValue);
							// ???Ҫ????????
							let data = {
								"maintainNameValue":maintainNameValue
							};
							// alert(data);
							$.ajax({
							    url: "/bootstrap/index.php/Home/Index/queryAccendantInfo_name",
							    method: "post",
							    data:data,
							    dataType: "json",
							    success: function (data) {
							    	// alert(JSON.stringify(data));
							    	if(data.status == "true"){
							    		span5.style.color = "green";
							    		span5.innerHTML = "姓名正确";
							    	}else{
							    		span5.style.color = "red";
							    		span5.innerHTML = "姓名错误";
							    	}
							    }
							})  
						}
						//ʵʱ????????????
						password.oninput = function(){
							maintainPassword = password.value;
							console.log(maintainPassword);
							// ???Ҫ????????
							let data = {
								"maintainPassword":maintainPassword
							};
							// alert(data);
							$.ajax({
							    url: "/bootstrap/index.php/Home/Index/queryStudentInfo_pwd",
							    method: "post",
							    data:data,
							    dataType: "json",
							    success: function (data) {
							    	// alert(JSON.stringify(data));
							    	if(data.status == "true"){
							    		span6.style.color = "green";
							    		span6.innerHTML = "密码正确";
							    	}else{
							    		span6.style.color = "red";
							    		span6.innerHTML = "密码错误";
							    	}
							    }
							})  
						}
		}
		// 学生-登录成功要做的
		function login_student_do(){
			if(fieldStudentOne && fieldStudentTwo && fieldStudentThree){
				let data = {
					"studentIdValue":studentIdValue,
					"studentNameValue":studentNameValue,
					"studentPassword":studentPassword
				};
				$.ajax({
					url:"/bootstrap/index.php/Home/Index/queryStudentInfo",
					method:"post",
					data:data,
					dataType:"json",
					success:function(data){
						// alert(JSON.stringify(data));
						// alert(data.status);
						if(data.status == "true"){
							// 用户已经登录
							isUserStatus = true;
							let loginStatusAfter = document.querySelector("#loginStatusAfter");
							let loginStatusBefore = document.querySelector("#loginStatusBefore");
							// 改变图标
							let loginStatusAfter_img = document.querySelector("#loginStatusAfter_img");
							loginStatusAfter_img.setAttribute("src","/bootstrap/Public/Home/images/student_icon_after.png");
							// 显示按钮
							iQ.classList.add("d-block");
							$("#login").modal("hide");

							// 显示变化
							loginStatusBefore.classList.remove("d-block");
							loginStatusBefore.classList.add("d-none");
							loginStatusAfter.classList.remove("d-none");
							loginStatusAfter.classList.add("d-block");
							// alert(studentIdValue + studentNameValue + studentPassword)
							loginName.innerHTML =  data['result'][0]['student_name'];
							getLoginName = data['result'][0]['student_name'];
							student_id =  data['result'][0]['student_id'];
							studentAddress =  data['result'][0]['d_address'];
							department = data['result'][0]['department_name'];
							// 如果用户登录了，显示自己的报修记录。初始化用户记录
							if(isUserStatus == true ){
								var submitStudentId = {
									"studentIdValue":studentIdValue
								}; 
								$.ajax({
									url:"/bootstrap/index.php/Home/Index/showUserQuestion",
									method:"post",
									data:submitStudentId,
									dataType:"json",
									success: function(data){
										// alert(JSON.stringify(data));
										// ???һ??????洢??ݵĳ???
										let dataLength = data.result.length;
										// ???һ??????洢ѭ???ļ??
										let html = "";
										for(let i=0;i<dataLength;i++){
											// ???һ??????洢ÿ?????֮??????
											let currItem = data.result[i];
											// 新建一个变量存储图片的真实的路径,否则就是虚拟的图片路径
											let imgurl;
											// 如果当前的状态，学生的状态和维修人员的状态都是1，显示前面那个绿色的图标
											// alert(currItem.accendant_status);
											if(currItem.student_status == 1 &&  currItem.accendant_status == 1){
												imgurl = currItem.complete;
											}else{
												imgurl = currItem.not;
											}
											getInitCurrId = currItem.id;

											// alert(JSON.stringify(currItem));
											html += 
												'<div id="questionDescribe" class=" w-50"  style="position: absolute;overflow:hidden">'
											   +		'<img src="'+ imgurl +'" style="width: 15px;height: 15px;margin-right: 5px;margin-left: 5px;">'	
											   +	'<a  href="#showQuestion" onclick="showDetail('+ getInitCurrId +')"  data-toggle="modal">'
											   +		currItem.question.substr(0,10) + '....'
											   +	'</a>'
											   +'</div>'
											   +'<div style="position: absolute;right: 1%;">'
											   +	'<span>'
											   +		'<img src="/bootstrap/Public/Home/images/student.png" alt="widthout" style="width: 15px;" id="student_status">'
											   +	'</span>'
											   +'</div>'
											   +'<div id="createQuestionTime" class="mr-5" style="position: absolute;right: 1%">'
											   +	currItem.addtime
											   +'</div>'
											   +'<br/>'
											   +'<br/>'
										}
												question_list.innerHTML = html;
									}
								});
							}
						}else{
							alert("登录失败");
						}
					}
				});
			}else{
				alert("登录失败");
			}
		}
		// 维修人员登录成功要做的
		function login_maintain_do(){
				let data = {
					"maintainIdValue":maintainIdValue,
					"maintainNameValue":maintainNameValue,
					"maintainPassword":maintainPassword,
				};
				// alert(JSON.stringify(data));
				$.ajax({
					url:"/bootstrap/index.php/Home/Index/queryMaintainInfo",
					method:"post",
					data:data,
					dataType:"json",
					success:function(data){
						// alert(JSON.stringify(data));
						// alert(data.status);
						if(data.status == "true"){
							let loginStatusAfter = document.querySelector("#loginStatusAfter");
							let loginStatusBefore = document.querySelector("#loginStatusBefore");
							// ?????Ǹ?Ȧ
							let loginStatusAfter_circle = document.querySelector("#loginStatusAfter > div");
							// ɾ????ı߿?
							loginStatusAfter_circle.classList.remove("border","border-info");
							// console.log(loginStatusAfter_circle);
							let loginStatusAfter_img = document.querySelector("#loginStatusAfter_img");
							loginStatusAfter_img.setAttribute("src","/bootstrap/Public/Home/images/maintain_after.png");
							// console.log(loginStatusAfter_img);
							$("#login").modal("hide");
							iQ.classList.remove("d-block");
							iQ.classList.add("d-none");
							// loginStatusBeforeû????ʱ??״̬, loginStatusAfter???ʱ??״̬
							loginStatusBefore.classList.remove("d-block");
							loginStatusBefore.classList.add("d-none");
							loginStatusAfter.classList.remove("d-none");
							loginStatusAfter.classList.add("d-block");
							// alert(studentIdValue + studentNameValue + studentPassword)
							loginName.innerHTML =  data['result'][0]['accendant_name'];
							// 显示把我接受的任务的那个按钮显示出来
							acceptTakes.classList.remove("d-none");
							acceptTakes.classList.add("d-block");
							// 我接受的任务的那个按钮添加一个点击事件
							acceptTakes.addEventListener("click",function(){
								// 根据用户名 + 自己接受维修的任务查询数据库然后查询到问题清单里面
								 	let submitAccendantName = {
								 		"maintainNameValue":maintainNameValue
								 	};
									$.ajax({
										url:"/bootstrap/index.php/Home/Index/showSelfQuestion",
										method:"post",
										data: submitAccendantName,
										dataType:"json",
										success: function(resultSelf){
											// alert(JSON.stringify(resultSelf));
											// 定义一个变量存储分割的数据
											let html = "";
											if(resultSelf.status == "true"){
												// alert(JSON.stringify(result));
												// 定义一个变量存储查询到的记录数
												// alert(recordgross);
												let data = resultSelf.result;
												// alert(data);
												for(let i=0;i<data.length;i++){
													let currItem = resultSelf.result[i];
													// alert(JSON.stringify(currItem));
													// 新建一个变量存储图片的真实的路径,否则就是虚拟的图片路径
													let imgurl;
													// 如果当前的状态，学生的状态和维修人员的状态都是1，显示前面那个绿色的图标
													// alert(currItem.accendant_status);
													if(currItem.student_status == 1 &&  currItem.accendant_status == 1){
														imgurl = currItem.complete;
													}else{
														imgurl = currItem.not;
													}
													getInitCurrId = currItem.id;

													// alert(JSON.stringify(currItem));
													html += 
														'<div id="questionDescribe" class=" w-50"  style="position: absolute;overflow:hidden">'
													   +		'<img src="'+ imgurl +'" style="width: 15px;height: 15px;margin-right: 5px;margin-left: 5px;">'	
													   +	'<a  href="#accendantShowQuestion" data-toggle="modal" onclick="accendantShowDo('+ getInitCurrId +')">'
													   +		currItem.question.substr(0,10) + '....'
													   +	'</a>'
													   +'</div>'
													   +'<div style="position: absolute;right: 1%;">'
													   +	'<span>'
													   +		'<img src="/bootstrap/Public/Home/images/accendant.png" alt="widthout" style="width: 20px;" id="student_status" >'
													   +	'</span>'
													   +'</div>'
													   +'<div id="createQuestionTime" class="mr-5" style="position: absolute;right: 1%">'
													   +	currItem.addtime
													   +'</div>'
													   +'<br/>'
													   +'<br/>'
												}
														question_list.innerHTML = html;
											}else{
												html += "没有接受任何的订单";
												question_list.innerHTML = html;
												question_list.style.color = "green";
												question_list.style.fontSize = "14px";
											}
										}
									});
							});
							// 显示所有的可接受维修的问题
								$.ajax({
									url:"/bootstrap/index.php/Home/Index/showCanDoQuestion",
									method:"post",
									dataType:"json",
									success: function(result){
										// 定义一个变量存储分割的数据
										let html = "";
										if(result.status == "true"){
											// alert(JSON.stringify(result));
											// 定义一个变量存储查询到的记录数
											// alert(recordgross);
											let data = result.result;
											// alert(data);
											for(let i=0;i<data.length;i++){
												let currItem = result.result[i];
												// alert(JSON.stringify(currItem));
												// 新建一个变量存储图片的真实的路径,否则就是虚拟的图片路径
												let imgurl;
												// 如果当前的状态，学生的状态和维修人员的状态都是1，显示前面那个绿色的图标
												// alert(currItem.accendant_status);
												if(currItem.student_status == 1 &&  currItem.accendant_status == 1){
													imgurl = currItem.complete;
												}else{
													imgurl = currItem.not;
												}
												getInitCurrId = currItem.id;

												// alert(JSON.stringify(currItem));
												html += 
													'<div id="questionDescribe" class=" w-50"  style="position: absolute;overflow:hidden">'
												   +		'<img src="'+ imgurl +'" style="width: 15px;height: 15px;margin-right: 5px;margin-left: 5px;">'	
												   +	'<a  href="#accendantShowQuestion" data-toggle="modal" onclick="accendantShowDo('+ getInitCurrId +')">'
												   +		currItem.question.substr(0,10) + '....'
												   +	'</a>'
												   +'</div>'
												   +'<div style="position: absolute;right: 1%;">'
												   +	'<span>'
												   +		'<img src="/bootstrap/Public/Home/images/accendant.png" alt="widthout" style="width: 20px;" id="student_status" >'
												   +	'</span>'
												   +'</div>'
												   +'<div id="createQuestionTime" class="mr-5" style="position: absolute;right: 1%">'
												   +	currItem.addtime
												   +'</div>'
												   +'<br/>'
												   +'<br/>'
											}
													question_list.innerHTML = html;
										}else{
											html += "所有的问题已解决";
											question_list.innerHTML = html;
											question_list.style.color = "green";
											question_list.style.fontSize = "14px";
										}
									}
								});
						}else{
							alert("登录失败!");
						}
					}
				});
			
		}
		// 学生-提交维修要做的
		function submitContent(){
			if(isUserStatus){
				// 获取提交的内容
				let contentValue =  getContent.value;
				var data = {
					"student_id":student_id,
					"contentValue":contentValue,
					"getLoginName":getLoginName,
					"studentAddress":studentAddress,
					"department_name":department
				};
				// alert(JSON.stringify(data));
				$.ajax({
					url:"/bootstrap/index.php/Home/Index/sumbit_do",
					method:"post",
					data:data,
					dataType:"json",
					success: function(data){
						// alert(JSON.stringify(data));
						if(data.status == "true" ){
							if(contentValue == ''){
								alert(JSON.stringify(contentValue));
								alert("不能为空!");
							}else{
								// alert(typeof getContent);
								$("#question").modal("hide");
								var submitStudentId = {
									"studentIdValue":studentIdValue
								}; 
								// 提交问题之后显示最新报修的问题
								$.ajax({
									url:"/bootstrap/index.php/Home/Index/showUserQuestion",
									method:"post",
									data:submitStudentId,
									dataType:"json",
									success: function(data){
										// alert(JSON.stringify(data));
										// ???һ??????洢??ݵĳ???
										let dataLength = data.result.length;
										// ???һ??????洢ѭ???ļ??
										let html = "";
										for(let i=0;i<dataLength;i++){
											// ???һ??????洢ÿ?????֮??????
											let currItem = data.result[i];

											getInitCurrId = currItem.id;

											let imgurl;
											// 如果当前的状态，学生的状态和维修人员的状态都是1，显示前面那个绿色的图标
											// alert(currItem.accendant_status);
											if(currItem.student_status == 1 &&  currItem.accendant_status == 1){
												imgurl = currItem.complete;
											}else{
												imgurl = currItem.not;
											}
											// alert(JSON.stringify(currItem));
											html += 
												'<div id="questionDescribe" class=" w-50"  style="position: absolute;overflow:hidden">'
											   +		'<img src="'+ imgurl +'" style="width: 15px;height: 15px;margin-right: 5px;margin-left: 5px;">'	
											   +	'<a  href="#showQuestion" onclick="showDetail('+ getInitCurrId +')"  data-toggle="modal" >'
											   +		currItem.question.substr(0,10) + '....'
											   +	'</a>'
											   +'</div>'
											   +'<div style="position: absolute;right: 1%;">'
											   +	'<span>'
											   +		'<img src="/bootstrap/Public/Home/images/student.png" alt="widthout" style="width: 15px;" id="student_status">'
											   +	'</span>'
											   +'</div>'
											   +'<div id="createQuestionTime" class="mr-5" style="position: absolute;right: 1%">'
											   +	currItem.addtime
											   +'</div>'
											   +'<br/>'
											   +'<br/>'
										}
												question_list.innerHTML = html;
									}
								});
							}
						}
					}
				});
			}else{
				// add programes.... 
			}
		}
		// 初始化显示10条数据
		$.ajax({
			url:"/bootstrap/index.php/Home/Index/showQuestion",
			method:"post",
			dataType:"json",
			success: function(data){
				// alert(JSON.stringify(data));
				// 定义长度
				let dataLength = data.result.length;
				// alert(dataLength);
				// 定义html存储分割数据
				let html = "";
				for(let i=0;i<dataLength;i++){
					// ???һ??????洢ÿ?????֮??????
					let currItem = data.result[i];
					//	获取初始化的每条的id
					getInitCurrId = currItem.id;
					let imgurl;
					// 如果当前的状态，学生的状态和维修人员的状态都是1，显示前面那个绿色的图标
					// alert(currItem.accendant_status);
					if(currItem.student_status == 1 &&  currItem.accendant_status == 1){
						imgurl = currItem.complete;
					}else{
						imgurl = currItem.not;
					}
					// alert(JSON.stringify(currItem));
					html += 
						'<div id="questionDescribe" class=" w-50"  style="position: absolute;overflow:hidden;margin-left:5px">'
					   +	'<img src="'+ imgurl +'" style="width: 15px;height: 15px;margin-right: 5px;margin-left: 5px;">'	
					   +	'<a href="#InitshowQuestion" onclick="showDetail(' + getInitCurrId + ')"  data-toggle="modal">'
					   +		currItem.question.substr(0,10) + '....'
					   +	'</a>'
					   +'</div>'
					   +'<div id="createQuestionTime" class="mr-3" style="position: absolute;right: 0%">'
					   +	currItem.addtime
					   +'</div>'
					   +'<br/>'
					   +'<br/>'
				}
						question_list.innerHTML = html;

			}
		});
		// 用户点击问题，显示出详细的信息
		function showDetail(id){
			// 定义一个变量传输数据到服务器
			let data = {
				"id":id
			}
			// alert(id);
			$.ajax({
				url:"/bootstrap/index.php/Home/Index/showQuestionDetail",
				method:"post",
				data:data,
				dataType:"json",
				success:function(data){
					// alert(JSON.stringify(data));
					showQuestionContent.innerHTML = data.result.question;
					showQuestionContentTwo .innerHTML = data.result.question;
					// 初始化点击问题
					// alert(JSON.stringify(data.result.total_status));
					if(data.result.total_status == "1"){
						countDownSelf.classList.remove("d-block");
						countDownSelf.classList.add("d-none");
						interview.setAttribute("disabled","disabled");
						accendantMsg.innerHTML = "完工";
						accendantMsg.style.color = "green";
						accendantMsg.style.fontSize = "17px";
						accendantMsg.style.marginLeft = "6%";
					}
					// 学生点击了申请已经完成按钮要做的
					interview.addEventListener("click",function(){
						let submitData = {
							"id":id,
						}
						$.ajax({
							url:"/bootstrap/index.php/Home/Index/interviewDo",
							method: "post",
							data: submitData,
							dataType: "json",
							success: function(resultDo){
								// alert(JSON.stringify(resultDo));
								interview.innerHTML = "您已确认完成";
								interview.setAttribute("disabled","disabled");
								clearInterval(timer);
								$("#showQuestion").modal("hide");
							}
						});
					});
					if(data.result.accendant_status == 2){
						accendantMsg.innerHTML = "正在维修";
						accendantMsg.style.color = "yellow";
						accendantMsg.style.fontSize = "17px";
						accendantMsg.style.marginLeft = "6%";
					}else if(data.result.total_status == 1){
						countDownSelf.classList.remove("d-block");
						countDownSelf.classList.add("d-none");
						accept.setAttribute("disabled","disabled");
					}else if(data.result.accendant_status == 1){
						accendantMsg.innerHTML = "完工";
						accendantMsg.style.color = "green";
						accendantMsg.style.fontSize = "17px";
						accendantMsg.style.marginLeft = "6%";
						countDownSelf.classList.remove("d-none");
						countDownSelf.classList.add("d-block");
						// 如果维修人员完成了就触发倒计时了
						// alert(JSON.stringify(data.result.counttime));
						// 定义一个变量存储数据库来的时间
						let times = data.result.counttime;
						downtime();
						function downtime() {
						    //需要倒计时的时间
						    var time = times;
						    timer = "";
						    timer = setInterval(function () {
						        if (time <= 0) {
						            clearInterval(timer);
						        }
						        time--;
						        //格式化
						        var h = Math.floor(time / 3600); //小时
						        // console.log(h);
						        var m = Math.floor((time / 60) % 60); //分
						        var s = time % 60; //秒
						        // console.log(h);
						        // console.log(m);
						        // console.log(s);
						        countDown[1].innerHTML = Math.floor(h / 10);
						        countDown[2].innerHTML = h % 10;
						        countDown[4].innerHTML = Math.floor(m / 10);
						        countDown[5].innerHTML = m % 10;
						        countDown[7].innerHTML = Math.floor(s / 10);
						        countDown[8].innerHTML = s % 10;
						        // 把事件提交给数据库
						        let dataTime = {
						        	"id":id,
						        	"counttime":time
						        }
						        $.ajax({
						        	url:"/bootstrap/index.php/Home/Index/everyCountDownDo",
						        	method: "post",
						        	data: dataTime,
						        	dataType: "json",
						        	success: function(resultL){
						        		// alert(JSON.stringify(result));
						        		// times = resultL.result.counttime;
						        		// console.log(resultL.result.counttime);
						        	}
						        });
						    }, 1000);
						}
					}else{
						accendantMsg.innerHTML = "暂无结果";
						accendantMsg.style.color = "#000";
						accendantMsg.style.fontSize = "17px";
						accendantMsg.style.marginLeft = "6%";
						countDownSelf.classList.remove("d-block");
						countDownSelf.classList.add("d-none");
						interview.innerHTML = "申请已完成";
						interview.removeAttribute("disabled");
					}
				}
			});
		}
		// 用户投诉
		function complaim(){
			alert("投诉电话为: 1234567789");
		}
		// 用户点击问题，显示出详细的信息
		function accendantShowDo(currId){
			// 提交数据（当前维修人员点击的维修问题记录）给服务器得到每条问题的描述
			let data = {
				"id":currId
			}
			// alert(currId);
			$.ajax({
				url:"/bootstrap/index.php/Home/Index/accendantShowDo",
				method:"post",
				data:data,
				dataType:"json",
				success:function(data){
					// alert(JSON.stringify(data.result.question));
					showQuestionContentThree.innerHTML = data.result.question;
					dormitoryNumber.innerHTML = data.result.d_address;
					good.classList.remove("d-block");
					good.classList.add("d-none");
					// alert(data.result.accendant_status)
					if(data.result.accendant_status == 2){
						// alert("2");
						accept.innerHTML = "您已接受此任务，请抽空完成";
						accept.classList.add("w-50");
						accept.setAttribute("disabled","disabled");
						giveUp.style.display = "none";
						good.classList.remove("d-none");
						good.classList.add("d-block");

					}
					if(data.result.accendant_status == 1){
						good.classList.remove("d-none");
						good.classList.add("d-block");
					}
				}
			});
			// 维修人员表-接受按钮添加监听事件
			accept.addEventListener("click",function(){
					let data = {
						"id":currId,
						"maintainNameValue":maintainNameValue
					}	
					// alert(data);		
					$.ajax({
						url:"/bootstrap/index.php/Home/Index/acceptdo",
						method:"post",
						data:data,
						dataType: "json",
						success:function(data){
							// alert(JSON.stringify(data));
							$("#accendantShowQuestion").modal("hide");
						}
					});

			});
			// 维修人员表-放弃按钮添加监听事件
			giveUp.addEventListener("click",function(){
				$("#accendantShowQuestion").modal("hide");
			});
			// 维修人员表-完工按钮添加监听事件
			good.addEventListener("click",function(){
				let data = {
					"id":currId,
				}	
				// alert(data);		
				$.ajax({
					url:"/bootstrap/index.php/Home/Index/goodJob",
					method:"post",
					data:data,
					dataType: "json",
					success:function(data){
						// alert(JSON.stringify(data));
						$("#accendantShowQuestion").modal("hide");
					}
				});
				$("#accendantShowQuestion").modal("hide");
			});
		}
	</script>
</body>
</html>