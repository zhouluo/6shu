<?php
//打印函数
function p ($arr) {
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}



/**
 * 替换微博内容的URL地址、@用户与表情
 * @param  [String] $content [需要处理的微博字符串]
 * @return [String]          [处理完成后的字符串]
 */
function replace_weibo ($content) {
	if (empty($content)) return;

	//给URL地址加上 <a> 链接
	$preg = '/(?:http:\/\/)?([\w.]+[\w\/]*\.[\w.]+[\w\/]*\??[\w=\&\+\%]*)/is';
	$content = preg_replace($preg, '<a href="http://\\1" target="_blank">\\1</a>', $content);
	
	//给@用户加是 <a> 链接
	$preg = '/@(\S+)\s/is';
	$content = preg_replace($preg, '<a href="' . __APP__ . '/User/\\1">@\\1</a>', $content);
	
	//提取微博内容中所有表情文件
	$preg = '/\[(\S+?)\]/is';
	preg_match_all($preg, $content, $arr);
	//载入表情包数组文件
	$phiz = include './Public/Data/phiz.php';
	if (!empty($arr[1])) {
		foreach ($arr[1] as $k => $v) {
			$name = array_search($v, $phiz);
			if ($name) {
				$content = str_replace($arr[0][$k], '<img src="' . __ROOT__ . '/PUBLIC/images/mr/' . $name . '.gif" title="' . $v . '"/>', $content);
			}
		}
	}
	return str_replace(C('FILTER'), '***', $content);
}


/**
 * 创建目录（如果该目录的上级目录不存在，会先创建上级目录）
 * 依赖于 ROOT_PATH 常量，且只能创建 ROOT_PATH 目录下的目录
 * 目录分隔符必须是 / 不能是 \
 *
 * @param   string  $absolute_path  绝对路径
 * @param   int     $mode           目录权限
 * @return  bool
 */
function techan_mkdir($absolute_path, $mode = 0777){
    if (is_dir($absolute_path)){
        return true;
    }
    $root_path      = '.';
    $relative_path  = str_replace($root_path, '', $absolute_path);
    $each_path      = explode('/', $relative_path);
    $cur_path       = $root_path; // 当前循环处理的路径
    foreach ($each_path as $path){
        if ($path){
            $cur_path = $cur_path . '/' . $path;
            if (!is_dir($cur_path)){
                if (@mkdir($cur_path, $mode)){
                    fclose(fopen($cur_path . '/index.htm', 'wb'));
                }else{
                    return false;
                }
            }
        }
    }
    return true;
}