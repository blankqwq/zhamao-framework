<?php
/**
 * Created by PhpStorm.
 * User: jerry
 * Date: 2018/10/15
 * Time: 10:36 AM
 */

class RequestEvent extends Event
{
    public function __construct($req) {
        foreach(Cache::get("mods") as $k => $v){
            if(in_array("onRequest", get_class_methods($v))){
                /** @var ModBase $v */
                $v::onRequest($req);
            }
        }
    }
}