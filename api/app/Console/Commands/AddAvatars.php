<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AddAvatars extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'avatar:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check avatars and add to DB.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->newline();
        $this->line('  <bg=blue;fg=white> INFO </> Check and prepare avatars.');
        $this->newline();
        $mansFileNames = Storage::disk('avatars')->files('/mans');
        $womansFileNames = Storage::disk('avatars')->files('/womans');

        foreach ($mansFileNames as $key => $item) {
            if (!$this::ValidAvatar($item)) {
                unset($mansFileNames[$key]);
            }
        }

        Storage::disk('avatars')->put('mans.name', serialize($mansFileNames));

        foreach ($womansFileNames as $key => $item) {
            if (!$this::ValidAvatar($item)) {
                unset($womansFileNames[$key]);
            }
        }

        Storage::disk('avatars')->put('womans.name', serialize($womansFileNames));

        return Command::SUCCESS;
    }

    /**
     * Returns false if the file name is longer than 25 characters, the file size is greater than 50 kb, or the file 
     * type is not jpeg.
     *
     * @var string
     * @return boolean
     */
    private function validAvatar($fileName): bool
    {
        $fileNameLen = Str::length($fileName);
        $fileSize = Storage::disk('avatars')->size($fileName);
        $fileType = Storage::disk('avatars')->mimeType($fileName);

        $out = '  File: ' . $fileName . ' Mime-Type: ' . $fileType . ' File size: ' . $fileSize;

        if ($fileNameLen > 25 or $fileSize > 51200 or $fileType !== 'image/jpeg') {
            $out .= ' ' . str_repeat('.', 130 - mb_strlen($out)) . ' <fg=green>ERROR</>';
            $this->error($out);
            return false;
        } else {
            $out .= ' ' . str_repeat('.', 131 - mb_strlen($out)) . ' <fg=green>DONE</>';
            $this->line($out);
            return true;
        }
    }

}
