<?php
//首先采用“fopen”函数打开文件，得到返回值的就是资源类型。
function my_fopen($str){
    $file_handle = fopen($str,"r");
    if ($file_handle){
        //接着采用while循环（后面语言结构语句中的循环结构会详细介绍）一行行地读取文件，然后输出每行的文字
        while (!feof($file_handle)) { //判断是否到最后一行
            $line = mb_convert_encoding(fgets($file_handle),"utf-8","gbk"); //读取一行文本
            echo $line; //输出一行文本
            echo "<br />"; //换行
        }
    }
    fclose($file_handle);//关闭文件
}
?>