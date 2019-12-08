<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function queryStudentInfo_id(){
    	$studentIdValue = I("post.studentIdValue");
    	//为student创建一个模型
    	$model = M("student");
    	//根据用户输入的学号查询student表
    	$result_id = $model->where("student_id='%s'",$studentIdValue)->select();
    	if($result_id){
    		$array = array(
    		    "status"=>"true" 
    		);
    	}else{
    		$array = array(
    		    "status"=>"false" 
    		);
    	}
    	echo json_encode($array);
    }
    public function queryStudentInfo_name(){
    	$studentNameValue = I("post.studentNameValue");
    	//为student创建一个模型
    	$model = M("student");
    	//根据用户输入的姓名查询student表
    	$result_name = $model->where('student_name="%s"',$studentNameValue)->select();
    	if($result_name){
    		$array = array(
    		    "status"=>"true" 
    		);
    	}else{
    		$array = array(
    		    "status"=>"false" 
    		);
    	}
    	echo json_encode($array);
    }
    public function queryStudentInfo_password(){
    	$studentPassword = I("post.studentPassword");
    	//为student创建一个模型
    	$model = M("student");
    	//根据用户输入的密码查询student表
    	$result_pwd = $model->where('student_pwd="%s"',$studentPassword)->select();
    	if($result_pwd){
    		$array = array(
    		    "status"=>"true" 
    		);
    	}else{
    		$array = array(
    		    "status"=>"false" 
    		);
    	}
    	echo json_encode($array);
    }
    public function queryAccendantInfo_id(){
    	$maintainIdValue = I("post.maintainIdValue");
    	//为student创建一个模型
    	$model = M("accendant");
    	//根据用户输入的密码查询student表
    	$result_id = $model->where('accendant_id=%d',$maintainIdValue)->select();
    	if($result_id){
    		$array = array(
    		    "status"=>"true" 
    		);
    	}else{
    		$array = array(
    		    "status"=>"false" 
    		);
    	}
    	echo json_encode($array);
    }
    public function queryAccendantInfo_name(){
    	$maintainNameValue = I("post.maintainNameValue");
    	//为student创建一个模型
    	$model = M("accendant");
    	//根据用户输入的密码查询student表
    	$result_name = $model->where('accendant_name="%s"',$maintainNameValue)->select();
    	if($result_name){
    		$array = array(
    		    "status"=>"true" 
    		);
    	}else{
    		$array = array(
    		    "status"=>"false" 
    		);
    	}
    	echo json_encode($array);
    }
    public function queryStudentInfo_pwd(){
    	$maintainPassword = I("post.maintainPassword");
    	//为student创建一个模型
    	$model = M("accendant");
    	//根据用户输入的密码查询student表
    	$result_pwd = $model->where('pwd="%s"',$maintainPassword)->select();
    	if($result_pwd){
    		$array = array(
    		    "status"=>"true" 
    		);
    	}else{
    		$array = array(
    		    "status"=>"false" 
    		);
    	}
    	echo json_encode($array);
    }
    public function queryStudentInfo(){
        $studentIdValue = I("post.studentIdValue");
        $studentNameValue = I("post.studentNameValue");
        $studentPassword = I("post.studentPassword");
        $modal = M("student");
        $modal->where("student_id='%s'",$studentIdValue)->setInc("loginnum","1");
        $result = $modal->where("student_id='%s' and student_name='%s' and student_pwd='%s'",$studentIdValue,$studentNameValue,$studentPassword)->select();
        if($result){
            $array = array(
                "status"=>"true",
                "result"=>$result
            );
        }else{
            $array = array(
                "status"=>"false",
            );
        }
        $this->ajaxReturn($array,"json");
    }
    public function queryMaintainInfo(){
        $maintainIdValue = I("post.maintainIdValue");
        $maintainNameValue = I("post.maintainNameValue");
        $maintainPassword = I("post.maintainPassword");
        $modal = M("accendant");
        $result = $modal->where("accendant_id='%s' and accendant_name='%s' and pwd='%s'",$maintainIdValue,$maintainNameValue,$maintainPassword)->select();
        if($result){
            $array = array(
                "status"=>"true",
                "result"=>$result
            );
        }else{
            $array = array(
                "status"=>"false",
            );
        }
        $this->ajaxReturn($array,"json");
    }
    // 填写问题之后要做的
    public function sumbit_do(){
        // 用户的学号
        $student_id = I("post.student_id");
        // 提交上来的问题
        $contentValue = I("post.contentValue");
        // 用户的姓名
        $getLoginName = I("post.getLoginName");
        // 提交上来的住址
        $studentAddress = I("post.studentAddress");
        // 提交上来的系别
        $department_name = I("post.department_name");
        $times = date("y/m/d");
        $modal = M("question_list");
        $data = array(
            "studentid"=>$student_id,
            "add_question_name"=>$getLoginName,
            "question"=>$contentValue,
            "addtime"=>$times,
            "d_address"=>$studentAddress,
            "counttime"=>"18000",
            "not"=>"/bootstrap/PUBLIC/Home/images/preIcon.png",
            "complete"=>"/bootstrap/PUBLIC/Home/images/complete.png",
            "department_name"=>$department_name
        );
        if($modal->add($data)){
            $array = array(
                "status"=>"true"
            );
        }else{
            $array = array(
                "status"=>"false"
            );
        }
        $this->ajaxReturn($array);
    }
    // 显示10条数据出来
    public function showQuestion(){
        $modal = M("question_list");
        $result =  $modal->limit(10)->order("id desc")->select();
        $this->ajaxReturn(array("result"=>$result));
    }
    // 查询问题的详细信息
    public function showQuestionDetail(){
        $id = I("post.id");
        $modal = M("question_list");
        $result =  $modal->find($id);
        $this->ajaxReturn(array("result"=>$result));
    }
    // 显示用户自己提交的问题
    public function showUserQuestion(){
        $studentIdValue = I("post.studentIdValue");
        $modal = M("question_list");
        $result =  $modal->where("studentid='%s'",$studentIdValue)->order("id desc")->select();
        $this->ajaxReturn(array("result"=>$result));
    }
    // 查询对应记录的数据（学生的状态和维修人员的状态和真实的图标或者预览的图标）
    public function showRICON(){
        $id = I("post.currId");
        $modal = M("question_list");
        $result =  $modal->where("id='%s'",$id)->select();
        if($result){
            $this->ajaxReturn(array("data"=>$result));
        }else{
            $this->ajaxReturn(array("data"=>"false"));
        }
    }
    // 显示所有可以维修的问题
    public function showCanDoQuestion(){
        // 给question_list创建一个模板
        $modal = M("question_list");
        // 根据当前页和每页显示多少条记录查看结果
        $result = $modal->where("total_status=0 and accendant_status=0")->order("id desc")->select();
        if ($result) {
                    $array = array(
                        "status" => "true",
                        "result" => $result
                    );
                } else {
                    $array = array(
                        "status" => "false"
                    );
                }

                $this->ajaxReturn($array);
    }
    // accendantShowDo()方法
    public function accendantShowDo(){
        $id = I("post.id");
        $modal = M("question_list");
        $result =  $modal->where("id='%s'",$id)->find($id);
        $this->ajaxReturn(array("result"=>$result),"json");
    }
    // 维修人员在点击了维修列表那个接受维修的按钮之后要做的事情
    public function acceptdo(){
        $id = I("post.id");
        $maintainNameValue = I("post.maintainNameValue");
        $modal = M("question_list");
        $result =  $modal->find($id);
        $modal->where("id='%s'",$id)->setField("student_status",2);
        $modal->where("id='%s'",$id)->setField("accendant_status",2);
        $modal->where("id='%s'",$id)->setField("accendant_name",$maintainNameValue);
        $this->ajaxReturn(array("datas"=>$result));
    }
    public function goodJob(){
        $id = I("post.id");
        $modal = M("question_list");
        $result =  $modal->find($id);
        $modal->where("id='%s'",$id)->setField("accendant_status",1);
        $result =  $modal->find($id);
        $this->ajaxReturn(array("datas"=>$result));
    }
    // 循环一次时间需要做的
    public function everyCountDownDo(){
        $id = I("post.id");
        $counttime = I("post.counttime");
        $modal = M("question_list");
        $result = $modal->where("id='%s'",$id)->setField("counttime",$counttime);
        $result = $modal->find($id);
        $this->ajaxReturn(array("result"=>$result));
    }
    // 用户点击了申请已完成按钮需要做的
    public function interviewDo(){
        $id = I("post.id");
        $modal = M("question_list");
        $deal_one =  $modal->where("id='%s'",$id)->setField("student_status",1);
        // 如果维修人员状态为1，学生状态为1,这总进度为1;
        // $deal_two =  $modal->where("id='%s' and student_status=1 and accendant_status=1",$id)->setField("total_status",1);
        // 维修人员的状态为1
        $deal_two =  $modal->where("id='%s'",$id)->setField("accendant_status",1);
        // 总状态为1
        $deal_three =  $modal->where("id='%s'",$id)->setField("total_status",1);
        // 时间设置为0
        $deal_four =  $modal->where("id='%s'",$id)->setField("counttime",0);
        if($deal_one && $deal_two && $deal_three && $deal_four){
            $array = array(
                "status"=>"申请成功"
            );
        }else{
            $array = array(
                "status"=>"申请失败"
            );
        }
        $this->ajaxReturn($array);
    }
    // 维修人员显示自己自身的维修单子
    public function showSelfQuestion(){
        $maintainNameValue = I("post.maintainNameValue");
        $modal = M("question_list");
        $result = $modal->where("accendant_name='%s' and accendant_status = 2",$maintainNameValue)->select();
        if($result){
            $array = array(
                "status"=>"true",
                "result"=>$result
            );
        }else{
            $array = array(
                "status"=>"false"
            );
        }
        $this->ajaxReturn($array);
    }
}