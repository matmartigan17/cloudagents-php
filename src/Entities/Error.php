<?php
/**
  * Cloud Agents library
  *
  * PHP version 5.4
  *
  * @author    João Rodrigues <joao.rodrigues@securibox.eu>
  * @copyright 2017 SendGrid
  * @license   https://opensource.org/licenses/MIT The MIT License
  * @version   GIT: <git_id>
  * @link      http://packagist.org/packages/securibox/cloudagents
  */

namespace Securibox\CloudAgents\Entities;
/**
 * Object representing an agent field.
 */
class Error {

    /** @var string The error code. */
    public $code;

    /** @var int32 The error message. */
    public $message;

    /** @var string The detailed description of the error  */
    public $description;   

    public static function LoadFromJson($jsonData){
        $obj = new Error();
        $obj->code = $jsonData->code;
        $obj->message = $jsonData->message;
        $obj->description = $jsonData->description;
        return $obj;
    }               
}
?>