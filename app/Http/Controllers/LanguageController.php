<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller

{

    public function change(Request $request)

    {

        $lang = $request->input('lang');

        if (!in_array($lang, ['tr', 'en', 'fi'])) {

            abort(400);

        }

        Session::put('locale', $lang);

        return redirect()->back();

    }

}
