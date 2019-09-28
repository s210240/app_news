<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $searchString = $request->searchString;

        $data = Item::with('category')
            ->where('header', 'LIKE', '%' . $searchString . '%')
            ->orWhere('content', 'LIKE', '%' . $searchString . '%')
            ->orderBy('views', 'desc')
            ->paginate(10);

        return view('welcome', ['news' => $data]);
    }
}
