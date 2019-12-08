<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>更多</title>
	<link rel="icon" href="/bootstrap/Public/home/images/websiteicon_.ico">
	<link rel="stylesheet" href="/bootstrap/Public/Home/css/bootstrap.4.1.min.css">
	<link rel="stylesheet" href="/bootstrap/Public/Home/css/custom.css">
	<style>
		*{
			padding: 0;
			margin: ;
		}
	</style>
</head>
<body>
	<div class="container" >
		<div class="row">
			<div class="col mt-3" id="buttons" style="text-align: center;">
				<button class="btn btn-success">信工系</button>
				<button class="btn btn-success">艺设系</button>
				<button class="btn btn-success">机电系</button>
				<button class="btn btn-success">外语系</button>
				<button class="btn btn-success">数学系</button>
				<button class="btn btn-success">艺设系</button>
			</div>
			<div class="w-100 " style="position: relative;">
				<p style="margin:1%">
					<img src="/bootstrap/Public/home/images/questionlist.png" class="img-fluid" style="width: 25px;">
					 <span>问题清单</span>
				</p>
			</div>
			<div c class="border border-muted w-100 mt-2" id="question_list" style="position: relative">
				
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
	</div>
	<script src="/bootstrap/Public/Home/js/jquery-3.3.1.min.js"></script>
	<script src="/bootstrap/Public/Home/js/bootstrap.4.1.min.js"></script>
	<script src="/bootstrap/Public/Home/js/popper.min.js"></script>
	<script>
		// 找到问题描述内容框
		let showQuestionContent = document.querySelector("#show_question_content");
		// 找到问题内容
		let questionList = document.querySelector("#question_list");
		// 找到所有的按钮组
		let buttons = document.querySelectorAll("#buttons > button");
		for(let i=0;i<buttons.length;i++){
			buttons[i].onclick = function(){
				// console.log(buttons[i].innerHTML) ;
				let sumbitInfo = {
					"department" : buttons[i].innerHTML
				}
				$.ajax({
					url: "/bootstrap/index.php/Home/More/queryInfo",
					data: sumbitInfo,
					method: "post",
					dataType: "json",
					success: function(result){
						// alert(JSON.stringify(result.status));
							let html = "";
							if(result.status == "true"){
								// 定义数据的长度
								let dataLength = result.result.length;
								// alert(dataLength);
								// 存储分割的数据
								for(let i=0;i<dataLength;i++){
									// ???һ??????洢ÿ?????֮??????
									let currItem = result.result[i];
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
									   +	'<a  href="#InitshowQuestion" onclick="showDetail('+ getInitCurrId +')"  data-toggle="modal">'
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
							}else{
								html += "暂无记录。走!去吃雪糕。";
								question_list.style.color = "green";
								question_list.style.padding = "1%";
								question_list.innerHTML = html;
							}
						}
				});
			}
		}
		function showDetail(id){
			// alert(id);
			let data = {
				"id":id
			}
			$.ajax({
				url: "/bootstrap/index.php/Home/More/showDetail",
				data: data,
				dataType: "json",
				method: "post",
				success: function(data){
					// alert(JSON.stringify(data));
					showQuestionContent.innerHTML = data.result.question;
				}
			});
		}
	</script>
</body>
</html>