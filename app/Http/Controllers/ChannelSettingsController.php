<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelSettingsController extends Controller
{
    public function edit(Channel $channel){
		dd($channel);
	}
}
