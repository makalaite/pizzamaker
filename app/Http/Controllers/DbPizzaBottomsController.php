<?php namespace App\Http\Controllers;

use App\Models\DbPizzaBottoms;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class DbPizzaBottomsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dbpizzabottoms
	 *
	 * @return Response
	 */
	public function index()
	{
	    return view('base');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dbpizzabottoms/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();
        //$data('name')= $data('city') jei neatitinka reiksmes su duomabazes

        $record = DbPizzaBottoms::create([
            'id' => Uuid::uuid4(),
            'name' => $data['name'],
        ]);


        return view('base', $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dbpizzabottoms
	 *
	 * @return Response
	 */
	public function store()
	{
        //return view('app.cities.create');
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