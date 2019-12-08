// 找到学生按钮
let studentButton = document.querySelector(".modal-body>button:first-child");
// 找到维修人员按钮
let maintainButton = document.querySelector(".modal-body>button:first-child + button");
// console.log(maintainButton);
  /*
@method adjustStatusButton(),调整点击时候的激活样式
@param studentButton 学生按钮
@param maintainButton 维修人员的按钮
 */
function adjustStatusButton(studentButton,maintainButton){
	studentButton.classList.remove("active");
	maintainButton.classList.add("active");
}
// 封装学生表所需要的字段,用户名，工号，密码。。。
function loadedVariable(){
	//定义用户输入学号的变量
	let studentIdValue;
	//定义用户输入的姓名字段变量
	let studentNameValue;
	//定义用户输入的密码的变量
	let studentPassword;
	// 找到学生-学号
	let studentId = document.querySelector("#studentId");
	// 找到学生-用户名
	let studentName = document.querySelector("#studentName");
	// 找到学生-密码
	let student_password = document.querySelector("#password");
	// console.log(student_password);
	let loginButton = document.getElementById("submit");
	// 分别找到各自学号，姓名，密码下的span标签
	let span1 = document.querySelector("#span1");
	console.log(span1);
	let span2 = document.querySelector("#span2");
	console.log(span2);
	let span3 = document.querySelector("#span3");
	console.log(span3);
}
// 封装维修所需的变量
function loadedMaintainVariable(){
	//定义用户输入工号的变量
	let maintainIdValue;
	//定义用户输入的姓名字段变量
	let maintainNameValue;
	//定义用户输入的密码的变量
	let maintainPassword;
	// 找到学生-学号
	let maintainId = document.querySelector("#maintainId");
	// console.log(maintainId);
	// 找到学生-用户名
	let maintainName = document.querySelector("#maintainName");
	// 找到学生-密码
	let password = document.querySelector("#password");
	console.log(password);
	let loginButton = document.getElementById("submit");
	// 分别找到各自学号，姓名，密码下的span标签
	let span4 = document.querySelector("#span4");
	console.log(span4);
	let span5 = document.querySelector("#span5");
	console.log(span5);
	let span6 = document.querySelector("#span6");
	console.log(span6);
}
// quit()方法
function quit(){
	if(confirm("确认要退出吗?") == true){
		location.reload();
	}
}






