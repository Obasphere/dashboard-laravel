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
        $contactCount = Contact::count();
        $itemCount = Item::count();
        $invoiceCount = Invoice::count();
        $unpaid_invoiceCount = Invoice::where('status', 'sent')->count();
        $paid_invoiceCount = Invoice::where('status', 'paid')->count();
        $opportunityCount = Opportunity::count();
        $lost_opportunityCount = Opportunity::where('status', 'lost')->count();
        $won_opportunityCount = Opportunity::where('status', 'won')->count();
        $new_opportunityCount = Opportunity::where('status', 'new')->count();
        $undeposited_fundsCount = Payment::where('status', 'undeposited')->count();
        $deposited_fundsCount = Payment::where('status', 'deposited')->count();

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
        $team->all_contacts = $request->all_contacts;
        $team->all_items = $request->all_items;
        $team->all_invoices = $request->all_invoices;
        $team->all_opportunities = $request->all_opportunities;
        $team->unpaid_invoices = $request->unpaid_invoices;
        $team->paid_invoices = $request->paid_invoices;
        $team->lost_opportunities = $request->lost_opportunities;
        $team->won_opportunities = $request->won_opportunities;
        $team->new_opportunities = $request->new_opportunities;
        $team->undeposited_funds = $request->undeposited_funds;
        $team->deposited_funds = $request->deposited_funds;
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

        $contactCount = Contact::count();
        $itemCount = Item::count();
        $invoiceCount = Invoice::count();
        $unpaid_invoiceCount = Invoice::where('status', 'sent')->count();
        $paid_invoiceCount = Invoice::where('status', 'paid')->count();
        $opportunityCount = Opportunity::count();
        $lost_opportunityCount = Opportunity::where('status', 'lost')->count();
        $won_opportunityCount = Opportunity::where('status', 'won')->count();
        $new_opportunityCount = Opportunity::where('status', 'new')->count();
        $undeposited_fundsCount = Payment::where('status', 'undeposited')->count();
        $deposited_fundsCount = Payment::where('status', 'deposited')->count();

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
        $team->all_contacts = $request->all_contacts;
        $team->all_items = $request->all_items;
        $team->all_invoices = $request->all_invoices;
        $team->all_opportunities = $request->all_opportunities;
        $team->unpaid_invoices = $request->unpaid_invoices;
        $team->paid_invoices = $request->paid_invoices;
        $team->lost_opportunities = $request->lost_opportunities;
        $team->won_opportunities = $request->won_opportunities;
        $team->new_opportunities = $request->new_opportunities;
        $team->undeposited_funds = $request->undeposited_funds;
        $team->deposited_funds = $request->deposited_funds;
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
