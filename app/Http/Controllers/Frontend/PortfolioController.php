<?php

namespace App\Http\Controllers\Frontend;

use App\Domain\Business\Models\Client;
use App\Domain\Portfolio\Models\Work;
use App\Domain\Portfolio\Models\WorkCategory;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function __invoke()
    {
        return view('frontend.portfolio.index')->with([
            'clients'       => Client::latestClients(),
            'portfolio'     => Work::with(['category','media'])->get(),
            'categories'    => WorkCategory::all(),
        ]);
    }
}
