<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    //

    public function index()
    {
    	# code...
    	return response()->json(Poll::get(),200);
    }

    public function show(Poll $poll)
    {
    	# code...
    	return response()->json($poll,200);
    }

    public function store(Request $request)
    {
    	# code...
    	$poll = Poll::create($request->all());

    	return response()->json($poll,201);
    }

    public function update(Request $request,Poll $poll)
    {
    	# code...
    	$poll->update($request->all());

    	return response()->json($poll,200);
    }

    public function delete(Poll $poll)
    {
    	# code...
    	$poll->delete();

    	return response()->json('null',204);
    }
}
