<?php

namespace CittaDashboard\Http\Controllers\Admin;

use Illuminate\Http\Request;
use CittaDashboard\Http\Controllers\Controller;
use CittaDashboard\Contact;
use CittaDashboard\Item;
use CittaDashboard\Payment;
use CittaDashboard\Invoice;
use CittaDashboard\Opportunity;
use CittaDashboard\Team;
use DB;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teams.index')->with('teams', Team::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create')
        ->with('contactCount', Contact::count())
        ->with('itemCount', Item::count())
        ->with('invoiceCount', Invoice::count())
        ->with('unpaid_invoiceCount', Invoice::where('status', 'sent')->count())
        ->with('paid_invoiceCount', Invoice::where('status', 'paid')->count())
        ->with('opportunityCount', Opportunity::count())
        ->with('lost_opportunityCount', Opportunity::where('status', 'lost')->count())
        ->with('won_opportunityCount', Opportunity::where('status', 'won')->count())
        ->with('new_opportunityCount', Opportunity::where('status', 'new')->count())
        ->with('undeposited_fundsCount', Payment::where('status', 'undeposited')->count())
        ->with('deposited_fundsCount', Payment::where('status', 'deposited')->count());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Team $team)
    {
        $team->all_contacts = $request->Contact::count();
        $team->all_items = $request->Item::count();
        $team->all_invoices = $request->Invoice::count();
        $team->all_opportunities = $request->Opportunity::count();
        $team->unpaid_invoices = $request->Invoice::where('status', 'sent')->count();
        $team->paid_invoices = $request->Invoice::where('status', 'paid')->count();
        $team->lost_opportunities = $request->Opportunity::where('status', 'lost')->count();
        $team->won_opportunities = $request->Opportunity::where('status', 'won')->count();
        $team->new_opportunities = $request->Opportunity::where('status', 'new')->count();
        $team->undeposited_funds = $request->Payment::where('status', 'undeposited')->count();
        $team->deposited_funds = $request->Payment::where('status', 'deposited')->count();
        $team->save();
        return redirect()->route('admin.teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $arr['team'] = $team;
        return view('admin.teams.edit', $arr)
        ->with('contactCount', Contact::count())
        ->with('itemCount', Item::count())
        ->with('invoiceCount', Invoice::count())
        ->with('unpaid_invoiceCount', Invoice::where('status', 'sent')->count())
        ->with('paid_invoiceCount', Invoice::where('status', 'paid')->count())
        ->with('opportunityCount', Opportunity::count())
        ->with('lost_opportunityCount', Opportunity::where('status', 'lost')->count())
        ->with('won_opportunityCount', Opportunity::where('status', 'won')->count())
        ->with('new_opportunityCount', Opportunity::where('status', 'new')->count())
        ->with('undeposited_fundsCount', Payment::where('status', 'undeposited')->count())
        ->with('deposited_fundsCount', Payment::where('status', 'deposited')->count());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->all_contacts = $request->Contact::count();
        $team->all_items = $request->Item::count();
        $team->all_invoices = $request->Invoice::count();
        $team->all_opportunities = $request->Opportunity::count();
        $team->unpaid_invoices = $request->Invoice::where('status', 'sent')->count();
        $team->paid_invoices = $request->Invoice::where('status', 'paid')->count();
        $team->lost_opportunities = $request->Opportunity::where('status', 'lost')->count();
        $team->won_opportunities = $request->Opportunity::where('status', 'won')->count();
        $team->new_opportunities = $request->Opportunity::where('status', 'new')->count();
        $team->undeposited_funds = $request->Payment::where('status', 'undeposited')->count();
        $team->deposited_funds = $request->Payment::where('status', 'deposited')->count();
        $team->save();
        return redirect()->route('admin.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::destroy($id);
        return redirect()->route('admin.teams.index');
    }
}
