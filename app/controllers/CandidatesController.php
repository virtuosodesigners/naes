<?php

class CandidatesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    private function filter(){
        $searchf= Input::get('searchf');

        if($searchf) {
            $candidates = Candidate::where('id', '=', $searchf)->orWhere('name', 'LIKE', "%$searchf%")->get();

        } else{
            $candidates=Candidate::orderBy('created_at','DESC')->get();
        }

        return $candidates;
    }
	public function index()
	{
		//
        $candidates=$this->filter();

       // $candidates=Candidate::all();
        return View::make('candidates/candidates')->with('candidates',$candidates);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return View::make('candidates/addcandidate');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $candidate = new Candidate();
        $candidate->name = Input::get('name');
        $candidate->address=Input::get('address');
        $candidate->tel=Input::get('tel');
        $candidate->email=Input::get('email');
        $candidate->candidate_type=Input::get('candidate_type');
        $candidate->passport=Input::get('passport');
        $candidate->passportexpiry=Input::get('passportexpiry');
        $candidate->tel1=Input::get('tel1');
        $candidate->orientationdate=Input::get('orientationdate');
        $candidate->interviewdate=Input::get('interviewdate');
        $candidate->medicaldate=Input::get('medicaldate');
        $candidate->cbc=Input::get('cbc');
        $candidate->embassydate=Input::get('embassydate');
        $candidate->traveldate=Input::get('traveldate');
        if(Input::hasFile('image')) {
            $fileName=Input::file('image')->getClientOriginalName();
            $file = Image::make(Input::file('image')->getRealPath());
            //$filename=$file->getClientOriginalName();
            $filename2 = preg_replace("/ /", "-", $fileName);
            $candidate2=preg_replace("/ /","_", $candidate->name);
            //$fileext=$file->getClientOriginalExtension();
            $photoPath=public_path() . '/imagescan/'.$candidate2 .'_'.$filename2;

            $file->fit(200,300)->save($photoPath);

            //$filename=$image->getClientOriginalName();
            $candidate->candidatephoto = $candidate2 .'_'.$filename2;
        }
        $candidate->id=rand(1000,1000000);
        $candidate->employer=Input::get('employer');
        $candidate->position2=Input::get('position2');
        $candidate->passissuedate=input::get('passissuedate');
        $candidate->emergency=Input::get('emergency');
        $candidate->emergencyaddress=Input::get('emergencyaddress');
        $candidate->contract=Input::get('contract')? true : false;
        $candidate->passpictures=Input::get('passpictures')? true : false;
        $candidate->passport1=Input::get('passport1')? true : false;
        $candidate->recommendations=Input::get('recommendations')? true : false;
        $candidate->regfee=Input::get('regfee')? true : false;
        $candidate->visa=Input::get('visa')? true : false;
        $candidate->paymenttype=Input::get('paymenttype');
        $candidate->save();

        return Redirect::to('candidates')->with('notification','Candidate Was Added Successfully');
	}

    public function csvExport()
    {
        //


        Excel::create('paymentdata',function($excel){
            $excel->sheet('Sheet1',function($sheet){
                $candidate=Candidate::all();
               $data1=[];
               foreach($candidate as $field)
                array_push($data1,array('ID'=>$field->id,'Name'=>$field->name,'Program Type'=>$field->candidate_type));

               $sheet->fromArray($data1,null, 'A1', false);

            });

        })->download('csv');
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
        $candidate= Candidate::findOrFail($id);
        Candidate::where('id', $candidate)->first();
        return View::make('candidates/candidate')->with('candidate',$candidate);

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
        $candidate=Candidate::findOrFail($id);
        return View::make('candidates/edit',array('candidate'=>$candidate));
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
