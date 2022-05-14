# think-captcha

thinkphp6 前后端分离验证码类库

## 安装
> composer require lin-guifeng/think-captcha @dev


## 注意

本验证码只适用于前后端分离，不推荐在模板中使用，并且需要开启redis



## 使用

### 直接访问获取验证码

你的项目域名/captcha
如：http://127.0.0.1/captcha

可在think-captcha/src/CaptchaController.php中修改适合自身项目的返回值


### 在控制器中输出验证码

在控制器的操作方法中使用

~~~
public function captcha($id = '')
{
	return captcha($id);
}
~~~
在控制器中可直接使用，返回验证码图片和对应的唯一键值


### 控制器里验证

使用TP的内置验证功能即可（未经过测试验证）
~~~
$this->validate($data,[
    'captcha|验证码'=>'require|captcha'
]);
~~~
或者手动验证
~~~
if(!captcha_check($key, $captcha)){
 //验证失败
};
~~~