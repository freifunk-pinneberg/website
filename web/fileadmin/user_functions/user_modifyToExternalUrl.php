<?php
class user_functions {
    function user_modifyToExternalUrl($content, $conf){
        // if link type is "external url" replace link to redirecting page with external url
        if($this->cObj->data['doktype'] == 3){
            $content = preg_replace('/(<a[^>]*href=")[^"]*("[^>]*>)/','$1http://'.$this->cObj->data['url'].'$2', $content);
        }
    return $content;
    }
}
?>
