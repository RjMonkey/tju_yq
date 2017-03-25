<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
header("Cache-Control:application/json");
/**
 * 权限还没写
 */
class SingleController extends AdminBaseController{
	/**
	 * 单条信息报送(学生)
	 * 有userid约束
	 */
	public function single(){
//		@session_start();
		$map['userid'] = I('session.userid');

		$page = I('post.page');
		$map['product'] = 1;
		$message = D('Message')->getData($map, $page);
		$result['result'] = $message;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}

	//单条信息报送（管理员）
	public function single_admin(){
		$page = I('post.page');
		$map['product'] = 1;
		$message = D('Message')->getData($map, $page);
		$result['result'] = $message;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}


	//时间搜索
	public function search(){
		$date1 = strtotime(I('post.date1'));
		$date2 = strtotime(I('post.date2'));
		$map['createtime'] = array('gt', $date1);
		$map['createtime'] = array('lt', $date2);

		$map['userid'] = I('session.userid');

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;

	}

	//关键字搜索
	public function key_search(){
		$key = I('post.keywords');
		$map['title'] = array('like', $key);

		$map['userid'] = I('session.userid');

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}

	//学院搜索
	public function school_search(){
		$school = I('post.school');
		$map['schname'] = $school;

		$map['userid'] = I('session.userid');

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}
	public function type_search(){
		$map['type'] = I('post.type');

		$map['userid']=I('session.userid');

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}


	/**管理员
	 * 没有userid约束
	 */
	//日期搜索
	public function search_admin(){
		$date1 = strtotime(I('post.date1'));
		$date2 = strtotime(I('post.date2'));
		$map['createtime'] = array('gt', $date1);
		$map['createtime'] = array('lt', $date2);

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}
	//关键字搜索
	public function key_search_admin(){

		$key = I('post.keywords');
		$map['title'] = array('like', $key);

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}

	//学院搜索
	public function school_search_admin(){

		$school = I('post.school');
		$map['schname'] = $school;

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}

	//类别搜索
	public function type_search_admin(){
		$map['type'] = I('post.type');

		$map['product'] = 1;
		$page = I('post.page');
		$result = D('Message')->getData($map, $page);
		$result['result'] = $result;
		$result['is_err'] = 0;
		echo json_encode($result);
		exit;
	}

	//增加
	public function add_message(){

	}

	//编辑
	public function update_message(){

	}

	//删除
	public function del_message(){
		$id = trim(I('post.message_id'));
		$result = array();
		if(D('Message')->del($id)){
			$result['result'] = 'is_ok';
			$result['is_err'] = 0;
		}else{
			$result['result'] = '数据库错误，请重试！';
			$result['is_err'] = 1;
		}
		echo json_encode($result);
		exit;
	}
    //收藏
	public function love(){
		$id = trim(I('post.message_id'));
		$result = array();
		if(D('User_collection')->love($id)){
			$result['result'] = 'is_ok';
			$result['is_err'] = 0;
		}
		else{
			$result['result'] = '数据库错误，请重试！';
			$result['is_err'] = 1;
		}
		echo json_encode($result);
		exit;
	}
	/**
	 * elements
	 */


}
