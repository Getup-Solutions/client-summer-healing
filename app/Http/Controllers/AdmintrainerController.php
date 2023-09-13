<?php

namespace App\Http\Controllers;

use App\Mail\AdminTrainerCreateNotifyMail;
use App\Models\Admintrainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdmintrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admintrainers = Admintrainer::all();
        return view("backend.trainers.index", compact('admintrainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.trainers.create");
    }


    public function imageCropPost(Request $request)
    {
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name = time() . '.png';
        $path = public_path() . "/backend/images/trainers_images/" . $image_name;
        

        file_put_contents($path, $data);

        return response()->json(['status' => 1, 'message' => "Image uploaded successfully", 'image' => $image_name]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
            'trainer_name' => 'required',
            'email' => 'required|unique:admintrainers|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'trainer_name.required' => 'Field is required.',
                'email.unique' => 'The email has already been taken. Try a different email',
                'image.required' => 'Error with format or size.',
            ]
        );
        
        $admintrainer = new Admintrainer();
        if($request->hasFile('image')) { 
            // $imageName = time().'.'.$request->image->extension();  
            // $request->image->move(public_path('backend/images/trainers_images'), $imageName);
            $admintrainer->trainer_name = $request->trainer_name;
            $admintrainer->slug = Str::slug($request->trainer_name);
            $admintrainer->email = $request->email;
            $admintrainer->phone = $request->phone;
            $admintrainer->bio = $request->bio;
            $admintrainer->image = $request->finalImageValue;
            $admintrainer->status = $request->status;
            $admintrainer->save();

            if($admintrainer->save()){
                $user = new User();
                $user->name = $request->trainer_name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->password = Hash::make($request->password);
                $user->is_trainer = 1;
                $user->trainer_id = $admintrainer->id;
                $user->type = 1;
                $user->save();


                $details = [
                    'username' => $request->email,
                    'password' => $request->password,
                ];

                /* THIS IS THE AN EMAIL FUNCTION WHEN ADMIN CREATE A NEW TRAINER. THE LOGIN DETAILS WILL BE SENT TO THE TRAINER EMAIL ID */

                Mail::to('krishnadas@getupsolutions.com.au')->send(new AdminTrainerCreateNotifyMail($details));
            
                // if (Mail::failures()) {
                //     return response()->Fail('Sorry! Please try again latter');
                // }else{
                //     return response()->success('Great! Successfully send in your mail');
                // }

            }
        }
        else{
            $imageName = 'sample.png';
            $admintrainer->trainer_name = $request->trainer_name;
            $admintrainer->slug = Str::slug($request->trainer_name);
            $admintrainer->email = $request->email;
            $admintrainer->phone = $request->phone;
            $admintrainer->bio = $request->bio;
            $admintrainer->image = $imageName;
            $admintrainer->status = $request->status;
            $admintrainer->save();

            if($admintrainer->save()){
                $user = new User();
                $user->name = $request->trainer_name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->password = Hash::make($request->password);
                $user->is_trainer = 1;
                $user->trainer_id = $admintrainer->id;
                $user->type = 1;
                $user->save();

                /* THIS IS THE AN EMAIL FUNCTION WHEN ADMIN CREATE A NEW TRAINER. THE LOGIN DETAILS WILL BE SENT TO THE TRAINER EMAIL ID */
                $details = [
                    'username' => $request->email,
                    'password' => $request->password,
                ];
                Mail::to('krishnadas@getupsolutions.com.au')->send(new AdminTrainerCreateNotifyMail($details));
            
            }
        }
        return redirect()->route('admin.dashboard.trainers')->with('message','Trainer has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admintrainer = Admintrainer::find($id);
        return view("backend.trainers.edit", compact('admintrainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
            'trainer_name' => 'required',
            'email' => 'email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'trainer_name.required' => 'Field is required.',
                'image.required' => 'Error with format or size.',
            ]
        );
        
        $admintrainer = Admintrainer::find($id);
        //dd($admintrainer->id);
        if($request->hasFile('image')) { 
            //$imageName = time().'.'.$request->image->extension();  
            //$request->image->move(public_path('backend/images/trainers_images'), $imageName);
            //$passwordOld = $admintrainer->password;
            $admintrainer->trainer_name = $request->trainer_name;
            $admintrainer->slug = Str::slug($request->trainer_name);
            $admintrainer->email = $request->email;
            $admintrainer->phone = $request->phone;
            $admintrainer->bio = $request->bio;
            $admintrainer->image = $request->finalImageValue;
            $admintrainer->status = $request->status;
            $admintrainer->save();

            if($admintrainer->save()){
                $passwordOld = User::where('email', $request->email)->pluck('password');
                $passwordField = '';
                if($request->password != ""){
                    $passwordField = Hash::make($request->password);
                }
                else{
                    $passwordField = $passwordOld[0];
                }
                User::where('email', $request->email)->update(
                    array(
                        'name' => $request->trainer_name, 
                        'email' => $request->email, 
                        'phone' => $request->phone, 
                        'password' => $request->password != '' ? Hash::make($request->password) : $passwordOld[0], 
                        'is_trainer' => 1, 
                        'type' => 1, 
                    )
                );
            }
        }
        else{
            //$passwordOld = $admintrainer->password;
            $admintrainer->trainer_name = $request->trainer_name;
            $admintrainer->slug = Str::slug($request->trainer_name);
            $admintrainer->email = $request->email;
            $admintrainer->phone = $request->phone;
            $admintrainer->bio = $request->bio;
            $admintrainer->status = $request->status;
            $admintrainer->save();

            if($admintrainer->save()){
                $passwordOld = User::where('email', $request->email)->pluck('password');
                //dd($passwordOld[0]);
                $passwordField = '';
                if($request->password != ""){
                    $passwordField = Hash::make($request->password);
                }
                else{
                    $passwordField = $passwordOld[0];
                }
                User::where('email', $request->email)->update(
                    array(
                        'name' => $request->trainer_name, 
                        'email' => $request->email, 
                        'phone' => $request->phone, 
                        'password' => $request->password != '' ? Hash::make($request->password) : $passwordOld[0], 
                        'is_trainer' => 1, 
                        'type' => 1, 
                    )
                );
            }
        }
        return redirect()->route('admin.dashboard.trainers')->with('message','Trainer has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admintrainer = Admintrainer::find($id);
        //dd($admintrainer->id);
        $admintrainer->delete();

        $trainer_id = User::where("trainer_id", $admintrainer->id)->first();
        $trainer_id->delete();

        return redirect()->route('admin.dashboard.trainers')->with('message','Trainer has been deleted successfully.');
    }



    


}
