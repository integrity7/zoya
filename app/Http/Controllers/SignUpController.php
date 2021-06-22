<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Illuminate\Support\Str as SupportStr;
use Redirect;
use Storage;
use Str;

class SignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        $service_type = $request->get('service_type');

        return view('sign-up', compact('service_type'));
    }

    public function create(Request $request)
    {

        return redirect()->route('signup')->with('success', 'Запись');
    }
}
