<?php

class RolesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $roles = Role::with('Users')->get();
        $memberList = User::dropdown();
		return View::make('roles.index')->with('roles', $roles)->with('memberList', $memberList);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        if (Request::ajax()) {
            $role = Role::create(['name'=>Request::input('role.name')]);
            return Response::make(["role"=>$role]);
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        if (Request::ajax()) {
            return Response::make(["role"=>Role::with('Users')->find($id)]);
        }
        return View::make('roles.index');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $role = Role::find($id);
        if (Request::ajax()) {

            $role->name = Request::input('role.name');
            $role->save();

            return Response::make(["role"=>$role]);
        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $role = Role::find($id);
        if ($role->users->count() > 0) {
            return Response::make(["errors"=>['Role in use']], 422);
        }
        $role->delete();
	}


}
