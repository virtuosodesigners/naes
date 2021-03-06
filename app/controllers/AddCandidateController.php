<?php
class AddCandidateController extends BaseController{

    public function showForm(){

        return View::make('addcandidate');
    }

    public function create(){
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
            $file = Input::file('image');
            $file->move(public_path() . '/imagescan', $candidate->name . '.jpg');
            //$filename=$image->getClientOriginalName();
            $candidate->candidatephoto = $file;
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
        $candidate->candidropstatus=Input::get('candidropstatus');
        $candidate->company=Input::get('company');
        $candidate->positonworked=Input::get('positonworked');
        $candidate->empdateFrom=Input::get('empdateFrom');
        $candidate->empdateTo=Input::get('empdateTo');
        $candidate->company2=Input::get('company2');
        $candidate->positonworked2=Input::get('positonworked2');
        $candidate->empdateFrom2=Input::get('empdateFrom2');
        $candidate->empdateTo2=Input::get('empdateTo2');
        $candidate->save();

        return Redirect::back();
    }
}

?>