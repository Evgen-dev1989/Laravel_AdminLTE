<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
   // public function __invoke(){$Employee=DB::table('employees');return view('dashboard',['data'=>$Employee]);}

    public function emp(){$Employee=DB::table('employees');return view('dashboard', ['data'=>$Employee]);}


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employees)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employees)
    {
        //
    }
}
