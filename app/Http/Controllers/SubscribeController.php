<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            //TODO: validation
            $user_id = Auth::id();

            $check = Subscribe::where('user_id', $user_id)->where('category_id', $request->id)->count();

            Log::info($check);

            if ($check == 0) {
                $subscribe = new Subscribe();

                $subscribe->user_id = $user_id;
                $subscribe->category_id = $request->id;

                $subscribe->save();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Subscribe::destroy($id);

        echo $result;
    }
}
