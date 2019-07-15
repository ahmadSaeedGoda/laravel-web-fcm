<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Employee;
use App\Models\Notification;
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
        //
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
        $this->repository   = new Repository(new Employee());
        $employee = $this->repository->fillAndSave([
            'first_name'=>'Mickey',
            'last_name'=>'Mouse',
            'email'=>'mickey@mouse.com',
            'phone'=>'+201111111',
            'salary'=>'15.430'
            ]);
        
        return response()->json([
            'message'=>'Saved!',
            'employee'=>$employee
        ]);
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
        $this->repository   = new Repository(new Employee());
        $this->repository->update($id, [
            'first_name'=>'Mickey',
            'last_name'=>'Mouse',
            'email'=>'mickey@mouse.com',
            'phone'=>'+201111111',
            'salary'=>$request->salary
            ]);
        
        $notification = new Notification;
        $token = 'dDlCBfSRfXs:APA91bHqSskSpFaYH7djVUkdzDGqC4el5vsGvEiLiP-1MRhk9MLWpJbRMa7J9ZxvY0nhvD3UYNPpA5chefKyVsZA-7vZru1FoFgbGFEjDOORsfsQOP99X1ykQ5yiIEbZXn3BMlX3HdLf';
        $notification->toSingleDevice($token, 'Employee Salary Updated!', 'Employee Salary Now ='.$request->salary);

        return response()->json([
            'first_name'=>'Mickey',
            'last_name'=>'Mouse',
            'salary'=>$request->salary
        ]);
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
