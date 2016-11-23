<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\ORM\TableRegistry;

class FormatHelper extends Helper{

    public function getName($id, $resource){
        $records=TableRegistry::get($resource);
        $query = $records->find()->where(['id'=>$id]);
        return $query->first()->name;
    }
    public function getFilter($filter, $resource, $find=''){
        $records=TableRegistry::get($resource);
        $query = $records->find($find)->where($filter);
        return $query;
        
    }
}

