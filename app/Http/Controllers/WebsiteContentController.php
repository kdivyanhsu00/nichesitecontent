<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autoseo()
    {
        return view('website.websitecontent.autoseo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creativeportfolio()
    {
        return view('website.websitecontent.creativeportfolio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function creativeproduct()
    {
        return view('website.websitecontent.creativeproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function creativeservice()
    {
        return view('website.websitecontent.creativeservice');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function digiirobe()
    {
        return view('website.websitecontent.digiirobe');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pricingpage()
    {
        return view('website.websitecontent.pricingpage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vaperminute()
    {
        return view('website.websitecontent.vaperminute');
    }
}
