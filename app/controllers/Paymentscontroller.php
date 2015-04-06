<?php

class PaymentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */



    private function getPaymentsWhere($where){
        $payments=Payment::where('payment_date',$where)->get();

        return $payments;

    }

    // filter fields and search collection
    private function filter(){
        $todaydate= Input::get('filterdate');
        $filterdatefrom=Input::get('filterdatefrom');
        $filterdateto=Input::get('filterdateto');
        if($filterdatefrom && $filterdateto) {
            $payments = Payment::where('payment_date', '>=', $filterdatefrom)->where('payment_date', '<=', $filterdateto)->orderBy('payment_date','DESC')->get();
        }
        else if($todaydate){

            $payments=$this->getPaymentsWhere($todaydate)->orderBy('payment_date','DESC')->get();
        } else{
            $payments=Payment::orderBy('payment_date','DESC')->get();
        }

        return $payments;
    }


	public function index()
	{
		//
        $payments=$this->filter();


        return View::make('payments/paymentsoftheday')->with('payments',$payments);
	}


    public function csvPaymentExport()
    {
        //




        Excel::create('paymentdataexport',function($excel){
            $excel->sheet('Sheet1',function($sheet){
                $todaydate= Input::get('filterdate');
                $filterdatefrom=Input::get('filterdatefrom');
                $filterdateto=Input::get('filterdateto');
                if($filterdatefrom && $filterdateto) {
                    $payments = Payment::where('payment_date', '>=', $filterdatefrom)->where('payment_date', '<=', $filterdateto)->orderBy('payment_date','DESC')->get();
                }
                else if($todaydate){

                    $payments=$this->getPaymentsWhere($todaydate)->orderBy('payment_date','DESC');
                } else{
                    $payments=Payment::all();
                }

                $payments1=$payments;

                 $data1=[];

                foreach($payments1 as $payment)

                    foreach ($candidate=Candidate::where('id',$payment->candidate_id)->get() as $candidate)

                    array_push($data1,
                        array(
                            'Transaction Id' => $payment->id,
                            'Payment Date' => $payment->payment_date,
                             'Payment Type' => $payment->payment_type,
                              'Payment Amount' => '$'.$payment->amount,
                            'Candidate Name'=> $candidate->name
                        )
                    );

                    $sheet->fromArray($data1,null, 'A1', false);





            });

        })->download('xlsx');










    }


    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()

	{
        $verify_attempt=0;
        $manager=Input::get('manager');
        //find the user verify code
        $users=User::where('username', $manager)->first();
        if($users){
        $usercode=$users->codverify;
        }else{
            return Redirect::to('candidates/candidate/' . Input::get('candidateid'))->with('danger', 'User does not exists');

        }

        //get logged in user
        $user   = Auth::user()->id;
        $loggeduser=User::where('id',$user)->first();
        $attempts=$loggeduser->verify_attempt;

        if((Input::get('amount')>0)|| (Input::get('amount')==0 && Input::get('vercode')==$usercode)) {
            $payment = new Payment();
            $payment->amount = Input::get('amount');
            $payment->payment_date = Input::get('paymentdate');
            $payment->payment_type = Input::get('paymenttype');
            $payment->candidate_id = Input::get('candidateid');
            $payment->verify_by= $manager;
            $payment->save();
            User::where('id', $user)->update(array(

                'verify_attempt'    =>  0,
            ));

          return Redirect::to('candidates/candidate/' . Input::get('candidateid'))->with('notification', 'Payment Was Added Successfully');


        }else{
            if($attempts > 3){

                return Redirect::to('candidates')->with('danger', 'You went over the Code verification attempts limit');

            }

            $verify_attempt++;
            User::where('id', $user)->update(array(

                'verify_attempt'    =>  $verify_attempt + $attempts,
            ));

            return Redirect::to('candidates/candidate/' . Input::get('candidateid'))->with('danger', 'The code can not be verified');


        }


    }




	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
