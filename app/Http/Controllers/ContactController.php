<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use View;

class ContactController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {                          //shows contacts in a table
        $model = DB::table('contacts')->get();
        return view('contacts', ['model' => $model]);
    }

    public function edit($id) {                      //shows edit form with populated model properties
       
        $user = DB::table('contacts')->where('id', '=', $id)->get()->first();
        return View::make('editcontact')->with('data', $user);
    }

    public function delete($id) {                   //deletes a record based on id sent from view.

        DB::table('contacts')->where('id', '=', $id)->delete();
         return redirect('/contacts');

    }

    public function newcontact()                    //shows New Contact Form
    {
        return view('newcontact'); 
    }
    
    
     public function create()                       //creates a new contact record
         {
             
               $contact = new Contact;
               $contact->contact_first_name = Input::get('firstname');
               $contact->contact_last_name = Input::get('lastname');
               $contact->contact_email = Input::get('email');
               $contact->contact_phone = Input::get('phone');
               $contact->contact_city = Input::get('city');
               $contact->save();
            return redirect('/contacts');      
        } 
        
    public function update()                       //update contact record according to propertie sent by view.
    {
        $contact=DB::table('contacts')->where('id','=',Input::get('id'))
                ->update([
                        'contact_first_name'=>Input::get('firstname'),
                        'contact_last_name' =>Input::get('lastname'),
                        'contact_phone'=>Input::get('phone'),
                        'contact_email'=>Input::get('email'),
                        'contact_city'=> Input::get('city')
                        
                        ]);
        return redirect('/contacts');
    }
    
    public function searchresult(){  //recieves search_value from view, picks matching records from db and sends them to view.
        
        $search_value=Input::get('search_value');
     $columns = ['id','contact_first_name','contact_last_name','contact_phone','contact_email','contact_city'];

        $query = DB::table('contacts')->select('*');

        foreach($columns as $column)
        {
          $query->orwhere($column, '=', $search_value);
        }
           $models = $query->get();
        return View::make('searchresult')->with('model', $models);
//            
        
    }
    public function search(){
        return view('search');
    }

}
