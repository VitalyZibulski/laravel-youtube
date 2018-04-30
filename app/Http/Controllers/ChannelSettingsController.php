<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use App\Http\Requests\ChannelUpdateRequest;

class ChannelSettingsController extends Controller
{
    public function edit(Channel $channel){

    	return view('channel.settings.edit',compact('channel'));

	}

	public function update(ChannelUpdateRequest $request, Channel $channel){
		dd('update');
	}
}
