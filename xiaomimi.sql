#创建数据库
create database xiaomimi default charset=utf8;
use xiaomimi;
set names utf8;

#创建用户名表
drop table if exists user;
create table user(
  id int unsigned not null auto_increment comment 'id',
  username varchar(50) not null comment '用户名',
  password char(32) not null comment '密码',
  primary key(id)
)engine=InnoDB default charset=utf8 comment '用户列表';