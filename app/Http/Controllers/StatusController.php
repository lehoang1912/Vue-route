<?php

namespace App\Http\Controllers;

use App\Status;
use App\User;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Status::with('user')->latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['body' => 'required']);

        try {
            $status = User::first()
                ->statuses()
                ->create($request->only(['body']));

            return $status->load('user');
        } catch (\Exception $ex) {
            return response()->json([
                'message' => 'Server error!',
                'errors' => ''
            ], 500);
        }
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Status  $status
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Status $status)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Status  $status
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Status $status)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Status  $status
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Status $status)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Status  $status
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Status $status)
    // {
    //     //
    // }
}
