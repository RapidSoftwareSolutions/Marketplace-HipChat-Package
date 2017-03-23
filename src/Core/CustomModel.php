<?php

namespace Core;

use SebastianBergmann\Comparator\DateTimeComparator;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function getAccessToken($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createGlobalAction($param, &$blockCustom, $vendorUrl){
        $result = [];

        // 'targetOptions'
        if(isset($param['targetOptions'])&&is_array($param['targetOptions'])) {
            $result['target']['options'] = $param['targetOptions'];
        }
        // 'targetKey' REQ
        $result['target']['key'] = $param['targetKey'];
        // 'weight'
        if(isset($param['weight'])&&strlen($param['weight'])>0) {
            $result['weight'] = $param['weight'];
        }
        // 'location' REQ
        $result['location'] = $param['location'];
        // 'key' REQ
        $result['key'] = $param['key'];
        // 'conditions' REQ
        if(isset($param['conditions'])&&is_array($param['conditions'])) {
            $result['conditions'] = $param['conditions'];
        }
        // 'nameI18n'
        if(isset($param['nameI18n'])&&strlen($param['nameI18n'])>0) {
            $result['name']['i18n'] = $param['nameI18n'];
        }
        // 'nameValue' REQ
        $result['name']['value'] = $param['nameValue'];

        return $result;
    }
    public static function createGlobalDialog($param, &$blockCustom, $vendorUrl){
        $result = [];

        // 'url'
        // 'authentication'
        // 'optionsStyle'
        // 'optionsHintI18n'
        // 'optionsHintValue'
        // 'optionsFilterPlaceholderI18n'
        // 'optionsFilterPlaceholderValue'
        // 'optionsPrimaryActionEnabled'
        // 'optionsPrimaryActionNameI18n'
        // 'optionsPrimaryActionNameValue'
        // 'optionsPrimaryActionKey'
        // 'optionsSecondaryActions'
        // 'optionsSizeWidth'
        // 'optionsSizeHeight'
        // 'key'
        // 'titleI18n'
        // 'titleValue'

        return $result;
    }
    public static function createGlobalExternalPage($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createGlobalGlance($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createGlobalWebPanel($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function pushUIChangesToGroup($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function pushUIChangesToRoom($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function pushUIChangesToUserInRoom($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function pushUIChangesToUser($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createUser($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function updateUser($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function updateRoom($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createRoomAction($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createRoomDialog($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createRoomExternalPage($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createRoomGlance($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function createRoomWebPanel($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function sendRoomNotification($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
    public static function shareFileWithRoom($param, &$blockCustom, $vendorUrl){
        $result = $param;

        return $result;
    }
}