<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;


class RechargeController extends Controller
{
    public function accessTokenRequestPost(){
        // $prelaunch = 'WkdwVUlkVHVQQVdUQ0JxSlpHNjllS2ljNlNyVjRocXg6eUtuSGhMZVVFc0doU1psWA==';
        $production = 'NWlQY2EzZXdnd1NRTG42WGFrMGhaSGlIS0pHTmhJdmU6MTFGaUVHSGFIUG83SDRoWA==';

        $response = Http::withHeaders([
            'Authorization' => 'Basic '.$production
        ])->post('https://altanredes-prod.apigee.net/v1/oauth/accesstoken?grant-type=client_credentials', [
            'Authorization' => 'Basic '.$production,
        ]);
        return $response->json();
    }

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

        return view('pages.commerce', $data);
    }

    public function imei(Request $request){
        $imei =  $request->get('imei');
        // return $imei;

        $accessTokenResponse = RechargeController::accessTokenRequestPost();
        
        if($accessTokenResponse['status'] == 'approved'){

            $accessToken = $accessTokenResponse['accessToken'];

            $url_production = 'https://altanredes-prod.apigee.net/ac/v1/imeis/'.$imei.'/status';
                    
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$accessToken
            ])->get($url_production);

            return $response->json();
        } else{
            $errorCode = $response['errorCode'];
            $description = $response['description'];
            $bool = 0;
            return response()->json(['bool' => $bool,'errorCode' => $errorCode, 'description' => $description]);
        }

    }

    public function newClients(Request $request){

        $nombreContacto = $request->get('nombreContacto');
        $apellidosContacto = $request->get('apellidosContacto');

        $numeroContacto = $request->get('numeroContacto');
        $numeroContacto = preg_replace( '/\((\w+)\)/i', "$1", $numeroContacto);
        $numeroContacto = str_replace( '-', ' ', $numeroContacto);
        $numeroContacto = preg_replace( '/\s+/i', '', $numeroContacto);
        $email_remitente = "spotmobileuno@gmail.com";

        $data= [
            "subject"=>"PROSPECTO CLIENTE",
            "nombreContacto" => $nombreContacto,
            "apellidosContacto" => $apellidosContacto,
            "numeroContacto"=>$numeroContacto,
        ];
   
        Mail::to($email_remitente)->send(new SendMail($data));
        return response()->json(['http_code'=>'200','message'=>'Correo enviado...']);
    }


    public function existClient(Request $request){
        $numeroTelefono = $request->post('numeroSinEspacio');
        
        // $clientNumber = DB::table('clients')
        // ->where('clients.cellphone', $numeroTelefono)
        // ->exists();
        // return $clientNumber;


        $accessTokenResponse = RechargeController::accessTokenRequestPost();

        if($accessTokenResponse['status'] == 'approved'){
            $accessToken = $accessTokenResponse['accessToken'];
            
            $url_production = 'https://altanredes-prod.apigee.net/cm/v1/subscribers/'.$numeroTelefono.'/profile';
                    
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$accessToken
            ])->get($url_production);

            return $response->json();
        }
    }
   
}
