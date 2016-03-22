<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 22/03/16
 * Time: 17:48
 */

namespace JuaGuz\Interfaces;


interface RestClientInterface
{
    public function get($url, array $get = [], array $options = array());

    public function post($url, array $post = NULL, array $options = array());

    public function put($url, array  $put = NULL, array $options = array());

    public function delete($url, array $delete = NULL, array $options = array());


}