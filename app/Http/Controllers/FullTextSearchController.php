<?php

namespace App\Http\Controllers;

use App\FullTextSearch;
use Illuminate\Http\Request;

class FullTextSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('full-text-search')->withData(FullTextSearch::paginate(20));
    }

    public function searchFullText(){
        $data = FullTextSearch::search(\request()->keyword)->paginate(20);
        return view('full-text-search')->withData($data);
    }

    public function searchNormal(){
        $keyword = \request()->keyword;
        $data = FullTextSearch::where('customer_name', 'like', "%$keyword%")
            ->orWhere('gender', 'like', "%$keyword%")
            ->orWhere('address', 'like', "%$keyword%")
            ->orWhere('city', 'like', "%$keyword%")
            ->orWhere('postal_code', 'like', "%$keyword%")
            ->orWhere('country', 'like', "%$keyword%")
            ->paginate(20);
        return view('full-text-search')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FullTextSearch  $fullTextSearch
     * @return \Illuminate\Http\Response
     */
    public function show(FullTextSearch $fullTextSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FullTextSearch  $fullTextSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(FullTextSearch $fullTextSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FullTextSearch  $fullTextSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FullTextSearch $fullTextSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FullTextSearch  $fullTextSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(FullTextSearch $fullTextSearch)
    {
        //
    }
}
