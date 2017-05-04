<?php namespace App\Http\Controllers;

use App\Models\DbBase;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class DbBaseController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dbpizzabottoms
	 *
	 * @return Response
	 */
	public function index()
	{
	    return DbBase::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dbpizzabottoms/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('create.base');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dbpizzabottoms
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();

        $record = DbBase::create([
            'id' => Uuid::uuid4(),
            'calories' => $data['calories'],
            'name' => $data['name']
        ]);


        return view('create.base', $record->toArray());
	}

	/**
	 * Display the specified resource.
	 * GET /dbpizzabottoms/{id}
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
	 * GET /dbpizzabottoms/{id}/edit
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
	 * PUT /dbpizzabottoms/{id}
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
	 * DELETE /dbpizzabottoms/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}