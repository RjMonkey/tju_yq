<?php
/**
 * Created by PhpStorm.
 * User: GuoRenjie
 * Date: 2017/3/21
 * Time: 8:46
 */
namespace Admin\Model;
use Think\Model;
class ReplyModel extends Model {

    public function replyCounts($id){
        $map['messageid'] = $id;
        return $this->where($map)->count();
    }


}
