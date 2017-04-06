<?php
/**
 * Created by PhpStorm.
 * User: GuoRenjie
 * Date: 2017/3/21
 * Time: 8:46
 */
namespace Admin\Model;
use Think\Model;
class UserModel extends Model {

    //获取用户
    public function getUser($p = 1, $map = null){
        $result = $this
            ->join('LEFT JOIN yq_school on yq_user.schoolid = yq_school.schoolid')
            ->join('LEFT JOIN yq_user_group a on yq_user.userid = a.userid')
            ->join('LEFT JOIN yq_group on a.groupid = yq_group.groupid')
            ->field('yq_user.userid, yq_user.username, lastip, lastlogintime, schname, groupname, realname')
            ->where($map)
            ->page($p.', 10')
            ->select();
        $result = stand_date($result);
        return $result;
    }
    //日志
    public function getLog($p = 1, $map = null){
        $result = $this
            ->join('LEFT JOIN yq_school on yq_user.schoolid = yq_school.schoolid')
            ->join('LEFT JOIN yq_user_group a on yq_user.userid = a.userid')
            ->join('LEFT JOIN yq_group on a.groupid = yq_group.groupid')
            ->field('yq_user.userid, yq_user.username, lastip, lastlogintime, schname, groupname, realname')
            ->where($map)
            ->order('lastlogintime desc')
            ->page($p.', 10')
            ->select();
        $result = stand_date($result);
        return $result;
    }

    public function ban($id)
    {
        $map['userid'] = $id;
        $map['ban'] = 1;
        return $this->save($map);

    }

    public function getOnline($p){

        $temp_time = time()-10*60;
        $map['updatetime'] = array('gt', $temp_time);

        $result = $this
            -> join('LEFT JOIN yq_school on yq_user.schoolid = yq_school.schoolid')
            -> join('LEFT JOIN yq_user_group a on yq_user.userid = a.userid')
            -> join('LEFT JOIN yq_group on a.groupid = yq_group.groupid')
            -> where($map)
            -> field('yq_user.userid, yq_user.username, lastip, lastlogintime, schname, groupname, realname')
            -> page($p.', 10')
            -> select();

        $result = stand_date($result);
        return $result;
    }


}
