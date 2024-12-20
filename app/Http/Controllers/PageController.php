<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index_docs()
    {
        return view('docs');
    }

    public function index_conversation()
    {
        return view('conversation');
    }

    public function index_create()
    {
        return view('create');
    }
    public function index_subs()
    {
        return view('subs');
    }

    public function index_app()
    {
        return view('app');
    }

    public function index_add_backrooms()
    {
        return view('add-backrooms');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
