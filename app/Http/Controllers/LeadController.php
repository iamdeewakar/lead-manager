<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\Models\Lead;


use Illuminate\Http\Request;

class LeadController extends Controller
{
    //
    public function index()
    {
        $leads = Cache::remember('leads', 60, function() {
            return Lead::with('user')
                ->whereHas('user', function($query) {
                    $query->where('status', 'ACTIVE');
                })
                ->get()
                ->groupBy('type');
        });

        return view('leads.index', compact('leads'));
    }
}
