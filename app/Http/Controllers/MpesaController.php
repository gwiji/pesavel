<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpesaController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function stk()
    {
        return view('stk');
    }

    public function stk_simulate()
    {
        return view('stk_simulate');
    }

    public function register()
    {
        return view('register');
    }

    public function stk_push(Request $request)
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();


        $BusinessShortCode = '174379'; 
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = $request->input('amount');
        $PartyA = '2547'.$request->input('tel');
        $PartyB = '174379'; 
        $PhoneNumber = '2547'.$request->input('tel');
        $CallBackURL = 'http://pesavel.itscoming.co.ke/ValidationURL';
        $AccountReference = $request->input('ref');
        $TransactionDesc = 'Test';
        $Remarks = 'Fine';

        $stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
        dd($stkPushSimulation);
    }

    public function stk_simulation(Request $request)
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $CommandID = 'CustomerPayBillOnline';
        $ShortCode = '174379';
        $Amount = $request->input('amount');
        $Msisdn = '2547'.$request->input('tel');
        $BillRefNumber = $request->input('ref');

        $b2bTransaction = $mpesa->c2b($ShortCode, $CommandID, $Amount, $Msisdn, $BillRefNumber );
        dd($b2bTransaction);
    }

    public function validationurl(Request $request)
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $response = $request->all(); //mpesa->getDataFromCallback();
        file_put_contents(base_path('resources/lang/validation.json'), $response);
    }

    public function confirmationurl(Request $request)
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $response = $mpesa->getDataFromCallback();
        file_put_contents(base_path('resources/lang/confirmation.json'), $response);
    }

    public function registerurl(Request $request)
    {
        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $ShortCode = '174379'; //$request->input('shortcode');
        $ResponeType = $request->input('response');
        $ConfirmationURL = $request->input('confirmation');
        $ValidationURL = $request->input('validation');

        $response = $mpesa->registerurl($ShortCode,$ResponeType,$ConfirmationURL,$ValidationURL);
        dd($response);
    }
}
