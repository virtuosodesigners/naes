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
            $candidates = Candidate::where('id', '=', $searchf)
                ->orWhere('name', 'LIKE', "%$searchf%")
                ->orWhere('registration_number', 'LIKE', "%$searchf%")
                ->orWhere('candidate_type', 'LIKE', "%$searchf%")
                ->orWhere('candidatestatus', 'LIKE', "%$searchf%")
                ->orWhere('address', 'LIKE', "%$searchf%")
                ->get();

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
        $user= Auth::user()->id;
        $loggeduser=User::where('id',$user)->first();
        $posted_by=$loggeduser->username;
        $candidate = new Candidate();
        $candidate->posted_by = $posted_by;
        $candidate->name = Input::get('name');
        $candidate->address=Input::get('address');
        $candidate->tel=Input::get('tel');
        $candidate->email=Input::get('email');
        $candidate->candidate_type=Input::get('candidate_type');
        $candidate->passport=Input::get('passport');
        $candidate->passportexpiry=Input::get('passportexpiry');

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
        $candidate->registration_number=rand(10000,10000000);
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
        $candidate->city=Input::get('city');
        $candidate->parishes=Input::get('parishes');
        $candidate->country=Input::get('country');
        $candidate->optionalposition=Input::get('optionalposition');
        $candidate->candidatestatus=Input::get('candidatestatus');
        $candidate->company=Input::get('company');
        $candidate->positonworked=Input::get('positonworked');
        $candidate->empdateFrom=Input::get('empdateFrom');
        $candidate->empdateTo=Input::get('empdateTo');
        $candidate->company2=Input::get('company2');
        $candidate->positonworked2=Input::get('positonworked2');
        $candidate->empdateFrom2=Input::get('empdateFrom2');
        $candidate->empdateTo2=Input::get('empdateTo2');
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
        if (is_null($candidate))
        {
            return Redirect::route('candidates.index');
        }


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



        //redirect to update form

        $candidate=Candidate::findOrFail($id);
        if (is_null($candidate))
        {
            return Redirect::route('candidates.index');
        }
        return View::make('candidates.edit',array('candidate'=>$candidate));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id)
	{
        //echo $id;

        $candidate=Candidate::find($id);


        $candidate->name = Input::get('name');
           $candidate->address=Input::get('address');
           $candidate->tel=Input::get('tel');
           $candidate->email=Input::get('email');
           $candidate->candidate_type=Input::get('candidate_type');
           $candidate->passport=Input::get('passport');
           $candidate->passportexpiry=Input::get('passportexpiry');

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
        $candidate->city=Input::get('city');
        $candidate->parishes=Input::get('parishes');
        $candidate->country=Input::get('country');
        $candidate->optionalposition=Input::get('optionalposition');
        $candidate->candidatestatus=Input::get('candidatestatus');
        $candidate->company=Input::get('company');
        $candidate->positonworked=Input::get('positonworked');
        $candidate->empdateFrom=Input::get('empdateFrom');
        $candidate->empdateTo=Input::get('empdateTo');
        $candidate->company2=Input::get('company2');
        $candidate->positonworked2=Input::get('positonworked2');
        $candidate->empdateFrom2=Input::get('empdateFrom2');
        $candidate->empdateTo2=Input::get('empdateTo2');


           $candidate->save();

          return Redirect::route('candidates.index')->with('notification','Candidate Was updated Successfully');


         	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $candidate=Candidate::findOrFail($id);
        $candidate->delete();
        return Redirect::to('candidates')->with('danger', 'Candidate deleted successfully!');
	}


}
