use lnmp;
set names utf8;

drop table if exists `user`;

create table `user`(
    `id`    int(11) unsigned not null auto_increment comment 'id',
    `name`  varchar(100) not null default '' comment '用户名',
    `age`   tinyint(4) unsigned not null default '0' comment '年龄',
    `mtime` timestamp not null default current_timestamp on update current_timestamp comment '修改时间',
    `ctime` timestamp not null default current_timestamp comment '创建时间',
    primary key (`id`)
) engine=innodb default charset=utf8mb4 comment='用户表';
