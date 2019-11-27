<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubscriptionsController extends Controller
{
    public function store(Billable $billable)
    {
        
        DB::transaction(function() use ($billable) {
            
            $customer = $billable->createCustomer('token');
            
            $user = User::register('premium');
        });
    }
}
