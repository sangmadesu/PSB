<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Broadcast;

class BroadcastController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function postBroadcast(Request $request)
	{
		$broadcast = new Broadcast();

		$broadcast->title = $request->title;
		$broadcast->message = $request->message;
		$broadcast->save();

		return redirect('/admin');
	}

	public function show()
	{
		$broadcasts = Broadcast::all();
		// dd($broadcast);
		return view('admin.broadcast', compact('broadcasts'));
	}

	public function edit($id)
	{
		$broadcast = Broadcast::whereId($id)->firstOrFail();
		// dd($broadcast);
		return view('admin.broadcast-edit', compact('broadcast'));
	}

	public function update($id, Request $request)
	{
		$broadcast = Broadcast::whereId($id)->firstOrFail();
		$broadcast->title = $request->title;
		$broadcast->message = $request->message;
		$broadcast->save();

		return redirect(action('BroadcastController@edit', $broadcast->id))->with('status', 'The broadcast '.$broadcast->title.', has been updated!');

	}

	public function destroy($id)
	{
		$broadcast = Broadcast::whereId($id)->firstOrFail();
		$broadcast->delete();

		return redirect('/broadcast')->with('status', 'The broadcast '.$broadcast->title.' has been deleted!');
	}

}
