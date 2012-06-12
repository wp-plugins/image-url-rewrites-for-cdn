<?php
function dcr_replace_content_cdn($content){
global $dcr_options;
$slink = $dcr_options['cdn_link'];
if(!empty($slink)){
$content = str_replace('src="'.home_url('/').'wp-content/', 'src="'.$slink.'wp-content/',$content);
return $content;
}
else {
return $content;
}
}
add_filter('the_content','dcr_replace_content_cdn');
?>