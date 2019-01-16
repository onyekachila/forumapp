<?php

namespace App\Filters;

use Illuminate\Http\Request; 
use App\User; 

class ThreadFilters
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request; 
    }
    
    
    public function apply($builder)
    {        
        $this->builder = $builder; 
        if(!$username = $this->request->by) return $builder;        

        return $builder->where('user_id', $user->id); 
    }

    protected function by($builder, $username)
    {
        $user = User::where('name', $username)->firstOrFail();

        return $builder->where('user_id', $user->id); 
    }
}