<?php

namespace App\Policies;

use App\Models\Channel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChannelPolicy
{
    use HandlesAuthorization;

	/**
	 * Policy edit Channel instance, users id belongs channel user id
	 *
	 * @param User $user
	 * @param Channel $channel
	 * @return bool
	 */
    public function edit(User $user,Channel $channel)
    {
        return $user->id === $channel->user_id;
    }

	/**
	 * Policy update Channel instance, users id belongs channel user id
	 *
	 * @param User $user
	 * @param Channel $channel
	 * @return bool
	 */
	public function update(User $user,Channel $channel)
	{
		return $user->id === $channel->user_id;
	}
}
