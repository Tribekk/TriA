<?php

namespace App\Filters;

class ClientFilter extends QueryFilter{

    public function search_field($search_string = ''){
        return $this->builder
            ->where('name', 'LIKE', '%'.$search_string.'%')
            ->orWhere('firstname', 'LIKE', '%'.$search_string.'%')
            ->orWhere('otchestvo', 'LIKE', '%'.$search_string.'%')
            ->orWhere('email', 'LIKE', '%'.$search_string.'%')
            ->orWhere('number', 'LIKE', '%'.$search_string.'%');
    }
}
