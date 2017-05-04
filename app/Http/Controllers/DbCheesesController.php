<?php namespace App\Http\Controllers;

use App\Models\DbCheeses;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class DbCheesesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dbcheeses
	 *
	 * @return Response
	 */
	public function index()
	{
        return DbCheeses::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dbcheeses/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('create.cheese');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dbcheeses
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();

        $record = DbCheeses::create($data);

        return view('create.cheese', $record->toArray());
	}

	/**
	 * Display the specified resource.
	 * GET /dbcheeses/{id}
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
	 * GET /dbcheeses/{id}/edit
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
	 * PUT /dbcheeses/{id}
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
	 * DELETE /dbcheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}