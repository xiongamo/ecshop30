<?php
/**
 * fckeditor上传后图片处理
 * 获取时自动加上域名
 * 保存时去掉域名
 */


/**
 * 替换文章内容中图片为全路径
 *
 * @param string $content
 * @return mixed
 */

if (! function_exists('get_full_content_img_url')){
    function get_full_content_img_url($content){
    	$domain = 'http://'.$_SERVER['SERVER_NAME'].'/';
        return preg_replace_callback('{(<img[^>]+src\s*=\s*")(.*?)(".*?[^>]*>)}i', function($match){
            return $match[1].$domain.$match[2].$match[3];
        }, $content);
    }
}

/**
 * 去除文章内容中图片地址前面的域名
 * @author chaokai@gz-zc.cn
 */
if(!function_exists('trip_content_domain_text')){
    function trip_content_domain_text($content){
    	$domain = 'http://'.$_SERVER['SERVER_NAME'].'/';
        return str_replace($dmoain, '', $content);
        
    }
}