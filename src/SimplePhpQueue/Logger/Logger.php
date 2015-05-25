<?php
/**
 * Created by PhpStorm.
 * User: jbravo
 * Date: 21/05/15
 * Time: 17:52
 */

namespace SimplePhpQueue\Logger;


interface Logger {
    public function info($message);
    public function debug($message);
    public function warn($message);
    public function error($message);
    public function fatal($message);
}