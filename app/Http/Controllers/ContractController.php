<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContractPostRequest;
use App\Models\Contract;
use App\Models\ContractType;
use App\Models\Employee;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('contracts.index', [
            'contracts' => Contract::with('employee')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Employee $employee): View
    {
        return view('contracts.create', [
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
        return redirect(route('contracts.index'))->with('status', 'Umowa Dodana!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contract $contract): View
    {
        return view('contracts.show', [
            'contract' => $contract
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract): View
    {
        return view('contracts.edit', [
            'contract' => $contract,
            'contract_types' => ContractType::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContractPostRequest $request, Contract $contract)
    {
        $contract->update($request->validated());
        return redirect(route('contracts.show',$contract->id))->with('status', 'Umowa edytowana!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
            $contract->delete();
            return redirect(route('contracts.index'))->with('status','Umowa Usunięta!');

    }
}
