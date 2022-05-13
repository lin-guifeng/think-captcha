# think-captcha

thinkphp6 前后端分离验证码类库

## 安装
> composer require lin-guifeng/think-captcha



## 使用

### 在控制器中输出验证码

在控制器的操作方法中使用

~~~
public function captcha($id = '')
{
	return captcha($id);
}
~~~
然后注册对应的路由来输出验证码


### 模板里输出验证码

首先要在你应用的路由定义文件中，注册一个验证码路由规则。

~~~
\think\facade\Route::get('captcha/[:id]', "\\linguifeng\\captcha\\CaptchaController@index");
~~~


### 控制器里验证

使用TP的内置验证功能即可
~~~
$this->validate($data,[
    'captcha|验证码'=>'require|captcha'
]);
~~~
或者手动验证
~~~
if(!captcha_check($captcha)){
 //验证失败
};
~~~