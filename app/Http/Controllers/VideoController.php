<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function store(Request $request)
	{
		//generate uid
		$uid = uniqid(true);
		//grab the user's channel
		$channel = $request->user()->channels()->first();

		$video = $channel->videos()->create([

			'uid' => $uid,
			'title' => $request->title,
			'description' => $request->description,
			'visability' => $request->visability,
			'video_filename' => "{$uid}.{$request->extension}"
		]);

		return response()->json([
			'data' => [
				'uid' => $uid,
			]
		]);
	}
}
