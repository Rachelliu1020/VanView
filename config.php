<?php
//find server
$db = mysqli_connect("localhost","root","523275") or die(mysqli_connect_error());
//remote, change to:
//$db = mysqli_connect("localhost","ruiliu9_vanview","10200308xkx") or die(mysqli_connect_error());

//create db
$query ="create database if not exists vanviewdb";
//remote, change to:
//$query ="create database if not exists ruiliu9_vanview";
mysqli_query($db,$query) or die(mysqli_error($db));

//find db
mysqli_select_db($db, "vanviewdb") or die(mysqli_error($db));
//remote, change to:
//mysqli_select_db($db, "ruiliu9_vanview") or die(mysqli_error($db));


//drop tables
/*$query ="drop table users";
mysqli_query($db,$query) or die(mysqli_error($db));
$query ="drop table feedbacks";
mysqli_query($db,$query) or die(mysqli_error($db));
$query ="drop table comments";
mysqli_query($db,$query) or die(mysqli_error($db));*/


//create tables
$query ="create table if not exists users(
      firstname varchar(100) not null default '',
      lastname varchar(100) not null default '',
      email varchar(200) primary key not null,
      username varchar(100) not null default '',
      password varchar(100) NOT NULL default '',
      datetime TIMESTAMP
)";
mysqli_query($db,$query) or die(mysqli_error($db));

$query ="create table if not exists feedbacks(
      feedback_id INTEGER unsigned NOT NULL auto_increment,
      firstname varchar(100) not null default '',
      lastname varchar(100) not null default '',
      email varchar(200) NOT NULL default '',
      subject varchar(255) default '' NOT NULL ,
      comment longtext NOT NULL,
      favour_part varchar(50) NOT NULL,
      useful_part varchar(50) NOT NULL,
      add_part varchar(50) NOT NULL,
      datetime TIMESTAMP,
      PRIMARY KEY (feedback_id)
)";
mysqli_query($db,$query) or die(mysqli_error($db));

$query ="create table if not exists comments(
      comment_id INTEGER unsigned NOT NULL auto_increment,
      email varchar(200) NOT NULL default '',
      topic INTEGER NOT NULL default 0,
      comment longtext NOT NULL,
      datetime TIMESTAMP,
      PRIMARY KEY (comment_id),
      FOREIGN KEY (email) REFERENCES users(email) on DELETE CASCADE 
)";
mysqli_query($db,$query) or die(mysqli_error($db));
