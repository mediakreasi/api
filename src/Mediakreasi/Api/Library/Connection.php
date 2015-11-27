<?php

namespace Mediakreasi\Api\Library;

use \Config;
use GuzzleHttp\Client;
use Exception;

class Connection {
    public static function post($url, $data)
    {
        $result = [];
        $client = new Client();

        try {
            $response = $client->post(
                            $url,
                            [
                                'body' => json_encode($data)
                            ]
                        );

            $result = $response->getBody();

            if ($result->isReadable()){
                return $result->__toString();
            }
            else
            {
                return null;
            }
        }
        catch (\GuzzleHttp\Exception\ClientErrorResponseException $e)
        {
            //$resp              = $e->getResponse();
            return null;
        }
        catch (\GuzzleHttp\Exception\ServerErrorResponseException $e)
        {
            return null;
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e)
        {
            return null;
        }
        catch( \GuzzleHttp\Exception\ClientException $e)
        {
            return null;
        }
        catch( Exception $e)
        {
            return null;
        }
    }

    public static function put($url, $data)
    {
        $result = [];
        $client = new Client();

        try {
            $response = $client->put(
                            $url,
                            [
                                'body' => json_encode($data)
                            ]
                        );

            $result = $response->getBody();

            if ($result->isReadable()){
                return $result->__toString();
            }
            else
            {
                return null;
            }
        }
        catch (\GuzzleHttp\Exception\ClientErrorResponseException $e)
        {
            //$resp              = $e->getResponse();
            return null;
        }
        catch (\GuzzleHttp\Exception\ServerErrorResponseException $e)
        {
            return null;
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e)
        {
            return null;
        }
        catch( \GuzzleHttp\Exception\ClientException $e)
        {
            return null;
        }
        catch( Exception $e)
        {
            return null;
        }
    }

    public static function get($url)
    {
        $result = [];
        $client = new Client();

        try {
            $response = $client->get($url);

            $result = $response->getBody();

            if ($result->isReadable()){
                return $result->__toString();
            }
            else
            {
                return null;
            }
        }
        catch (\GuzzleHttp\Exception\ClientErrorResponseException $e)
        {
            return null;
        }
        catch (\GuzzleHttp\Exception\ServerErrorResponseException $e)
        {
            return null;
        }
        catch (\GuzzleHttp\Exception\BadResponseException $e)
        {
            return null;
        }
        catch( \GuzzleHttp\Exception\ClientException $e)
        {
            return null;
        }
        catch( Exception $e)
        {
            return null;
        }
    }
}
