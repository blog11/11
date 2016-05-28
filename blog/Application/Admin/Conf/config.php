<?php
return array(
	//'配置项'=>'配置值'
    'db_type'=>'mysql',
    'db_host'=>'localhost',
    'db_user'=>'root',
    'db_pwd'=>'',
    'db_port'=>3306,
    'db_name'=>'blog',
    'db_prefix'=>'blog_',
    array(
		'type'=>'memcache',    
		'host'=>'localhost',    
		'port'=>'11211',    
		'prefix'=>'blog_',    
		'expire'=>300
	),
);