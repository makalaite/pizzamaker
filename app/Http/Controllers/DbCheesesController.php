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
		return view('cheese');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dbcheeses/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();
        //$data('name')= $data('city') jei neatitinka reiksmes su duomabazes

        $record = DbCheeses::create([
            'id' => Uuid::uuid4(),
            'name' => $data['name'],

        ]);


        return view('cheese', $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dbcheeses
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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