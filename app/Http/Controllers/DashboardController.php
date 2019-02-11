<?php

namespace CittaDashboard\Http\Controllers;

use Illuminate\Http\Request;
use CittaDashboard\Team;

class DashboardController extends Controller
{
    public function index()
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

        return view('admin.dashboard')
        ->with('contactCount', $contactCount)
        ->with('itemCount', $itemCount)
        ->with('invoiceCount', $invoiceCount)
        ->with('unpaid_invoiceCount', $unpaid_invoiceCount)
        ->with('paid_invoiceCount', $paid_invoiceCount)
        ->with('opportunityCount', $opportunityCount)
        ->with('lost_opportunityCount', $lost_opportunityCount)
        ->with('won_opportunityCount', $won_opportunityCount)
        ->with('new_opportunityCount', $new_opportunityCount)
        ->with('undeposited_fundsCount', $undeposited_fundsCount)
        ->with('deposited_fundsCount', $deposited_fundsCount);
    }
}
