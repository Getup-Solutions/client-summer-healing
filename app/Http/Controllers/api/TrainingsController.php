<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Admintraining;
use Illuminate\Http\Request;

class TrainingsController extends Controller
{
    public function index(){
        $trainings = Admintraining::orderBy('id', 'DESC')->get();
        if(count($trainings)>0){
            $response = [
                'trainers' => $trainings,
                'msg' => "Trainings all list"
            ];
            return response($response, 201);
        }
        return [
            'msg' => "No trainings found!"
        ];
        
    }
}
