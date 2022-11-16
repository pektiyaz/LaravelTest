<?php
namespace App\Traits;

trait Sortable{
    public function scopeSortable($builder)
    {
        $direction = "DESC";
        if(!isset(request()->sort)) return $builder;
        $sort_array = explode(",", request()->sort);
        foreach($sort_array as $sortField){
            if(substr($sortField, 0,1) == "-") $direction = "ASC";
            $sortField = str_replace('-', '',$sortField);
            if(in_array($sortField,$this->sortableFields)){
                $builder->orderBy($sortField, $direction);

            }
            
        }
        return $builder;
    }
}