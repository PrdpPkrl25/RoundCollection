<?php

namespace App\Http\Controllers;

use App\Model\Quotation;
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create view
        return view();
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> quotationRepository -> handleCreate($request -> all());
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
