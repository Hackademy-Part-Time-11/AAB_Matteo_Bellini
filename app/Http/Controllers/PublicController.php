<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestRoleMail;
use Laravel\Scout\Searchable;


class PublicController extends Controller
{
    // public function workWithUs(){
    //     return view ('workWithUs');
    // }
    public function home()
    {
        // return view('home');


        $articles= Article::where('is_accepted' ,true)->orderBy('created_at','desc')->take(6)->get();
        return view('home',compact('articles'));

        

    }

    public function workWithUs(){
        return view ('components.workWithUs');
    }

    public function sendRoleRequest(Request $request){
        $user=Auth::user();
        $role= $request->input('role');
        $email=$request->input('email');
        $presentation=$request->input('presentation');
        $requestMail=new RequestRoleMail(compact('role','email','presentation'));

        Mail::to('admin@blog.it')->send($requestMail);
        switch($role){
            case'admin':
                $user->is_admin=NULL;
                break;
                
                case'revisor':
                    $user->is_revisor=NULL;
                    break;

                    case'writer':
                        $user->is_writer=NULL;
                        break;

        }
       $user ->update('mail.roleRequest');
        return redirect()->route('home')->with('message','Grazie per averci contattato');

    }

    public function dashboard(){
        $adminRequests = User::where('is_admin',NULL)->get();
        $revisorRequests = User::where('is_revisor',NULL)->get();
        $writerRequests = User::where ('is_writer',NULL)->get();
        return view('admin.dashboard',compact('adminRequests','revisorRequests','writerRequests'));
    }

    public function searchArticle(Request $request)
    {
        $key =$request->input('key');
        $articles = Article::serach($key)->where('is_accepted', true)->get();
        return view('articles.index', compact('articles', 'key'));
    }


}
