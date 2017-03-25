<?php
/**
 * Created by PhpStorm.
 * User: GuoRenjie
 * Date: 2017/3/21
 * Time: 8:46
 */
namespace Admin\Model;
use Think\Model;
class SessionModel extends Model {
    public function onlineCount()
    {
        $map = array('session_expire'=>array('gt',NOW_TIME));
        $inline = $this->where($map)->count();
        return $inline;
    }

    public function getOnline($p = 1){
        $map = array('session_id'=>array('neq', ''),'session_expire'=>array('gt',NOW_TIME),'session_data'=>array('neq',''));
        $res = $this
            ->join('LEFT JOIN yq_user a on yq_session.session_id = yq_user.session_id')
            ->join('LEFT JOIN yq_schhol on a.schooid = yq_school.schoolid')
            ->join('LEFT JOIN yq_user_group b a.userid = yq_user_group.userid')
            ->join('LEFT JOIN yq_group on b.groupid = yq_group.groupid')
            ->field('yq_session.session_id, yq_user.userid, yq_user.username, yq_user.realname, schname, groupname')
            ->where($map)
            ->page($p.', 10')
            ->select();
        return $res;
    }
}
