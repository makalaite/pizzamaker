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
        $config = [];
        $config['list'] = DbPizza::with(['ingredients', 'cheese', 'base'])->get()->toArray();

        foreach($config['list'] as &$pizza)
        {
            $pizza['calories'] = 0;
            $pizza['calories'] += $pizza['cheese']['calories'];
            $pizza['calories'] += $pizza['base']['calories'];

            foreach ($pizza['ingredients'] as $ingredient)
            {
                $pizza['calories'] += $ingredient['ingredients_data']['calories'];
            }
        }

        return view('allOrders', $config);
	}

	private function getFormData()
    {

        $configuration = [];
        $configuration['cheese'] = DbCheeses::pluck('name', 'id')->toArray();
        $configuration['cheeseCalories'] = DbCheeses::pluck('calories', 'id')->toArray();

        $configuration['base'] = DbBase::pluck('name', 'id')->toArray();
        $configuration['baseCalories'] = DbBase::pluck('calories', 'id')->toArray();

        $configuration['ingredient'] = DbIngredients::pluck('name', 'id')->toArray();
        $configuration['ingredientCalories'] = DbIngredients::pluck('calories', 'id')->toArray();


        return $configuration;
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /dbpizzaconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $configuration = $this->getFormData();

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

        $configuration = $this->getFormData();

        if (!isset($data['client_name']))
        {
            $configuration['error'] = ['message' => 'No client name'];

            return view('create.pizza', $configuration);
        }


        $record = DbPizza::create([
            'cheese_id' => $data['cheese_id'][0],
            'base_id' => $data['base_id'][0],
            'comment' => $data['comment'],
            'client_name' => $data['client_name']
        ]);


        $record->orderIngredientConnection()->sync($data['ingredients']);
        return view('create.pizza', $configuration);
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
        return DbPizza::with('cheese', 'base', 'ingredients')->find($id);
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
        $configuration = $this->getFormData();
        $configuration['record'] = DbPizza::with('cheese', 'base', 'ingredients')->find($id)->toArray();

        return view('editOrder', $configuration);
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