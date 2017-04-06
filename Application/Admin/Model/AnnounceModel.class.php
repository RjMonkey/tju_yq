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

}
