<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
 use Mail;
class visitorcontactController extends Controller
{
    public function visitorcontact(Request $request){
      $this->validate($request, [
         'name'=>'required',
         'contact_phone'=>'required',
         'contact_email'=>'required',
         'contact_text'=>'required',
        ]);
      $data = array(
         'name' => $request->name,
         'contact_email' => $request->contact_email,
         'contact_phone' => $request->contact_phone,
         'contact_text' => $request->contact_text,
        );

        $send = Mail::send('frontEnd.emails.email', $data, function($textmsg) use ($data){
         $textmsg->from($data['contact_email']);
         $textmsg->to('info@hightechribbon.com');
         $textmsg->subject($data['contact_text']);
        });

        if($send){

          return redirect('/contact-us')->with('message', 'Message sent successfully!');
        }else{
          return redirect('/contact-us')->with('message', 'Message sent successfully!');
        }
    }
}
