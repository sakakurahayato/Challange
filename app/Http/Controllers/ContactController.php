<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function check(ContactRequest $request)
    {
        $form = $request->all();
        $first = $form['fullname']['0'];
        $last = $form['fullname']['1'];
        $fullname = $first.''.$last;
        return view('check', ['fullname' => $fullname],['items'=>$form]);
    }
    public function submit(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return view('thanks');
    }
    public function fix(Request $request)
    {
        $form = $request->all();
        return view('fix',['items'=>$form]);
    }
    public function management()
    {
        $items = Contact::all();
        // dd($items);
        return view('management',['items'=>$items]);
    }
    public function result(Request $request)
    {
        $gender = $request->gender;
        // 全てが取てれない
        // if ($gender==0){
        //     $gender = "gender";
        // }
        $items = Contact::where(
            'fullname' ,'LIKE',"%{$request->fullname}%"
            )->where(
            'email','LIKE',"%{$request->email}%"
            )->where(
            'gender',$gender
            )->get();
        return redirect ('management',['items'=>$items]);
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('management');
    }
}
