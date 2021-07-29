<?php
/**
 * Created by PhpStorm.
 * User: Tech4all
 * Date: 2021-07-29
 * Time: 08:26
 */

function image_url($src){
    return url('assets/images/'.$src);
}

function role($id){
    $data = \App\Role::where("id",$id)->first();
    return $data['name'];
}