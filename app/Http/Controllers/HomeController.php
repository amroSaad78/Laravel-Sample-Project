<?php

namespace App\Http\Controllers;

use App\Models\ArivCity;
use App\Models\CarType;
use App\Models\DepCity;
use App\Models\TripData;
use App\Models\TripType;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function show($lang):View{
    $list = $this->listAll();
    return view("$lang.index",['page'=>'index',
                            'carTypes'=>$list->carTypes,
                            'depcities'=>$list->depcities,
                            'arivcities'=>$list->arivcities,
                            'tripTypes'=>$list->tripTypes]);
    }




    public function getPrice(Request $request, $lang):View{
    $formFields = $request->validate([
        'depcity'=>'required|integer',
        'arivcity'=>'required|integer',
        'triptype'=>'required|integer',
        'cartype'=>'required|integer'
    ]);
    $result = TripData::where([
        'dep_cities_id'=>$formFields['depcity'],
        'ariv_cities_id'=>$formFields['arivcity'],
        'trip_types_id'=>$formFields['triptype'],
        'car_types_id'=>$formFields['cartype'],
    ])->first();
    $list = $this->listAll();

    //TODO

    return view("$lang.index",['page'=>'index',
                            'carTypes'=>$list->carTypes,
                            'depcities'=>$list->depcities,
                            'arivcities'=>$list->arivcities,
                            'tripTypes'=>$list->tripTypes,
                            'formFields'=>$formFields,
                            'price'=>$result ? $result->price :'--,--',

                        ]);
    }





    protected function listAll(){
    $oneDay = now()->addDay();
    $carTypes= cache()->remember('cartypes', $oneDay, fn() =>CarType::all(['id','arname','enname','seat','bag','image']));
    $depcities= cache()->remember('depcities', $oneDay, fn() =>DepCity::all(['id','arname','enname']));
    $arivcities= cache()->remember('arivcities', $oneDay, fn() =>ArivCity::all(['id','arname','enname']));
    $tripTypes= cache()->remember('triptypes', $oneDay, fn () =>TripType::all(['id','arname','enname']));
    return (object)['carTypes'=>$carTypes, 'depcities'=>$depcities, 'arivcities'=>$arivcities, 'tripTypes'=>$tripTypes];
    }
}
