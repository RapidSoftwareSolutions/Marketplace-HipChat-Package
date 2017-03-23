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

        // 'url' REQ
        $result['url'] = $param['url'];
        // 'authentication'
        if(isset($param['authentication'])&&strlen($param['authentication'])>0) {
            $result['authentication'] = $param['authentication'];
        }
        // 'optionsStyle'
        if(isset($param['optionsStyle'])&&strlen($param['optionsStyle'])>0) {
            $result['options']['style'] = $param['optionsStyle'];
        }
        // 'optionsHintI18n'
        if(isset($param['optionsHintI18n'])&&strlen($param['optionsHintI18n'])>0) {
            $result['options']['hint']['i18n'] = $param['optionsHintI18n'];
        }
        // 'optionsHintValue' REQ
        $result['options']['hint']['value'] = $param['url'];
        // 'optionsFilterPlaceholderI18n'
        if(isset($param['optionsFilterPlaceholderI18n'])&&strlen($param['optionsFilterPlaceholderI18n'])>0) {
            $result['options']['filter']['placeholder']['i18n'] = $param['optionsFilterPlaceholderI18n'];
        }
        // 'optionsFilterPlaceholderValue' REQ
        $result['options']['filter']['placeholder']['value'] = $param['url'];
        // 'optionsPrimaryActionEnabled'
        if(isset($param['optionsPrimaryActionEnabled'])&&!is_null($param['optionsPrimaryActionEnabled'])) {
            $result['options']['primaryAction']['enabled'] = $param['optionsPrimaryActionEnabled'];
        }
        // 'optionsPrimaryActionNameI18n'
        if(isset($param['optionsPrimaryActionNameI18n'])&&strlen($param['optionsPrimaryActionNameI18n'])>0) {
            $result['options']['primaryAction']['name']['i18n'] = $param['optionsPrimaryActionNameI18n'];
        }
        // 'optionsPrimaryActionNameValue' REQ
        $result['options']['primaryAction']['name']['value'] = $param['url'];
        // 'optionsPrimaryActionKey'
        if(isset($param['optionsPrimaryActionKey'])&&strlen($param['optionsPrimaryActionKey'])>0) {
            $result['options']['primaryAction']['key'] = $param['optionsPrimaryActionKey'];
        }
        // 'optionsSecondaryActions'
        if(isset($param['optionsSecondaryActions'])&&is_array($param['optionsSecondaryActions'])) {
            $result['options']['secondaryActions'] = $param['optionsSecondaryActions'];
        }
        // 'optionsSizeWidth' REQ
        $result['options']['size']['width'] = $param['url'];
        // 'optionsSizeHeight' REQ
        $result['options']['size']['height'] = $param['url'];
        // 'key' REQ
        $result['key'] = $param['url'];
        // 'titleI18n'
        if(isset($param['titleI18n'])&&strlen($param['titleI18n'])>0) {
            $result['title']['i18n'] = $param['titleI18n'];
        }
        // 'titleValue' REQ
        $result['title']['value'] = $param['url'];

        return $result;
    }
    public static function createGlobalExternalPage($param, &$blockCustom, $vendorUrl){
        $result = [];
        // 'url' req
        $result['url'] = $param['url'];
        // 'nameI18n'
        if(isset($param['nameI18n'])&&strlen($param['nameI18n'])>0){
            $result['name']['i18n'] = $param['nameI18n'];
        }
        // 'nameValue' req
        $result['name']['value'] = $param['nameValue'];
        // 'key' req
        $result['key'] = $param['key'];

        return $result;
    }
    public static function createGlobalGlance($param, &$blockCustom, $vendorUrl){
        $result = [];

        // 'targetOptions'
        if(isset($param['targetOptions'])&&is_array($param['targetOptions'])){
            $result['target']['options'] = $param['targetOptions'];
        }
        // 'targetKey' req
        $result['target']['key'] = $param['targetKey'];
        // 'weight'
        if(isset($param['weight'])&&strlen($param['weight'])>0){
            $result['weight'] = $param['weight'];
        }
        // 'key' req
        $result['key'] = $param['key'];
        // 'queryUrl'
        if(isset($param['queryUrl'])&&strlen($param['queryUrl'])>0){
            $result['queryUrl'] = $param['queryUrl'];
        }
        // 'iconUrl' req
        $result['icon']['url'] = $param['iconUrl'];
        // 'iconUrl2x' req
        $result['icon']['url@2x'] = $param['iconUrl2x'];
        // 'conditions' req
        $result['conditions'] = $param['conditions'];
        // 'nameI18n'
        if(isset($param['nameI18n'])&&strlen($param['nameI18n'])>0){
            $result['name']['i18n'] = $param['nameI18n'];
        }
        // 'nameValue' req
        $result['name']['value'] = $param['nameValue'];

        return $result;
    }
    public static function createGlobalWebPanel($param, &$blockCustom, $vendorUrl){
        $result = [];

        // nameI18n
        if(isset($param['nameI18n'])&&strlen($param['nameI18n'])>0){
            $result['name']['i18n'] = $param['nameI18n'];
        }
        // nameValue req
        $result['name']['value'] = $param['nameValue'];
        // weight
        if(isset($param['weight'])&&strlen($param['weight'])>0){
            $result['weight'] = $param['weight'];
        }
        // url req
        $result['url'] = $param['url'];
        // authentication
        if(isset($param['authentication'])&&strlen($param['authentication'])>0){
            $result['authentication'] = $param['authentication'];
        }
        // location req
        $result['location'] = $param['location'];
        // key req
        $result['key'] = $param['key'];
        // conditions
        if(isset($param['conditions'])&&is_array($param['conditions'])){
            $result['conditions'] = $param['conditions'];
        }
        // iconUrl req
        $result['icon']['url'] = $param['iconUrl'];
        // iconUrl2x req
        $result['icon']['url@2x'] = $param['iconUrl2x'];

        return $result;
    }
    public static function updateUser($param, &$blockCustom, $vendorUrl){
        $result = $param;

        unset($result['presenceStatus']);
        unset($result['presenceShow']);

        // 'presenceStatus'
        if(isset($param['presenceStatus'])&&strlen($param['presenceStatus'])>0){
            $result['presence']['status'] = $param['presenceStatus'];
        }
        // 'presenceShow' req
        $result['presence']['show'] = $param['presenceShow'];

        return $result;
    }
    public static function updateRoom($param, &$blockCustom, $vendorUrl){
        $result = $param;

        unset($result['ownerId']);

        $result['owner']['id'] = $param['ownerId'];

        return $result;
    }
    public static function createRoomAction($param, &$blockCustom, $vendorUrl){
        $result = [];

        // targetOptions
        if(isset($param['targetOptions'])&&is_array($param['targetOptions'])){
            $result['target']['options'] = $param['targetOptions'];
        }
        // targetKey REQ
        $result['target']['key'] = $param['targetKey'];
        // weight
        if(isset($param['weight'])&&strlen($param['weight'])>0){
            $result['weight'] = $param['weight'];
        }
        // location REQ
        $result['location'] = $param['location'];
        // key REQ
        $result['key'] = $param['key'];
        // conditions
        if(isset($param['conditions'])&&is_array($param['conditions'])){
            $result['conditions'] = $param['conditions'];
        }
        // nameI18n
        if(isset($param['nameI18n'])&&strlen($param['nameI18n'])>0){
            $result['name']['i18n'] = $param['nameI18n'];
        }
        // nameValue REQ
        $result['name']['value'] = $param['nameValue'];

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