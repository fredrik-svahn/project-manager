<?php

namespace Database\Seeders;

use App\Models\RequestLog;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Tests\CreatesApplication;

class ProcessRequestLog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        RequestLog::query()
                  ->where("done", false)
                  ->chunk(200,
                      function ($models) {
                          foreach ($models as $model) {
                              $r = app()->handle(Request::create("/" . $model->path . "?_replay", $model->method, $model->body));
                              $model->done = true;
                              $model->save();
                          }
                      });
    }
}
