<?php

namespace Home\Model;
use Think\Model;

class WishModel extends Model{


    public function init(){
        $result=init();
        $MongoArr=array();
        foreach ($result as $key => $value) {
            $tmp=array();
            $tmp['id']=$value['id'];
            $tmp['author']=$value['author'];
            $tmp['content']=$value['content'];
            $tmp['createtime']=$value['createtime'];
            $tmp['isshow']=$value['isshow'];
            $MongoArr[]=$tmp;
        }
        return $MongoArr;
    }


    public function chuli($arr){
        $count=strlen($arr);
        switch ($count) {
            case 1:
                $arr='000'.$arr;
                break;
            case 2:
                $arr='00'.$arr;
                break;
            case 3:
                $arr='0'.$arr;
                break;
            default:
                $arr=$arr;
                break;
        }
        return $arr;
    }
    public function select(){
        $da=M('wish');
        return $da->select();
    }
    public function add($username,$content){
        $da=M('Wish');
        $data['author']=$username;
        $data['content']=$content;
        $data['createtime']=date('y-m-d H:i:s',time());
        $data['isshow']=0;
        $result=add($data);
        if($result['ok']==1){
            return $res=1;
        }else{
            return 0;
        }
    }
    function img1($content){
        $con=array();
        preg_match_all("/\[(.*)\]/isU",$content,$con);
        for ($i=0; $i < count($con[0]); $i++) {
            switch ($con[1][$i]) {
                case '抱抱':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/baobao.gif"/>', $content);
                    break;
                case '抓狂':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/zhuakuang.gif"/>', $content);
                    break;
                case '害羞':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/haixiu.gif"/>', $content);
                    break;
                case '酷':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/ku.gif"/>', $content);
                    break;
                case '嘻嘻':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/xixi.gif"/>', $content);
                    break;
                case '太开心':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/taikaixin.gif"/>', $content);
                    break;
                case '偷笑':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/touxiao.gif"/>', $content);
                    break;
                case '钱':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/qian.gif"/>', $content);
                    break;
                case '花心':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/huaxin.gif"/>', $content);
                    break;
                case '挤眼':
                    $content=str_replace($con[0][$i], '<img src="/mywish/Home/View/Wish/Images/phiz/jiyan.gif"/>', $content);
                    break;
            }
        }
        return $content;
        //return $content;
    }
}