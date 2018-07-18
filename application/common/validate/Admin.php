<?php

namespace app\common\validate;

use think\Validate;

class Admin extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'    =>    ['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'username|用户名' => 'require',
        'password|密码' => 'require',
        'confirm_password|确认密码' => 'require|confirm:password',
        'nickname|昵称' => 'require',
        'email|邮箱' => 'require|email|unique:admin',
        'code|验证码'=>'require',
    ];

    /**
     * 定义错误信息
     * 格式：'字段名.规则名'    =>    '错误信息'
     *
     * @var array
     */
    protected $message = [];

    //登录验证场景
    public function sceneLogin()
    {
        return $this->only(['username','password']);
    }
    //注册场景
    public function sceneRegister()
    {
        return $this->only(['username', 'password', 'confirm_password', 'nickname', 'email'])->append('username','unique:admin');
    }
    //重置密码
    public function sceneReset()
    {
        return $this->only(['code']);
    }
}
