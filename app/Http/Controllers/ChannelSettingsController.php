<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use App\Http\Requests\ChannelUpdateRequest;

class ChannelSettingsController extends Controller
{
	/**Display edit form
	 *
	 * @param Channel $channel
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 * @throws \Illuminate\Auth\Access\AuthorizationException
	 */
	public function edit(Channel $channel){

		$this->authorize('edit',$channel);
    	return view('channel.settings.edit',compact('channel'));

	}

	/**Update channel
	 *
	 * @param ChannelUpdateRequest $request
	 * @param Channel $channel
	 * @throws \Illuminate\Auth\Access\AuthorizationException
	 */
	public function update(ChannelUpdateRequest $request, Channel $channel){
		$this->authorize('update',$channel);
	}
}
