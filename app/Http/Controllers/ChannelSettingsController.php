<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelSettingsController extends Controller
{
    public function edit(Channel $channel){

    	return view('channel.settings.edit',compact('channel'));

	}

	public function update(Channel $channel){
		dd($channel);
	}
}
