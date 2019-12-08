<?php
	namespace Home\Controller;
	use Think\Controller;

	/**
	* 
	*/
	class MoreController extends Controller
	{
		
		public function index(){
			$this->display();
		}
		public function queryInfo(){
			$department = I("post.department");
			$model = M("question_list");
			$result = $model->where("department_name='%s'",$department)->select();
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
		public function showDetail(){
			$id = I("post.id");
			$model = M("question_list");
			$result = $model->order("id desc")->find($id);
			$this->ajaxReturn(array("result"=>$result));
		}
	}
