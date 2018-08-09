<?php
/**
 * Created by Roman Melnikov <squizshee@gmail.com>
 * Date: 08.08.2018
 */

namespace Sq\Url;

class UrlHelper
{
    /**
     * @param string $url
     * @param array  $removeValues
     * @param array  $addParams
     * @param bool   $sortParams
     *
     * @return string
     */
    public function updateUrl(
        string $url,
        array $removeValues = [],
        array $addParams = [],
        bool $sortParams = false
    )
    {
        if (!empty($removeValues)) {
            foreach ($removeValues as $value) {
                $url = $this->removeParams($url, $value);
            }
        }
        
        if ($sortParams) {
            $url = $this->sortParams($url);
        }
        
        if (!empty($addParams)) {
            foreach ($addParams as $name => $value) {
                $url = $this->addParam($url, $name, $value);
            }
        }
        
        return $url;
    }
    
    /**
     * @param string $url
     * @param string $name
     * @param mixed $value
     *
     * @return string
     */
    private function addParam(string $url, string $name, $value)
    {
        $this->parseUrl($url, $parsed, $params);
        
        $params[$name] = $value;
        
        return $this->generateUrl($parsed['scheme'], $parsed['host'], '', $params);
    }
    
    /**
     * @param string $url
     * @param mixed $paramValue
     * 
     * @return string
     */
    private function removeParams(string $url, $paramValue)
    {
        $this->parseUrl($url, $parsed, $params);
        
        $result = array_filter($params, function ($value) use ($paramValue) {
            return $value !== (string) $paramValue;
        });
        
        return $this->generateUrl($parsed['scheme'], $parsed['host'], $parsed['path'], $result);
    }
    
    /**
     * @param string $url
     *
     * @return string
     */
    private function sortParams(string $url)
    {
        $this->parseUrl($url, $parsed, $params);
        
        asort($params);
        
        return $this->generateUrl($parsed['scheme'], $parsed['host'], '', $params);
    }
    
    private function parseUrl(string $url, &$parsed, &$params)
    {
        $parsed = parse_url($url);
        parse_str($parsed['query'], $params);
    }
    
    /**
     * @param string $scheme
     * @param string $host
     * @param string $path
     * @param array $params
     *
     * @return string
     */
    private function generateUrl(
        string $scheme,
        string $host,
        string $path = '',
        array $params = []
    ): string
    {
        return $scheme . '://' . $host . '/' . $path . '?' . http_build_query($params);
    }
    
    /**
     * @param string $url
     */
    public function printUrl(string $url)
    {
        echo str_replace('&', '&amp;', $url);
    }
}
