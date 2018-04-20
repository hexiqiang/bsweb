<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/20 0020
 * Time: 下午 17:11
 */

namespace app\index\controller;
use think\Controller;
use think\Request;
use think\View;
class Common extends Controller
{
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
    }
}