<?php

/*
*返回bool
*/
function memcacheSet($name,$value){
	$memcache=new \Think\Cache\Driver\Memcache();
	$result=$memcache->set($name,$value);
	return $result;
}

function memcacheGet($name){
	$memcache=new \Think\Cache\Driver\Memcache();
	$result=$memcache->get($name);
	return $result;
}

function memcacheDel($name){
	$memcache=new \Think\Cache\Driver\Memcache();
	$result=$memcache->rm($name);
}

//清除所有缓存
function memcacheClean(){
	$memcache=new \Think\Cache\Driver\Memcache();
	$result=$memcache->clear();
}