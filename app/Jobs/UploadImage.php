<?php

namespace App\Jobs;

use App\Models\Channel;
use Illuminate\Support\Facades\File;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Storage;

class UploadImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $channel;

    public $fileId;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Channel $channel, $fileId)
    {
        $this->channel = $channel;
        $this->fileId = $fileId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
    	$path = storage_path() . '/uploads/' . $this->fileId;
    	$fileName = $this->fileId . '.png';

    	Storage::disk('s3images')->put('profile/'.$fileName, fopen($path, 'r+'));
		{
    		File::delete($path);
		}

		$this->channel->image_filename = $fileName;
		$this->channel->save();
        // get the image
		// resize
		// upload s3
		// delete file
		// update channel image
    }
}
