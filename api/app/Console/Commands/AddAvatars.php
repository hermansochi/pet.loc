<?php

namespace App\Console\Commands;

use App\Models\Org\OrgUser;
use Illuminate\Console\Command;
use Illuminate\Http\File;
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
    protected $description = 'Check avatars and make static avatars in storage.';

    /**
     * Execute the console command.
     *
     * @return int
     * @psalm-suppress UndefinedInterfaceMethod
     */
    public function handle(): int
    {
        $start = now();
        $this->newline();
        $this->line('  <bg=blue;fg=white> INFO </> Check and prepare avatars.');
        $this->newline();
        $mansFileNames = Storage::disk('avatars')->files('/mans');
        $womansFileNames = Storage::disk('avatars')->files('/womans');

        foreach ($mansFileNames as $key => $item) {
            if (! $this::ValidAvatar($item)) {
                unset($mansFileNames[$key]);
            }
        }

        foreach ($womansFileNames as $key => $item) {
            if (! $this::ValidAvatar($item)) {
                unset($womansFileNames[$key]);
            }
        }

        $orgUsers = OrgUser::select('id', 'gender')->get();
        $bar = $this->output->createProgressBar(count($orgUsers));
        $bar->start();
        Storage::disk('minio')->deleteDirectory('avatars');
        foreach ($orgUsers as $item) {
            if (mb_strtolower($item->gender) === 'm') {
                $randomAvatar = $mansFileNames[array_rand($mansFileNames)];
            } else {
                $randomAvatar = $womansFileNames[array_rand($womansFileNames)];
            }
            $bar->advance();

            /* @psalm-suppress UndefinedInterfaceMethod */
            $path = Storage::disk('minio')
                ->putFileAs('avatars', new File(resource_path().'/avatars/'.$randomAvatar), $item->id.'.jpg');
        }

        $bar->finish();
        $this->newline();
        $this->newline();
        $time = $start->diffInMilliSeconds(now());
        $this->line("  <bg=blue;fg=white> DONE </> <fg=gray>Processed in $time ms</>");
        $this->newline();

        return Command::SUCCESS;
    }

    /**
     * Returns false if the file name is longer than 25 characters, the file size is greater than 50 kb, or the file
     * type is not jpeg.
     *
     * @param  string  $fileName
     * @return bool
     * @psalm-suppress UndefinedInterfaceMethod
     */
    private function validAvatar($fileName): bool
    {
        $fileNameLen = Str::length($fileName);
        $fileSize = Storage::disk('avatars')->size($fileName);
        $fileType = Storage::disk('avatars')->mimeType($fileName);
        $out = '  '.$fileName.' Mime-Type: '.$fileType.' size: '.$fileSize;
        if ($fileNameLen > 25 or $fileSize > 51200 or $fileType !== 'image/jpeg') {
            $out .= ' <fg=gray>'.str_repeat('.', 130 - mb_strlen($out)).'</> <fg=red>ERROR</>';
            $this->line($out);

            return false;
        }

        return true;
    }
}
