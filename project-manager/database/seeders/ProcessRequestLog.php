<?php

namespace Database\Seeders;

use App\Models\RequestLog;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tests\CreatesApplication;

class ProcessRequestLog
{
    use MakesHttpRequests;
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
                  ->where("replayable", true)
                  ->chunk(200,
                      function ($models) {
                          foreach ($models as $model) {
                              $this->withoutMiddleware("log");
                              $this->json($model->method, "/" . $model->path, $model->body);
                              $model->done = true;
                              $model->save();
                          }
                      });
    }
}
