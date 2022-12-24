<?php

namespace App\Http\Controllers;

use App\Mail\MailReminder;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($id)
    {
        $targetUser= User::find($id);
        $data = [
            "subject"=>"Reminder",
            "body"=>"Hello dear, it is a reminder email!"
        ];
//        dd($targetUser);
        // MailNotify class that is extend from Mailable class.
        try
        {
            $m =  new MailReminder($data);
            $m->text = 'emails.reminder';
            $m->with = ['Here'];
            Mail::to($targetUser->email)->send($m);
            return response()->json(['Great! Successfully send in your mail']);
        }
        catch(\Exception $e)
        {
            return response()->json($e->getMessage());
        }
    }
    public function index1()
    {
        $targetUser= User::find(3);
        $data = [
            "subject"=>"Reminder",
            "body"=>"Hello dear, it is a reminder email!"
        ];
//        dd($targetUser);
        // MailNotify class that is extend from Mailable class.
        try
        {
            $m =  new MailReminder($data);
            $m->text = 'emails.reminder';
            $m->with = ['Here'];
            Mail::to($targetUser->email)->send($m);
            return response()->json(['Great! Successfully send in your mail']);
        }
        catch(\Exception $e)
        {
            return response()->json($e->getMessage());
        }
    }
}
