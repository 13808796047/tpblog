<?php

namespace app\common\model;

use think\Model;
use think\model\concern\SoftDelete;

class Admin extends Model
{
    //软删除
    use SoftDelete;

    //登录校验
    public function login($data)
    {


        $validate = new \app\common\validate\Admin();
        if (!$validate->scene('login')->check($data)) {
            return $validate->getError();
        }
        $data['password'] = md5($data['password']);
        $result = $this->where($data)->find();
        if ($result) {
            if ($result['status'] != 1) {
                return '此账号被禁用';
            }
            $sessionData = [
                'id' => $result['id'],
                'nickname' => $result['nickname'],
                'is_super' => $result['is_super']
            ];
            session('admin', $sessionData);
            return 1;
        } else {
            return '用户名错误';
        }
    }

    //注册校验
    public function register($data)
    {
        $validate = new \app\common\validate\Admin();
        if (!$validate->scene('register')->check($data)) {
            return $validate->getError();
        }
        $result = $this->allowField(true)->save($data);
        if ($result) {
            mailto($data['email'], '注册管理账号成功', '注册管理员账号成功！请登录！');
            return 1;
        } else {
            return '注册失败';
        }
    }

    //重置密码
    public function reset($data)
    {
        $validate = new \app\common\validate\Admin();

        if (!$validate->scene('reset')->check($data)) {
            return $validate->getError();
        }

        if ($data['code'] != session('code')) {
            return '验证码错误!';
        }
      $adminInfo = $this->where('email', $data['email'])->find();
        $password = mt_rand(10000, 99999);
        $adminInfo->password =$password;
      $ret = $this->where('username', $adminInfo['username'])->update(['password' => $adminInfo->password]);

        if ($ret) {
            $content = '恭喜您,密码重置成功!<hr>用户名:' . $adminInfo['username'] . '新密码是:' . $password;
            mailto($data['email'], '密码重置成功', $content);
            return 1;
        } else {
            return '重置密码失败';
        }
    }

    //密码加密写入
    public function setPasswordAttr($value)
    {
        return md5($value);
    }
}
