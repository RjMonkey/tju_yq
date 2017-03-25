<?php
namespace Admin\Controller;
use Common\Controller\AdminBaseController;
header("Cache-Control:application/json");
/**
 * 后台首页控制器
 */
class AnnounceController extends AdminBaseController{
	/**
	 * 首页
	 */
	public function index(){
		@session_start();
		$announcement = D('Announce')	->join('yq_user on yq_announce.userid = yq_user.userid')
										->order('yq_announce.createtime desc, stick desc')->select();
		stand_date($announcement);
		$result['is_err'] = 1;
		if($announcement)
			$res['is_err'] = 0;
		$res['result'] = $announcement;
	}

	public function search(){
		$date1 = strtotime(I('post.date1'));
		$date2 = strtotime(I('post.date2'));
		$map['createtime'] = array('gt', $date1);
		$map['createtime'] = array('lt', $date2);
		$result = D('Announce')	->join('yq_user on yq_announce.userid = yq_user.userid')
								->where($map)
								->order('yq_announce.createtime desc, stick desc')->select();
		stand_date($result);
		$res['is_err'] = 1;
		if($result)
			$res['is_err'] = 0;
		$res['result'] = $result;
		echo json_encode($res);
		exit;

	}
	public function key_search(){
		$key = I('post.keywords');
		$map['title'] = array('like', $key);
		$result = D('Announce')	->join('yq_user on yq_announce.userid = yq_user.userid')
			->where($map)
			->order('yq_announce.createtime desc, stick desc')->select();
		stand_date($result);
		$res['is_err'] = 1;
		if($result)
			$res['is_err'] = 0;
		$res['result'] = $result;
		echo json_encode($res);
		exit;
	}

	//增加
	public function add_announce(){

	}

	//编辑
	public function update_announce(){

	}

	//删除
	public function del_announce(){

	}

	/**
	 * elements
	 */



}
