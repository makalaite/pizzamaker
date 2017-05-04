<?php namespace App\Http\Controllers;

use App\Models\DbIngredients;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class DbIngredientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /dbpizzaingredients
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('ingredients');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /dbpizzaingredients/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('create.ingredients');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dbpizzaingredients
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();

        $record = DbIngredients::create($data);

        return view('create.ingredients', $record->toArray());
	}

	/**
	 * Display the specified resource.
	 * GET /dbpizzaingredients/{id}
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
	 * GET /dbpizzaingredients/{id}/edit
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
	 * PUT /dbpizzaingredients/{id}
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
	 * DELETE /dbpizzaingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}