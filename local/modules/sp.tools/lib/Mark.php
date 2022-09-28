<?php

namespace SP\Tools;

class Mark
{
    public function add($id,$mark){

        $_SESSION[$mark][$id] = $id;

        if($_SESSION[$mark][$id]){
            return ['status'=>'add','message'=>'added'];
        } else {
            throw new \Exception('Item is not added');
        }
    }
    public function remove($id,$mark){

        unset($_SESSION[$mark][$id]);

        if($_SESSION[$mark][$id]){
            throw new \Exception('Item is not deleted');
        } else {
            return ['status'=>'remove','message'=>'removed'];
        }
    }
}