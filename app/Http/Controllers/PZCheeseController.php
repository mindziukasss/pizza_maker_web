<?php namespace App\Http\Controllers;

use App\Models\PZCheese;
use Illuminate\Routing\Controller;

class PZCheeseController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /pzcheese
	 *
	 * @return Response
	 */
	public function index()
	{
        return PZCheese::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pzcheese/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pzcheese
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pzcheese/{id}
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
	 * GET /pzcheese/{id}/edit
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
	 * PUT /pzcheese/{id}
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
	 * DELETE /pzcheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}