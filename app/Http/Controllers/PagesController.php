<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Datatables;

class PagesController extends Controller
{
    public function index() {
        $userget = User::get();
        return view('index', compact('userget'));
    }

    public function crud($id, Request $request) {
        $user = User::where('id', $id)->first();
        

        return view('user', compact('user'));
    }

    public function userSave(Request $r) {

        User::where('id', $r->get('id'))->update([
            'username' => $r->get('name'),
            'balance' => $r->get('balance'),
            'password' => $r->get('password')
        ]);

        return redirect('/crud/'.$r->get('id'))->with('success', 'Инфорация обновлена!');
    }

    public function usernew(Request $r) {

        User::create([
            'username' => $r->get('name'),
            'balance' => $r->get('balance'),
            'password' => $r->get('password')
        ]);

        return redirect('/')->with('success', 'Создан');
    }

    public function userdelete($id) {

        User::where('id', $id)->delete();

        return redirect('/')->with('success', 'Пользователь удалён');
    }

    public function createLink() {
        $deposit = Payment::create([
            'user_id' => '1',
            'amount' => '500',
            'method' => 'fk'
        ]); 
            $merchant_id = 'test';
            $secret_word = 'test';
            $order_id = $deposit->id;
            $order_amount = '500';
            $currency = 'RUB';
            $sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$currency.':'.$order_id);

            return redirect('https://pay.freekassa.ru/?m=111&oa='.$order_amount.'&i=&currency=RUB&em=&phone=&o='.$order_id.'&pay=PAY&s='.$sign);
    }

    public function checkPaymentFk(Request $r) {
        $merchant_id = 'test';
        $merchant_secret = 'test';
        // $amount = $r->amount;
        // $merchant_orderid = $r->merchant_order_id;
        // $rsign = $r->sign;

        $sign = md5($merchant_id.':'.$_REQUEST['AMOUNT'].':'.$merchant_secret.':'.$_REQUEST['MERCHANT_ORDER_ID']);

        if ($sign != $_REQUEST['SIGN']) die('wrong sign');
        
        if($sign == $_REQUEST['SIGN']) {
            $payment = Payment::where('id', $_REQUEST['MERCHANT_ORDER_ID'])->first();
            if(!$payment) return 'Платеж не найден';

            $user = User::where('id', $payment->user_id)->first();
            $user->balance+= $payment->amount;
            $user->save();
            $payment->status = 1;
            $payment->save(); 

            die('Оплата зачислена на сайт. ID пользователя: '.$payment->user_id);
        }    
    }
}
