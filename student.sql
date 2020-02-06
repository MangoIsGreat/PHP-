create table student (
    id int(10) unsigned primary key auto_increment,
    name varchar(12) not null,
    sex enum('男','女') default '男' not null,
    age tinyint(4) default 24 not null,
    edu enum('初中','高中','大专','本科','研究生') default '大专' not null,
    salary float(8,2) unsigned default 0.00 not null,
    bonus float(6,2) unsigned default 0.00 not null,
    city varchar(32) null
)
charset 'utf8';