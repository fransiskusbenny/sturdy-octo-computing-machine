<?php


namespace Kongstone\Tmdb;

use Illuminate\Support\Facades\Http;

class PendingRequest
{
    protected string $baseUrl = 'https://api.themoviedb.org';
    protected string $version = '3';
    protected string $apiUrl = '/';

    public function trending(): PendingRequest
    {
        $this->apiUrl = 'trending/movie/week';

        return $this;
    }

    public function get($key = null, $default = null): array
    {
        $results = $this->send('GET', $this->apiUrl)->json('results');

        return data_get($results, $key, $default);
    }

    protected function send(string $method, string $url, array $options = []): \Illuminate\Http\Client\Response
    {
        $url = $this->version . '/' . $url;

        return Http::baseUrl($this->baseUrl)
            ->withOptions([
                'query' => [
                    'api_key' => config('tmdb.api_key')
                ]
            ])
            ->send($method, $url, $options)
            ->throw();
    }
}
