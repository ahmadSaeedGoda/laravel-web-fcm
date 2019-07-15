<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Repository Instance Variable
     *
     * @var Repository
     */
    protected $repository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param Int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $this->repository   = new Repository(new Employee());
        return ($this->repository->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }
}
