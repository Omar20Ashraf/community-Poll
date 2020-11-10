<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PollResource;
use App\Models\Poll;
use Illuminate\Http\Request;
use Validator;
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

    	$response = new PollResource($poll);

    	return response()->json($response,200);
    }

    public function store(Request $request)
    {
    	# code...

    	$rules = ['title' => 'required|string|max:10'];

    	$validator = Validator::make($request->all(),$rules);

    	if($validator->fails()){
    		return response()->json($validator->errors(),400);
    	}

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

    public function errors()
    {
    	# code...
    	return response()->json(['message' => 'required'],501);
    }
}
