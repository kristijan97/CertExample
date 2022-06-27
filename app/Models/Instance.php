<?php
namespace App\Models;

use App;

use Config;
use DB;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    const STATUS_ACTIVE = 'ACTIVE';

    public function setup()
    {
        echo "setup method - change tenant context | ";
        Config::set('database.connections.mysql.database', $this->database);
        DB::reconnect('mysql');

        $host = "https://{$this->subdomain}.".env('ROOT_DOMAIN');

        Config::set('app.url', $host);

        App::make('url')->forceRootUrl($host);
    }

    public function scopeActive($query)
    {
        return $query->whereStatus(self::STATUS_ACTIVE);
    }

    public static function inAllActiveSpaces($callback)
    {
        echo "inAllActiveSpaces method | ";
        Instance::active()->each(function ($instance) use ($callback) {
            $instance->setup();

            try {
                $callback($instance);
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
        });
    }
}
