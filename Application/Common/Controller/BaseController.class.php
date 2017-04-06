<?php
namespace Common\Controller;
use Think\Controller;
/**
 * Base基类控制器
 */
class BaseController extends Controller{
    /**
     * 初始化方法
     */
    public function _initialize(){
        $data['userid'] = I('session.userid');
        $data['updatetime'] = time();
        D('User')->save($data);
    }

}
