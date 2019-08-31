<?php	
include 'conf.php';
require_once ("./lib/YopRsaClient.php");
 
 function object_array($array) { 
    if(is_object($array)) { 
        $array = (array)$array; 
     } if(is_array($array)) { 
         foreach($array as $key=>$value) { 
             $array[$key] = object_array($value); 
             } 
     } 
     return $array; 
}


 
function upload(){
	
	   
 
	   global $parentMerchantNo;
	   global $private_key;
	   global $yop_public_key;
	     
      #$request = new YopRequest("OPR:10014929805", $private_key,"https://open.yeepay.com/yop-center",$yop_public_key);
      // 药极客账号
      
      $private_key="MIIEpAIBAAKCAQEAuCH2ZrWnBjFC6NQYkERlvQe4HMmxoxmXfTNDY+2ujBO9qOIyhL2lF7lN05lsqcqJpcjn5Iho2NPfPI94afB3VrmzNdIuK10nJ29adeOyOd2LJU+L1NtHSSRdRlDktyey89MxiMhh/+48mVh9j/8s6aNMKNm73daTQq7Gfj3diUwHzsRr8vobiOLszOI8VWtqdOgIDexLaSU1uzjKDawImcvVBnrvrYojGB9gXTipcQFBHeOne922Xmoc/J3ykJffqmgIZMz+kA97cyd4Odm19kCLQsalngczjLqPDjwtGE9+FjPid4icggVk9VvEi3EHnnxjcVn6VYpB3XdPSnf75wIDAQABAoIBAEx5do/z9BnDTenLZSRN8/9NfG8gadG2qE9Mgjm3lp4A+O1yfM7awP2YbbVrbFEcmIytY3psGTesz3OklrtRLw9q8v5we9Jwzvk261g5KGWWGNt3LTlLlVDQdJjmsgdLyqwv08veha048hwyP3wV3D5xHwl8XOVm4CR62F/ILAGASQfSnzdtXmMhZLut/3FU7ulNPOW1Zf2w88702/MRs7fbjIuonMSPHvLVUPmNZ9Iaq7I905TlMZZ9Jz7nenL9XTP83iCC+hwZGpLgBaMQz0q4uXkos82+3cjvbHp6k3b3rYwUSnU2HRsf34KdSQA++uvEgc+gZ1yNhbb7Y2pheckCgYEA2sZsBOg23I2+cGB2bXkmVNMxv6tjr9Cz86hFhnPO3JcTsTaasHj8oslq+z+zpt7lt5JwM93dWEhQiUtL07/QyTUDE2xUAsOiu5Er7J/wFPjaH2O2kf6mOl8N0eVTzwSwqZScvoyty7YyyUgRK4eooR0kw1F077UCbr+8x9CncY0CgYEA13aPBKKRAVWt0myG8N3T3Ms8DQxLa6DN3cmLu4loe9FeI0YiqZEoRxiYFk93jDYB3OwwGkoNgu3xMYoc9XmtjQH7iHMr+je+11bpaqw9OAhDT1iy0xIMz4i5eDrj0N8QF47hpxFwWu/8YUjuNGcEZ2t/2JeVS4OQS9YipBavVEMCgYEAu+B0uU4Wdxe++NDOQzssQOJRsdFkvYLUVyYl9s4TUvrm7WQAOhbclou0tOnCxUZcLmaytsgMoxkPGKiyCLmMeo5tAswf5XPOl5eXChFb4xbGcvh1vDDc3fnta1iuvXTAphE6/qTfR7dDK/oYzLImjZ3yiU21x3lCCovcehhlA60CgYEAjgewNSz4izmwcHJr7WE85GHwPuWo3dTNf/L4snHctyoHdRcpiD+QnnUe5C4ULw/24GutNdc02ucAxFg3yLUh6z6wUX0iMzoGCitXiKLrZAFGZYqhrrNKUI/fOtsPC8PO9siQBTJgrwFdi7+ojlCOPaJGTz91AadDOkp44VO21cMCgYBzZpjCslEKcaKSN0mbkJ5k29S1Q+pr3TX4LiV2J7w9Z5H/Bk3SPWTkc1Wl87ejBjODEhzA+/qvv9PaFtz+9jPz9O1tuXb1/+53Rqcm7XgLMdzu1ZzGnCw2z+qXaYPvbvkMwJFVscDcVzUH6j/dwoG38C72ZESUCWzj68kgmRAuGg==";
      $request = new YopRequest("OPR:10027890280", $private_key, "https://open.yeepay.com/yop-center");
     //  $request->addParam("fileType", "IMAGE");
     echo("图片路径:" . $_REQUEST['fileURI'] . "<br>");
     // 手持身份证
     // $request->addFile("merQual", "HAND_IDCARD.png");
     // 营业执照
     //$request->addFile("merQual", "certificate_business.png");
    //  // 身份证反面
     //$request->addFile("merQual", "idcard_back.jpg");
    //  // 身份证正面
    // $request->addFile("merQual", "idcard_front.jpg");
    //  // 开户许可证
    $request->addFile("merQual", "account_license.jpeg");

      // $request->addFile("merQual", 'pic.png');
     var_dump($request );

    //提交Post请求
 
    $response = YopRsaClient::upload("/yos/v1.0/sys/merchant/qual/upload", $request);
    
    var_dump($response );
 
	  if($response->validSign==1){
        echo "返回结果签名验证成功!\n";
    }
      //取得返回结果
    $data=object_array($response);
 
    return $data;
 }
   
$array=upload();  
  
 if( $array['result'] == NULL)
 {
 	echo "error:".$array['error'];
  return;}
 else{
 $result= $array['result'] ;
 //var_dump($result['files'][0]);
}
?> 
 