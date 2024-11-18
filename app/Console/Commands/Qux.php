<?php

namespace App\Console\Commands;

use App\Models\Bar;
use App\Models\Baz;
use App\Models\Foo;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Builder;

class Qux extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:qux';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $bQuery =
            Bar::select('b')
                ->whereColumn('foo_id', 'foos.id')
                ->union(
                    Baz::select('b')
                        ->whereColumn('foo_id', 'foos.id')
                )
                ->orderBy('b')
                ->limit(1);

        $query = Foo::select([
            '*',
            'b' => $bQuery,
        ]);

        dump($query->toSql());

        dump($query->get());
    }
}
