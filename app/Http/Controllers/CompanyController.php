<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CompanyRequest;
use App\Company;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companydata = Company::latest()->paginate(5);
        return view('company.index', compact('companydata'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {   
        //Company::create($request->all());
        $companydata = $request->all();
        if ($request->hasFile('logo')) {
            $image = $companydata ['logo'];
            $image_name = $image->getClientOriginalName();
            $companydata ['logo'] = $request->file('logo')->storeAs('public', $image_name);
        }

        Company::create($companydata);

        return redirect()->route('companies.index')
                         ->with('success', 'new company data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companydata = Company::find($id);
        return view('company.detail', compact('companydata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companydata = Company::find($id);
        return view('company.edit', compact('companydata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
      $companydata = Company::find($id);
      $companydata->name = $request->get('name');
      $companydata->email = $request->get('email');
      $companydata->logo = $request->get('logo');
      $companydata->website = $request->get('website');
      $companydata->save();
      return redirect()->route('companies.index')
                       ->with('success', 'Company data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companydata = Company::find($id);
        $companydata->delete();
        return redirect()->route('companies.index')
                        ->with('success', 'Company data deleted successfully');
    }
}
