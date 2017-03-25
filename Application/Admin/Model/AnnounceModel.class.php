<?php
/**
 * Created by PhpStorm.
 * User: GuoRenjie
 * Date: 2017/3/21
 * Time: 8:46
 */
namespace Admin\Model;
use Think\Model;
class AnnounceModel extends Model {
    public function getData()
    {
        return $this->select();
    }

    public function getJoinData($table, $l_id, $r_id)
    {
        $this   ->join($table.' on yq_announce.'.$l_id.' = '.$r_id)
                ->order('yq_announce.createtime desc, stick desc')->select();
    }
}
