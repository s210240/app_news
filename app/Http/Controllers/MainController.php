<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subscribe;
use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Item::with('category')->paginate(10);

        return view('welcome', ['news' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Item::find($id);

        if (Auth::check()) {
            $user_id = Auth::id();
            $subs = Subscribe::where('user_id', $user_id)->where('category_id', $data->category_id)->pluck('id');
            Log::info($subs);

            if (count($subs) > 0) {
                $sub_id = $subs[0];
            } else {
                $sub_id = 0;
            }
        } else {
            $sub_id = 0;
        }

        Item::where('id', $id)
            ->update([
                'views'=> DB::raw('views+1')
            ]);

        return view('detail', ['news' => $data, 'sub_id' => $sub_id]);
    }
}
