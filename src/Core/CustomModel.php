<?php

namespace Core;

use SebastianBergmann\Comparator\DateTimeComparator;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function getAddOnAuthToken($param, &$blockCustom, $vendorUrl){
        $clientSetup = [];
        $clientSetup['headers']['Authorization'] = 'Basic ' . base64_encode($param['userLogin'].':'.$param['userPassword']);
            $clientSetup['form_params'] = [
            'code' => $param['code'],
            'user_id' => $param['userId'],
            'client_name' => $param['clientName'],
            'redirect_uri' => $param['redirectUri'],
            'scope' => $param['scope'],
            'group_id' => $param['groupId'],
        ];

        return $clientSetup;
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
    public static function updateGroupAvatar($param, &$blockCustom, $vendorUrl){
        $result = [];

        $type = pathinfo($param['avatar'], PATHINFO_EXTENSION);
        $data = file_get_contents($param['avatar']);
        $result['avatar'] = 'data:image/' . $type . ';base64,' . base64_encode($data);

        return $result;
    }
    public static function updateUser($param, &$blockCustom, $vendorUrl){
        $result = $param;

        unset($result['roles']);
        unset($result['presenceStatus']);
        unset($result['presenceShow']);

        // 'roles'
        if(isset($param['roles'])&&strlen($param['roles'])>0) {
            $roles = explode(',', $param['roles']);
            $rolesObj = [];
            foreach($roles as $role){
                $rolesObj[] = ['name' => trim($role)];
            }
            $result['roles'] = $rolesObj;
        }

        // 'presenceStatus'
        if(isset($param['presenceStatus'])&&strlen($param['presenceStatus'])>0){
            $result['presence']['status'] = $param['presenceStatus'];
        }
        // 'presenceShow' req
        $result['presence']['show'] = $param['presenceShow'];

        return $result;
    }
    public static function shareFileWithUser($param, &$blockCustom, $vendorUrl){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'multipart/related';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $param['authToken'];

        $clientSetup['multipart'] = [[
            'name' => 'file',
            'contents' => fopen($param['file'], 'r'),
        ]];

        return $clientSetup;
    }
    public static function updatePhoto($param, &$blockCustom, $vendorUrl){
        $result = [];

        $type = pathinfo($param['photo'], PATHINFO_EXTENSION);
        $data = file_get_contents($param['photo']);
        $result['photo'] = 'data:image/' . $type . ';base64,' . base64_encode($data);

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
        $result = [];

        // url req
        $result['url'] = $param['url'];
        // authentication
        if(isset($param['authentication'])&&strlen($param['authentication'])>0){
            $result['authentication'] = $param['authentication'];
        }
        // optionsStyle
        if(isset($param['optionsStyle'])&&strlen($param['optionsStyle'])>0){
            $result['options']['style'] = $param['optionsStyle'];
        }
        // optionsHintI18n
        if(isset($param['optionsHintI18n'])&&strlen($param['optionsHintI18n'])>0){
            $result['options']['hint']['i18n'] = $param['optionsHintI18n'];
        }
        // optionsHintValue req
        $result['options']['hint']['value'] = $param['optionsHintValue'];
        // optionsFilterPlaceholderI18n
        if(isset($param['optionsFilterPlaceholderI18n'])&&strlen($param['optionsFilterPlaceholderI18n'])>0){
            $result['options']['filter']['placeholder']['i18n'] = $param['optionsFilterPlaceholderI18n'];
        }
        // optionsFilterPlaceholderValue req
        $result['options']['filter']['placeholder']['value'] = $param['optionsFilterPlaceholderValue'];
        // optionsPrimaryActionEnabled
        if(isset($param['optionsPrimaryActionEnabled'])&&$param['optionsPrimaryActionEnabled']==null){
            $result['options']['primaryAction']['enabled'] = $param['optionsPrimaryActionEnabled'];
        }
        // optionsPrimaryActionNameI18n
        if(isset($param['optionsPrimaryActionNameI18n'])&&strlen($param['optionsPrimaryActionNameI18n'])>0){
            $result['options']['primaryAction']['name']['i18n'] = $param['optionsPrimaryActionNameI18n'];
        }
        // optionsPrimaryActionNameValue req
        $result['options']['primaryAction']['name']['value'] = $param['optionsPrimaryActionNameValue'];
        // optionsPrimaryActionKey
        if(isset($param['optionsPrimaryActionKey'])&&strlen($param['optionsPrimaryActionKey'])>0){
            $result['options']['primaryAction']['key'] = $param['optionsPrimaryActionKey'];
        }
        // optionsSecondaryActions
        if(isset($param['optionsSecondaryActions'])&&is_array($param['optionsSecondaryActions'])){
            $result['options']['secondaryActions'] = $param['optionsSecondaryActions'];
        }
        // optionsSizeWidth req
        $result['options']['size']['width'] = $param['optionsSizeWidth'];
        // optionsSizeHeight req
        $result['options']['size']['height'] = $param['optionsSizeHeight'];
        // key req
        $result['key'] = $param['key'];
        // titleI18n
        if(isset($param['titleI18n'])&&strlen($param['titleI18n'])>0){
            $result['title']['i18n'] = $param['titleI18n'];
        }
        // titleValue req
        $result['title']['value'] = $param['titleValue'];

        return $result;
    }
    public static function createRoomExternalPage($param, &$blockCustom, $vendorUrl){
        $result = $param;

        unset($result['nameValue']);
        unset($result['nameI18n']);

        // 'nameValue'
        $result['name']['value'] = $param['nameValue'];
        // 'nameI18n'
        if(isset($param['nameI18n'])&&strlen($param['nameI18n'])>0){
            $result['name']['i18n'] = $param['nameI18n'];
        }

        return $result;
    }
    public static function createRoomGlance($param, &$blockCustom, $vendorUrl){
        $result = [];

        // targetOptions
        if(isset($param['targetOptions'])&&is_array($param['targetOptions'])){
            $result['target']['options'] = $param['targetOptions'];
        }
        // targetKey req
        $result['target']['key'] = $param['targetKey'];
        // weight
        if(isset($param['weight'])&&strlen($param['weight'])>0){
            $result['weight'] = $param['weight'];
        }
        // key req
        $result['key'] = $param['key'];
        // queryUrl
        if(isset($param['queryUrl'])&&strlen($param['queryUrl'])>0){
            $result['queryUrl'] = $param['queryUrl'];
        }
        // iconUrl req
        $result['icon']['url'] = $param['iconUrl'];
        // iconUrl2x req
        $result['icon']['url@2x'] = $param['iconUrl2x'];
        // conditions
        if(isset($param['conditions'])&&is_array($param['conditions'])){
            $result['conditions'] = $param['conditions'];
        }
        // nameI18n
        if(isset($param['nameI18n'])&&strlen($param['nameI18n'])>0){
            $result['name']['i18n'] = $param['nameI18n'];
        }
        // nameValue req
        $result['name']['value'] = $param['nameValue'];

        return $result;
    }
    public static function createRoomWebPanel($param, &$blockCustom, $vendorUrl){
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
        $result['icon']['url@2x'] = $param['iconUrl'];

        return $result;
    }
    public static function sendRoomNotification($param, &$blockCustom, $vendorUrl){
        $result = [];

        // from
        if(isset($param['from'])&&strlen($param['from'])>0){
            $result['from'] = $param['from'];
        }
        // messageFormat
        if(isset($param['messageFormat'])&&strlen($param['messageFormat'])>0){
            $result['message_format'] = $param['messageFormat'];
        }
        // color
        if(isset($param['color'])&&strlen($param['color'])>0){
            $result['color'] = $param['color'];
        }
        // attachTo
        if(isset($param['attachTo'])&&strlen($param['attachTo'])>0){
            $result['attach_to'] = $param['attachTo'];
        }
        // notify
        if(isset($param['notify'])&&strlen($param['notify'])>0){
            $result['notify'] = $param['notify'];
        }
        // message req
        $result['message'] = $param['message'];
        // cardStyle
        if(isset($param['cardStyle'])&&strlen($param['cardStyle'])>0){
            $result['card']['style'] = $param['cardStyle'];
        }
        // cardDescriptionValue
        if(isset($param['cardDescriptionValue'])&&strlen($param['cardDescriptionValue'])>0){
            $result['card']['description']['value'] = $param['cardDescriptionValue'];
        }
        // cardDescriptionFormat
        if(isset($param['cardDescriptionFormat'])&&strlen($param['cardDescriptionFormat'])>0){
            $result['card']['description']['format'] = $param['cardDescriptionFormat'];
        }
        // cardFormat
        if(isset($param['cardFormat'])&&strlen($param['cardFormat'])>0){
            $result['card']['format'] = $param['cardFormat'];
        }
        // cardUrl
        if(isset($param['cardUrl'])&&strlen($param['cardUrl'])>0){
            $result['card']['url'] = $param['cardUrl'];
        }
        // cardTitle
        if(isset($param['cardTitle'])&&strlen($param['cardTitle'])>0){
            $result['card']['title'] = $param['cardTitle'];
        }
        // cardThumbnailUrl
        if(isset($param['cardThumbnailUrl'])&&strlen($param['cardThumbnailUrl'])>0){
            $result['card']['thumbnail']['url'] = $param['cardThumbnailUrl'];
        }
        // cardThumbnailWidth
        if(isset($param['cardThumbnailWidth'])&&strlen($param['cardThumbnailWidth'])>0){
            $result['card']['thumbnail']['width'] = $param['cardThumbnailWidth'];
        }
        // cardThumbnailUrl2x
        if(isset($param['cardThumbnailUrl2x'])&&strlen($param['cardThumbnailUrl2x'])>0){
            $result['card']['thumbnail']['url@2x'] = $param['cardThumbnailUrl2x'];
        }
        // cardThumbnailHeight
        if(isset($param['cardThumbnailHeight'])&&strlen($param['cardThumbnailHeight'])>0){
            $result['card']['thumbnail']['height'] = $param['cardThumbnailHeight'];
        }
        // cardActivityHtml
        if(isset($param['cardActivityHtml'])&&strlen($param['cardActivityHtml'])>0){
            $result['card']['activity']['html'] = $param['cardActivityHtml'];
        }
        // cardActivityIconUrl
        if(isset($param['cardActivityIconUrl'])&&strlen($param['cardActivityIconUrl'])>0){
            $result['card']['activity']['icon']['url'] = $param['cardActivityIconUrl'];
        }
        // cardActivityIconUrl2x
        if(isset($param['cardActivityIconUrl2x'])&&strlen($param['cardActivityIconUrl2x'])>0){
            $result['card']['activity']['icon']['url@2x'] = $param['cardActivityIconUrl2x'];
        }
        // cardAttributes
        if(isset($param['cardAttributes'])&&is_array($param['cardAttributes'])){
            $result['card']['attributes'] = $param['cardAttributes'];
        }
        // cardId
        if(isset($param['cardId'])&&strlen($param['cardId'])>0){
            $result['card']['id'] = $param['cardId'];
        }
        // cardIconUrl
        if(isset($param['cardIconUrl'])&&strlen($param['cardIconUrl'])>0){
            $result['card']['icon']['url'] = $param['cardIconUrl'];
        }
        // cardIconUrl2x
        if(isset($param['cardIconUrl2x'])&&strlen($param['cardIconUrl2x'])>0){
            $result['card']['icon']['url@2x'] = $param['cardIconUrl2x'];
        }

        return $result;
    }
    public static function shareFileWithRoom($param, &$blockCustom, $vendorUrl){
        $clientSetup = [];
        $clientSetup['headers']['Content-Type'] = 'multipart/related';
        $clientSetup['headers']['Authorization'] = 'Bearer ' . $param['authToken'];

        $clientSetup['multipart'] = [[
            'name' => 'file',
            'contents' => fopen($param['file'], 'r'),
        ]];

        return $clientSetup;
    }
}