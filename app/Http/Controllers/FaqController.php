<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class FaqController extends Controller
{
    public function showfaq() {
        $faqs = Faq::all();
        return view('welcome', compact('faqs'));
    }

    public function createfaq(Request $request) {

        $faq = new Faq();

        $faq->question = $request->question;
        $faq->answer = $request->answer;

        $faq->save();

        return redirect(URL::tokenRoute('faq'));
    }
    
}
