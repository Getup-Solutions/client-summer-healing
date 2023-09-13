<?php

namespace App\Http\Controllers;

use App\Models\Admintraining;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdmintrainingController extends Controller
{
    public function index(){
        $admintrainings = Admintraining::all();
        return view('backend.trainings.index', compact('admintrainings'));
    }
    
    public function create(){
        return view('backend.trainings.create');
    }


    public function imageCropPost(Request $request){
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $image_name = time() . '.png';
        $path = public_path() . "/backend/images/trainings_images/" . $image_name;
        

        file_put_contents($path, $data);

        return response()->json(['status' => 1, 'message' => "Image uploaded successfully", 'image' => $image_name]);
    }

    public function store(Request $request){

        $request->validate(
            [
            'title' => 'required|unique:admintrainings',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'title.unique' => 'The title has already been taken. Try a different one',
                'image.required' => 'Error with format or size.',
            ]
        );


        $admintrainer = new Admintraining();
        if($request->hasFile('image')) {
            $admintrainer->title = $request->title;
            $admintrainer->slug = Str::slug($request->title);
            $admintrainer->price = $request->price;
            $admintrainer->description = $request->description;
            $admintrainer->image = $request->finalImageValue;
            $admintrainer->status = $request->status;
            $admintrainer->save();
        }
        else{
            $imageName = 'sample.png';
            $admintrainer->title = $request->title;
            $admintrainer->slug = Str::slug($request->title);
            $admintrainer->price = $request->price;
            $admintrainer->description = $request->description;
            $admintrainer->image = $imageName;
            $admintrainer->status = $request->status;
            $admintrainer->save();
        }
        return redirect()->route('admin.dashboard.trainings')->with('message','Trainings has been created successfully.');

    }

    public function edit(Request $request, $id){
        $admintraining = Admintraining::find($id);
        return view('backend.trainings.edit',compact('admintraining'));
    }

    public function update(Request $request, $id){
        $request->validate(
            [
            'title' => 'required',
            'price' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'title.required' => 'Field is required.',
                'price.required' => 'Field is required.',
                'image.required' => 'Error with format or size.',
            ]
        );


        $admintraining = Admintraining::find($id);
        if($request->hasFile('image')) {
            $admintraining->title = $request->title;
            $admintraining->slug = Str::slug($request->title);
            $admintraining->price = $request->price;
            $admintraining->description = $request->description;
            $admintraining->image = $request->finalImageValue;
            $admintraining->status = $request->status;
            $admintraining->save();
        }
        else{
            $admintraining->title = $request->title;
            $admintraining->slug = Str::slug($request->title);
            $admintraining->price = $request->price;
            $admintraining->description = $request->description;
            $admintraining->status = $request->status;
            $admintraining->save();
        }
        return redirect()->route('admin.dashboard.trainings')->with('message','Trainings has been updated successfully');

    }

    public function destroy($id){
        $admintraining = Admintraining::find($id);
        $admintraining->delete();
        return redirect()->route('admin.dashboard.trainings')->with('message','training has been deleted successfully');
    }

   

}
