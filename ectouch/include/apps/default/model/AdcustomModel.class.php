<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：AdcsutomModelclass.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTOUCH 自定义广告模型
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class AdcustomModel extends BaseModel {


	/**
	 * 获取首页广告
	 */
	public function get_home_ad(){

		$sql = 'SELECT ad_type, content, url FROM ' . $this->pre . 'ad_custom';
		$ad = $this->query($sql);

		foreach($ad as $k => $v){
			$ad[$k]['content'] = get_img_url($v['content']);
		}

		return $ad;
	}

}