<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class EmailApiService
{
    public string $url;
    public string $apiKey;
    public string $apiSecret;


    public function __construct()
    {
        $this->url  = config('notify.url');
        $this->apiKey = config('notify.apiKey');
        $this->apiSecret = config('notify.apiSecret');
    }

    public function send(array $data): bool
    {
        $this->url.="?API_KEY=".$this->apiKey;

        $response = Http::withHeaders([
            'X-API-SECRET' => $this->apiSecret,
            'Accept' => 'application/json',
        ])->post($this->url, $data);
        return $response->successful();
    }
}
