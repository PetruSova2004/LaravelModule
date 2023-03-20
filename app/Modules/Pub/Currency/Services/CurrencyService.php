<?php

namespace App\Modules\Pub\Currency\Services;

class CurrencyService
{

    public static function exchange($to, $from, $amount)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.apilayer.com/currency_data/convert?to=" . $to . "&from=" . $from . "&amount=" . $amount,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain",
                "apikey: n3NMg41dcwfTjnulaQ4x18sG4iQxz2PF"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }

    public function changeToEuro()
    {
        $to = 'EUR';
        $from = 'USD';
        $amount = 100;
        $x = $this->exchange($to, $from, $amount);

        $FailedMessage = 'You have exceeded your daily/monthly API rate limit';
        $findMessage = $x->message;

        if (!strpos($FailedMessage, $findMessage)) {
            session()->forget('EUR');
//            dd($findMessage);
            return redirect()->back()->with('error', $FailedMessage);
        }

        session()->forget('USD');
        session(['EUR' => 'EURO']);
        return redirect()->back();
    }

    public function changeToUsd()
    {
        session()->forget('EUR');
        session(['USD' => 'DOLLAR']);
        return redirect()->back();
    }

}
