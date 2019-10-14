<?php
/**
 * Created by PhpStorm.
 * User: Massimo
 * Date: 2019-10-14
 * Time: 5:24 PM
 */

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;

class UserProvider extends EloquentUserProvider
{
    private $email_model = 'member';

    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials) ||
            (count($credentials) === 1 &&
                array_key_exists('password', $credentials))) {
            return;
        }

        $query = $this->newModelQuery();

        foreach ($credentials as $key => $value) {
            if (Str::contains($key, 'password')) {
                continue;
            }

            if (is_array($value) || $value instanceof Arrayable) {
                $query->with([$this->email_model => function ($q) use ($key, $value) {
                    $q->whereIn($key, $value);
                }]);
            } else {
                $query->with([$this->email_model => function ($q) use ($key, $value) {
                    $q->where($key, $value);
                }]);
            }
        }

        return $query->first();
    }
}
