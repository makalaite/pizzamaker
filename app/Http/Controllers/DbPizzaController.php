<?php namespace App\Http\Controllers;

use App\Http\DbPizzaConnections;
use App\Models\DbBase;
use App\Models\DbCheeses;
use App\Models\DbIngredients;
use App\Models\DbPizza;
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
        $configuration = [];
        $configuration['cheese'] = DbCheeses::pluck('name', 'id')->toArray();
        $configuration['base'] = DbBase::pluck('name', 'id')->toArray();
        $configuration['ingredient'] = DbIngredients::pluck('name', 'id')->toArray();

        return view('create.pizza', $configuration);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /dbpizzaconnections
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = request()->all();
        //$data('name')= $data('city') jei neatitinka reiksmes su duomabazes

        $record = DbPizza::create([
            'id' => Uuid::uuid4(),
            'cheese_id' => $data['cheese_id'],
            'base_id' => $data['base_id'],
            'comment' => $data['comment'],
            'client_name' => $data['client_name']
        ]);


        $record->ingredientsInsert()->sync($data['ingredients']);
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