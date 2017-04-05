## 接口地址使用说明

普遍接口都是有一个is_err，result，max_page，对应的分别是是否错误，返回结果，结果的最大页数（每页10条记录），同时油分也的需要post给我page的页数

### Index Controller

#### Index/index

首页的接口包括公告，最新推送，学院前三排名等等乱七八糟的

#### Index/login

登录接口

#### Index/logout

注销

#### Index/elments

这个是通过的userid判断他的权限，返回他的权限列表接口,返回permission接口

#### Index/school

返回所有学院接口

#### Index/type

返回所有舆情类型接口

### Announce Controller 接口

公告

#### Announce/index

公告页面对应接口

#### Announce/search

公告的日期期间查找，其实应该改一下命名的，但是代码已经发了，忘记改了

#### Announce/key_search

公告关键字查找

#### Announce/stick

公告置顶

#### Announce/add_announce

添加公告

#### Announce/update_announce

更新公告

#### Announce/del_announce

公告删除，硬删除

#### Announce/detail

点开公告后的细节

### Key Controller

关键字

#### Key/index

返回关键字页面的信息

### Love Controller

收藏的接口

#### Love/index

我的收藏页面接口

#### Love/search_date

日期搜索

#### Love/search_key

关键字搜索

#### Love/search_school

学院搜索

#### Love/type

类别搜索

#### Love/del

收藏删除，硬删除

### Message Controller 综合信息报送接口

太懒了，后边我就直接写方法了。

#### index

点开一条报送信息后的压面

#### single

综合信息报送页面中的接口，类似公告，每页10条

#### search

日期查询

#### key_search

关键字查询

#### school_search

学院查询

#### type_search

类别查询

#### single_admin

因为管理员和一般用户不同，座椅_admin后缀的是管理员和老师对应的接口，之后的一样，功能一样，只不过是管理员，返回信息有些不同

#### search_admin

#### key_search_admin

#### school_search_admin

#### type_search_admin

#### del_message

报送删除，软删除

#### add_message

添加报送

#### update_message

更新报送信息，更新报送时页面需要调用后台的返回信息可以直接调用Message下的index

### Single Controller 单挑信息报送，对应方法功能和message的相同

### Reply Controller 回复消息

需要向对应接口post信息的id，name=id就行了

#### index

返回对应报送信息的所有回复

#### add

添加对应报送信息的回复

#### del

删除回复

### User Controller 用户

#### personal

个人信息保存

#### online

返回在线的用户的接口

#### user

返回日志消息的接口

#### index

返回用户以及相应权限等的信息

#### ban
给用户禁止了，同理需要post id过来
