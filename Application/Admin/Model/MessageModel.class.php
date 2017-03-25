<?php
/**
 * Created by PhpStorm.
 * User: GuoRenjie
 * Date: 2017/3/21
 * Time: 8:46
 */
namespace Admin\Model;
use Think\Model;
class MessageModel extends Model {
    //获取数据
    public function getData($map, $page = 1){
        $map['is_delete'] = 0;
        if(!$page)
            $page = 1;
        $message = $this
                    ->join('yq_school on yq_message.schoolid = yq_school.schoolid')
                    ->join('yq_type on yq_message.typeid = yq_type.typeid')
                    ->where($map)
                    ->field('messageid, userid, schname, yq_message.score, title, content, createtime, click, type')
                    ->order('createtime desc')
                    ->page($page.', 10')
                    ->select();
        stand_date($message);
        return $message;
    }
    //软删除舆情
    public function del($id){
        $data['messageid'] = $id;
        $data['is_delelte'] = 1;
        if($this->save($data)){
            return true;
        }else{
            return false;
        }
    }

    public function getMessage($id){
        $map['messageid'] = $id;
        $message = $this
            ->join('yq_school on yq_message.schoolid = yq_school.schoolid')
            ->join('yq_type on yq_message.typeid = yq_type.typeid')
            ->join('yq_user on yq_message.userid = yq_user.userid')
            ->where($map)
            ->field('yq_message.messageid, yq_message.userid, schname, yq_message.score, yq_message.title, yq_message.content, yq_message.createtime, click, type, username')
            ->find();
        stand_date($message);
        return $message;
    }
}
