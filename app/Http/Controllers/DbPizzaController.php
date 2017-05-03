<?php namespace App\Http\Controllers;

use App\Http\DbPizzaConnections;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class DbPizzaController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dbpizzaconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pizza');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dbpizzaconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dbpizzaconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /dbpizzaconnections/{id}
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
	 * GET /dbpizzaconnections/{id}/edit
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
	 * PUT /dbpizzaconnections/{id}
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
	 * DELETE /dbpizzaconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}