<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContractPostRequest;
use App\Models\Contract;
use App\Models\ContractType;
use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('contracts.index',[
                    'contracts' => Contract::paginate(10)
                ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $employee_id): View
    {
        $employee=Employee::find($employee_id);
        return view('contracts.create',[
                'employee' => $employee,
                'contract_types' => ContractType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContractPostRequest $request): RedirectResponse
    {

        $contract = new Contract($request->validated());
        $contract->save();
        return redirect(route('contracts.index'))->with('status','Umowa Dodana!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract): View
    {
        return view('contracts.show',[
            'contract' => $contract
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract): View
    {
        return view('contracts.edit',[
            'contract' => $contract
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContractPostRequest $request, Contract $contract)
    {
        // TO DO ANEKS DO UMOWY NOWA UMOWA PLUS USNIECIE POPRZEDNIEJ
        $contract->fill($request->validated());
        $contract->save();
        return redirect(route('contracts.index'))->with('status','Umowa edytowana!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (Contract::where('id',$id)->exists()) {
            $contract = Contract::find($id);
            $contract->delete();
            return redirect(route('contracts.index'))->with('status','Umowa Usunięta!');
        }
        else{
            return redirect(route('contracts.index'))->with('status','Umowa nieznaleziona!');
        }
    }
}
