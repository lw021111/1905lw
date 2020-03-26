<?php
namespace App\Tool;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// Download：https://github.com/aliyun/openapi-sdk-php
// Usage：https://github.com/aliyun/openapi-sdk-php/blob/master/README.md
Class Sms{
  static function sendSms($phone,$code){
    //$time=date('Y-m-d',time());
    AlibabaCloud::accessKeyClient('LTAI3FAerztCPlg5', 'xJML0bkF5cFUUF7Hq2AXszBWJGAKsT')
                        ->regionId('cn-hangzhou')
                        ->asDefaultClient();

try {
    $result = AlibabaCloud::rpc()
                          ->product('Dysmsapi')
                          // ->scheme('https') // https | http
                          ->version('2017-05-25')
                          ->action('SendSms')
                          ->method('POST')
                          ->host('dysmsapi.aliyuncs.com')
                          ->options([
                                        'query' => [
                                          'RegionId' => "cn-hangzhou",
                                          'PhoneNumbers' => "$phone",
                                          'SignName' => "便利100",
                                          'TemplateCode' => "SMS_172880045",
                                          'TemplateParam' => "{code:\"$code\"}",
                                        ],
                                    ])
                          ->request();
    print_r($result->toArray());
    // $arr=$result->toArray();
    // if($arr["[code]"]=="ok"){
     // return true;
    // }else{
    //   return false;
    // }
} catch (ClientException $e) {
    //echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    //echo $e->getErrorMessage() . PHP_EOL;
}
  }
}

