<?php namespace App\Http\Controllers;

use App\Models\PZCheese;
use App\Models\PZIngredients;
use App\Models\PZPizzaPad;
use Illuminate\Routing\Controller;

class PZPizzaPadController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pzpizzapad
	 *
	 * @return Response
	 */
	public function index()
	{
        $data['pizzapad'] = PZPizzaPad::pluck('pizza_pad_name','id')->toArray();
        $data['pizzacheese'] = PZCheese::pluck('cheese_name','id')->toArray();
        $data['ingredients'] = PZIngredients::pluck('ingredients_names', 'id')->toArray();

        return view('createpizza', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pzpizzapad/create
	 *
	 * @return Response
	 */
	public function create()
	{
	    $data = request()->all();
	    $record = PZPizzaPad::create(array(
	       'pizza_pad_name' => $data['pizza_pad_name'],
        ));


        $record['pizzacheese'] = PZCheese::pluck('name', 'id')->toArray();
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pzpizzapad
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pzpizzapad/{id}
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
	 * GET /pzpizzapad/{id}/edit
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
	 * PUT /pzpizzapad/{id}
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
	 * DELETE /pzpizzapad/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}