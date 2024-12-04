<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Models\restaurant;
use App\Models\Register;
use App\Models\login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use App\lists;
class UserController extends Controller
 
{
  public function list()
  {
      
    $data =restaurant::all();
    return view('list',["data"=>$data]);
  
  }

  public function home()
  {
    return view('home');
  }
  function add(Request $request){

    $request->validate([
      'name'=>'required |max:15 |min:2 |alpha',
      'email'=>'required|email',
      'address'=>'required |max:25 |min:2'

    ]);

    // return $request->input();
      $resto=new restaurant;
      $resto->name=$request->input('name');
      $resto->email =$request->input('email');
      $resto->address=$request->input('address');
      $resto->save();
        $request->session()->flash('status','Resturant submitted successfully');
        return redirect('list');
     }
  
     function adduser(Request $request){
    
     }
     function delete($id){
      echo restaurant::find($id)->delete();
      Session::flash('status','Resturant submitted delete successfully');
      return redirect('list');
}
function edit($id){
  $data =restaurant::find($id);
 
  return view('edit',['data'=>$data]);
}
function update(Request $request){
  // return $request->input();
    $resto=restaurant::find($request->input('id'));
    $resto->name=$request->input('name');
    $resto->email =$request->input('email');
    $resto->address=$request->input('address');
    $resto->save();
      // $request->session()->flash('status','Resturant updated submitted successfully');
      // return redirect()->back();

      return redirect('list')->with('status', 'Resturant updated submitted successfully');

   }
   
   function Register(Request $request){

    // dd($request->all());
   $request->validate([
      'name'=>'required|max:40|min:2',
      'email'=>'required|email',
      'password' => 'required|min:3|confirmed'
    ]);
    $resto=new Register;
    $resto->name=$request->input('name');
    $resto->email =$request->input('email');
    $resto->password=Hash::make($request->input('password'));
    $resto->confirmPassword=Hash::make($request->input('confirmPassword'));
  
    $resto->save();
      // $request->session()->put('resto',$request->input('name'));
      // return redirect('/');


      return redirect(' login')->with('status', 'Resturant updated submitted successfully');
      return redirect('login');
   }

 public function registerlist()
  {
    $item =Register::get();
    return view('registerlist',compact('item'));
  }
  function deleteregister($id){
    echo Register::find($id)->delete();
    Session::flash('status','Resturant submitted delete successfully');
    return redirect('registerlist');
}

function editregister($id){
  $data =Register::find($id);
  return view('editregister',['data'=>$data]);
}

function updateregister(Request $request){
  // return $request->input();
    $resto=Register::find($request->input('id'));
    $resto->name=$request->input('name');
    $resto->email =$request->input('email');
    $resto->save();
      // $request->session()->flash('status','Resturant updated submitted successfully');
      // return redirect()->back();

      return redirect('list')->with('status', 'Resturant updated submitted successfully');

   }
public function login(Request $request)
    {
        // Validate the email and password input
        $request->validate([
            'email' => 'required|email',            // Validate the email field
            'password' => 'required|string|min:3',  // Validate the password field
        ]);

        // Retrieve the user by email
        $user = Register::where('email', $request->input('email'))->first();

        // Conditional check for email and password
        if (!$user) {
            // If no user is found with the provided email
            return redirect()->back()->withErrors(['email' => 'No account found with this email.']);
        }

        // Check if password is correct
        if (!Hash::check($request->input('password'), $user->password)) {
            // If password does not match
            return redirect()->back()->withErrors(['password' => 'Incorrect password.']);
        }

            Session::put('user', $user);

        // If email and password are correct, log the user in
        return redirect('home');
    }
}





