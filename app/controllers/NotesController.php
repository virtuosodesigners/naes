<?php

class NotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $notes=Note::all();
        return View::make('notes')->with('notes',$notes);
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
		//
        $user   = Auth::user()->id;
        $loggeduser=User::where('id',$user)->first();
        $posted_by=$loggeduser->username;
        $note = new Note();
        $note->id=rand(1000,1000000);
        $note->note_date = Input::get('notedate');
        $note->note = Input::get('note');
        $note->posted_by = $posted_by;
        $note->candidate_id = Input::get('candidateid');

        $note->save();

        return Redirect::to('candidates/' . Input::get('candidateid'))->with('notification', 'Note Was Added Successfully');


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
