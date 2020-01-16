<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Subscription;

class PagesController extends Controller
{
    public function allSubscribtion()
    {
        $subscriptions = Subscription::orderBy('id', 'desc')->get();
        return view('admin.subscription.index',compact('subscriptions'));
    }
}
