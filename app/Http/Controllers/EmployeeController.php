<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeedata = Employee::latest()->paginate(5);
        return view('employee.index', compact('employeedata'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        /*$request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'company_id' => 'required'
        ]);*/

        Employee::create($request->all());
        return redirect()->route('employees.index')
                        ->with('success', 'New Employee data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employeedata = Employee::find($id);
        return view('Employee.detail', compact('employeedata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeedata = Employee::find($id);
        return view('Employee.edit', compact('employeedata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeRequest $request, $id)
    {

      $employeedata = Employee::find($id);
      $employeedata->first_name = $request->get('first_name');
      $employeedata->last_name = $request->get('last_name');
      $employeedata->company_id = $request->get('company_id');
      $employeedata->email = $request->get('email');
      $employeedata->phone = $request->get('phone');
      $employeedata->save();
      return redirect()->route('employees.index')
                      ->with('success', 'Employee data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeedata = Employee::find($id);
        $employeedata->delete();
        return redirect()->route('employees.index')
                        ->with('success', 'Employee data deleted successfully');
    }
}
