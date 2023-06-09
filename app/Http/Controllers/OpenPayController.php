<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Openpay\Data\Openpay as OpenPay;
use Exception;
use OpenpayApiError;
use OpenpayApiAuthError;
use OpenpayApiRequestError;
use OpenpayApiConnectionError;
use OpenpayApiTransactionError;
use Illuminate\Http\JsonResponse;

require_once '../vendor/autoload.php';

class OpenPayController extends Controller
{
    public function references(Request $request){
        // return $request;
        #Cambiar llaves#
        $openpay = Openpay::getInstance('mpxjtlnasipbctyey0js', 'sk_5fdd44dbb4e2488bbeff58176d1dde63');
        Openpay::setProductionMode(false);

        $amount = $request->get('price_sale');
        $description = $request->get('description');

        $customer = array(
            'name'=> 'banda',
            'lastname' => '',
            'phone_number' => '9613601404',
            'email' => 'c.banda07@hotmail.com'
        );

        $chargeData = array(
            'method' => 'store',
            'amount' => floatval($amount),
            'description' => $description,
            'customer' => $customer
        );
        // print_r($chargeData);

        try {
            $charge = $openpay->charges->create($chargeData);
            // return $charge;
            return response()->json([
                'order_id' => $charge->id,
                'payment_method' => $charge->payment_method,
                'status' => $charge->status,
                'customer' => $charge->customer
            ]);
            return $charge;
        } catch (OpenpayApiTransactionError $e) {
            return $e;
        }

        return $charge;
    }
}
