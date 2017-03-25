<?php
/**
 * Created by PhpStorm.
 * User: GuoRenjie
 * Date: 2017/3/21
 * Time: 8:46
 */
namespace Admin\Model;
use Think\Model;
class UserCollectionModel extends Model {

    //收藏
    public function love($id){

        $data['userid'] = I('session,userid');
        $data['messageid'] = $id;
        if($this->add($data)){
            return true;
        }else{
            return false;
        }
    }

    public function getData($map = array(), $p = 1){
        @session_start();

        $map['yq_user_collection.userid'] = I('session.userid');
//        $map['yq_user_collection.userid'] = 1;
        $result = $this
            ->join('left join yq_message a on yq_user_collection.messageid = a.messageid')
            ->join('yq_type on a.typeid = yq_type.typeid')
            ->join('yq_school on a.schoolid = yq_school.schoolid')
            ->field('a.messageid, a.userid, schname, a.score, a.title, a.content, a.createtime, a.click, type')
            ->order('id desc')
            ->where($map)
            ->page($p.', 10')
            ->select();

        return $result;
    }

    public function del($id){
        $map['messageid'] = $id;
        $map['userid'] = I('session.userid');
        if($this->where($map)->delete()){
            return true;
        }else{
            return false;
        }
    }
    //日志
    public function getUser($p = 1, $map = null){
        $result = $this
            ->join('LEFT JOIN yq_school on yq_user.schoolid = yq_school.schoolid')
            ->join('LEFT JOIN a yq_user_group on yq_user.userid = yq_user_group.userid')
            ->join('LEFT JOIN yq_group on a.groupid = yq_group.groupname')
            ->field('yq_user.userid, yq_user.username, lastip, lastlogintime, schname, groupname, realname')
            ->where($map)
            ->page($p.', 10')
            ->select();
        stand_date($result);
        return $result;
    }

    public function ban($id)
    {
        $map['userid'] = $id;
        $map['ban'] = 1;
        return $this->save($map);

    }
}
