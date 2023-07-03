<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Request;


class RechargeController extends Controller
{

    public function recharge(Request $request){
        // return $request;

        $idOffer = $request->post('montoRecargaInput');

        $numeroTelefono = $request->post('numeroTelefono');
        $numeroTelefono = preg_replace( '/\((\w+)\)/i', "$1", $numeroTelefono);
        $numeroTelefono = str_replace( '-', ' ', $numeroTelefono);
        $numeroTelefono = preg_replace( '/\s+/i', '', $numeroTelefono);

        $data['offerData'] = DB::table('offers')
                ->join('rates', 'rates.alta_offer_id', '=', 'offers.id')
                ->where('offers.offerID_second', $idOffer)
                ->select('rates.description','offers.price_sale','offers.offerID_second')
                ->get();

        $data['client_id'] = DB::table('clients')
                ->where('clients.cellphone', $numeroTelefono)
                ->select('clients.id')
                ->get();
        

        // return $data['offerData'];

        $data['numeroTelefono'] = $numeroTelefono;
        $data['tipoServicio'] = $request->post('tipoServicioInput');
        $data['montoRecarga'] = $request->post('montoRecargaInput');


        // $data = [
        //     'numeroSinEspacio' => $numeroSinEspacio,
        //     'tipoServicio' => $tipoServicio,
        //     'montoRecarga' => $montoRecarga
        // ];

        // return $data;


        return view('pages.commerce', $data);
    }


    public function rechargeAll(Request $request){

        // $response = HTTP::get('https://apps-ws.spot1.mx/getAllRates');
        // $responseData = $response->json();
            
        // $data['offers'] = $responseData['offers'];
        

        return view('pages.recharge');
    }



   
}
