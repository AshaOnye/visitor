<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipments;
use Auth;

class ShipmentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
       
    }
    public function create()
    {
        return view('shipment.create');
    }
    public function index()
    { 
      
        $ship = shipments::where('uid',Auth::user()->id)->get();
       return view('shipment.index',['ship'=>$ship]);
    }

    public function store()
    {
        $rad ='SH'.rand(1000000,9999999);
        $shipment = new shipments();
        $shipment->uid = Auth::user()->id;
        $shipment->shipid = $rad;
        $shipment->storename = request('storename');
        $shipment->store_address = request('store_address');
        $shipment->tracking_number = request('tracking_number');
        $shipment->courier = request('courier');
        $shipment->package_from = request('package_from');
        $shipment->package_to = request('package_to');
        $shipment->upload = request('upload');
        $shipment->package_descp = request('package_descp');
        $shipment->delivery_option = request('delivery_option');
        $shipment->datetime=date('Y-m-d H:i:s');
        // dd($shipment);

        $shipment->save();

       
        
       return redirect('/shipments');
    }
}
