<?php namespace App\Http\Controllers;

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
        return PZPizzaPad::all();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pzpizzapad/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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