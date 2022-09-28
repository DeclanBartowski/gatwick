<?php

namespace SP\Tools\Controller;

use Bitrix\Main\Loader;
use SP\Tools\Mark;

class MarkController extends \Bitrix\Main\Engine\Controller
{
    public function configureActions()
    {
        return [
            'mark' => [
                'prefilters' => []
            ],
            'getCount' => [
                'prefilters' => []
            ],
        ];
    }

    public function markAction($id,$mark)
    {
        if(Loader::includeModule('sp.tools')){
            $markobject = new Mark();
            if($_SESSION[$mark][$id]){
                try {
                    return $markobject->remove($id,$mark);
                } catch (\Exception $e){
                    return ['status'=>'error','message'=>'Error Remove'];
                }
            } else {
                try {
                    return $markobject->add($id,$mark);
                } catch (\Exception $e){
                    return ['status'=>'error','message'=>'Error Add'];
                }
            }
        } else {
            return ['status'=>'error','message'=>'Module sp.tools not installed'];
        }
    }

    public function getCountAction($mark){
        return count($_SESSION[$mark]);
    }
}