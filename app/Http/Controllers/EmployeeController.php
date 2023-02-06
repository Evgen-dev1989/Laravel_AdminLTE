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

    public function emp()
    {
        $Employee=DB::table('employees')->get();
        return view('dashboard', ['data'=>$Employee]);
    }


    public function index()
    {
        $Employee=DB::table('employees')->get();

        return view('dashboard', ['data'=>$Employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'employment_date' => 'required',
            'phone_nubmer' => 'required',
            'email' => 'required',
            'salary' =>'required',
            'value'=>'required|max:30|min:2|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
        ]);
        $employee = new Employee([
            'photo' => $request->get('photo'),
            'name' => $request->get('name'),
            'employment_date' => $request->get('employment_date'),
            'phone_nubmer' => $request->get('phone_nubmer'),
            'email' => $request->get('email'),
            'salary' => $request->get('salary')
        ]);
        $employee->save();
        return redirect('/dashboard')->with('success', 'Employee saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'employment_date' => 'required',
            'phone_nubmer' => 'required',
            'email' => 'required',
            'salary' =>'required',
            'value'=>'required|max:10|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
        ]);
        $employee  = Employee::find($id);

        $employee->photo = $request->get('photo');
        $employee->name =  $request->get('name');
        $employee->employment_date =  $request->get('employment_date');
        $employee->phone_nubmer =  $request->get('phone_nubmer');
        $employee->email =  $request->get('email');
        $employee->salary =  $request->get('salary');
         $employee->save();

        return redirect('/dashboard')->with('success', 'Employee  updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employees
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/dashboard')->with('success', 'Employee removed.');
    }
}
