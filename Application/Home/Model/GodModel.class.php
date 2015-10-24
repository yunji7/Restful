<?php


namespace Home\Model;

use Think\Model;

class GodModel extends Model
{


    /**
     * @var array  自动验证
     */
    protected $_validate = array(


    //array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)

    );


    /**
     * @var array 自动完成
     */
    protected $_auto = array(


        // array(完成字段1,完成规则,[完成条件,附加规则]),

    );
}