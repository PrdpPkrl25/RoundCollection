<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuotationRequest;
use App\Model\Game;
use App\Model\Quotation;
use App\Model\Round;
use App\Repository\QuotationRepository;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    /**
     * @var QuotationRepository
     */
    private $quotationRepository;

    /**
     * QuotationController constructor.
     * @param QuotationRepository $quotationRepository
     */
    public function __construct(QuotationRepository $quotationRepository)
    {
        $this -> quotationRepository = $quotationRepository;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param Round $round
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Round $round)
    {
        return view('games.quotation.fill_quotation',compact('round'));
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreQuotationRequest $request
     * @param Round $round
     * @return void
     */
    public function store(StoreQuotationRequest $request,Round $round)
    {
        $this -> quotationRepository -> handleCreate($request -> all(),$round);
    }

    /**
     * Display the specified resource.
     * @param  Quotation $quotation
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  Quotation $quotation
     * @return \Illuminate\Http\Response
     */
    public function edit(Quotation $quotation)
    {
        //edit view
        return view();
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  Quotation $quotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quotation $quotation)
    {
        $this -> quotationRepository -> handleCreate($request -> all());
    }

    /**
     * Remove the specified resource from storage.
     * @param  Quotation $quotation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quotation $quotation)
    {
        //
    }
}
