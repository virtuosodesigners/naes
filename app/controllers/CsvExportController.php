<?php

class CsvExportController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /csvexport
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        Excel::create('paymentdata',function($excel){
            $excel->sheet('Sheet1',function($sheet){
                $data=[];
                array_push($data,array('Michel','Julien'));
                $sheet->fromArray($data,null);

            });

        })->download('csv');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /csvexport/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /csvexport
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /csvexport/{id}
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
	 * GET /csvexport/{id}/edit
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
	 * PUT /csvexport/{id}
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
	 * DELETE /csvexport/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}