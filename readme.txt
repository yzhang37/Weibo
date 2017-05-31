在所有的页面中，大致都分为四个部分，固定在上方的头部（有搜索栏，功能是否实现？），左部的导航栏，中部的消息（重要，我们没有做很多工作），右部的各种链接入口
我们的说明也都是按这四个模块以及其中的模块分割线说明的，有些页面中不再赘述

重要前提：1. 在所有的页面中昵称就可以识别一个用户，登录也是用昵称的
          2. 服务器的ip地址没有改，一致用“http:localhost/weibo/页面名称.html”
         3. 简单的接口都提供了，代码在头部，但是关于消息的展示没有做出来，所以具体分页还是什么方法劳你们费心了。我们可以提供一些参考，下面是HTML模板
		  4. 我赞的和赞我的，我评论的和评论我的的页面只需要向服务器传递用户昵称然后获得相关消息，比较简单，重点还是微博消息的无限加载，所以暂时不给你们
		  5. 我关注的和关注我的页面没有写，看大作业的后期情况再决定是否添加
		  6. 所有页面头部都有搜索检索框，是否实现功能不确定，看服务器端和数据库情况

在这里我们的大多数接口都已经写在head头部，但是代码可能有些小问题，以下是分工，可以找对应的人沟通									
我们的分工：周于瑞 weibo首页和个人首页
			路梦珂 注册页面和个人主页
			赵康哲 我赞的和赞我的，我评论的和评论我的		

重点：我们提供的前端接口仅供参考，你们需要把代码看仔细，传递数据格式几乎都是json





weibo首页：http://localhost/weibo/weibo.html
个人首页：http://localhost/weibo/personal_home.html
注册页面：http://localhost/weibo/sign.html
个人主页：http://localhost/weibo/personal_page.html
我赞的：http://localhost/weibo/my_praise.html
赞我的：http://localhost/weibo/rec_praise.html
我评论的：http://localhost/weibo/my_htmlment.html
评论我的：http://localhost/weibo/rec_htmlment.html