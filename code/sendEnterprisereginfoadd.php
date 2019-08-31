<?php	
include 'conf.php';
require_once ("./lib/YopClient3.php");
 


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



function enterprisereginfoadd(){
     
     global $parentMerchantNo;
	 global $private_key;
	 global $yop_public_key;
    global $appKey;
	
	//$request = new YopRequest("OPR:10014929805", $private_key);
	// 药极客

	$request = new YopRequest("OPR:10027890280", "MIIEpAIBAAKCAQEAuCH2ZrWnBjFC6NQYkERlvQe4HMmxoxmXfTNDY+2ujBO9qOIyhL2lF7lN05lsqcqJpcjn5Iho2NPfPI94afB3VrmzNdIuK10nJ29adeOyOd2LJU+L1NtHSSRdRlDktyey89MxiMhh/+48mVh9j/8s6aNMKNm73daTQq7Gfj3diUwHzsRr8vobiOLszOI8VWtqdOgIDexLaSU1uzjKDawImcvVBnrvrYojGB9gXTipcQFBHeOne922Xmoc/J3ykJffqmgIZMz+kA97cyd4Odm19kCLQsalngczjLqPDjwtGE9+FjPid4icggVk9VvEi3EHnnxjcVn6VYpB3XdPSnf75wIDAQABAoIBAEx5do/z9BnDTenLZSRN8/9NfG8gadG2qE9Mgjm3lp4A+O1yfM7awP2YbbVrbFEcmIytY3psGTesz3OklrtRLw9q8v5we9Jwzvk261g5KGWWGNt3LTlLlVDQdJjmsgdLyqwv08veha048hwyP3wV3D5xHwl8XOVm4CR62F/ILAGASQfSnzdtXmMhZLut/3FU7ulNPOW1Zf2w88702/MRs7fbjIuonMSPHvLVUPmNZ9Iaq7I905TlMZZ9Jz7nenL9XTP83iCC+hwZGpLgBaMQz0q4uXkos82+3cjvbHp6k3b3rYwUSnU2HRsf34KdSQA++uvEgc+gZ1yNhbb7Y2pheckCgYEA2sZsBOg23I2+cGB2bXkmVNMxv6tjr9Cz86hFhnPO3JcTsTaasHj8oslq+z+zpt7lt5JwM93dWEhQiUtL07/QyTUDE2xUAsOiu5Er7J/wFPjaH2O2kf6mOl8N0eVTzwSwqZScvoyty7YyyUgRK4eooR0kw1F077UCbr+8x9CncY0CgYEA13aPBKKRAVWt0myG8N3T3Ms8DQxLa6DN3cmLu4loe9FeI0YiqZEoRxiYFk93jDYB3OwwGkoNgu3xMYoc9XmtjQH7iHMr+je+11bpaqw9OAhDT1iy0xIMz4i5eDrj0N8QF47hpxFwWu/8YUjuNGcEZ2t/2JeVS4OQS9YipBavVEMCgYEAu+B0uU4Wdxe++NDOQzssQOJRsdFkvYLUVyYl9s4TUvrm7WQAOhbclou0tOnCxUZcLmaytsgMoxkPGKiyCLmMeo5tAswf5XPOl5eXChFb4xbGcvh1vDDc3fnta1iuvXTAphE6/qTfR7dDK/oYzLImjZ3yiU21x3lCCovcehhlA60CgYEAjgewNSz4izmwcHJr7WE85GHwPuWo3dTNf/L4snHctyoHdRcpiD+QnnUe5C4ULw/24GutNdc02ucAxFg3yLUh6z6wUX0iMzoGCitXiKLrZAFGZYqhrrNKUI/fOtsPC8PO9siQBTJgrwFdi7+ojlCOPaJGTz91AadDOkp44VO21cMCgYBzZpjCslEKcaKSN0mbkJ5k29S1Q+pr3TX4LiV2J7w9Z5H/Bk3SPWTkc1Wl87ejBjODEhzA+/qvv9PaFtz+9jPz9O1tuXb1/+53Rqcm7XgLMdzu1ZzGnCw2z+qXaYPvbvkMwJFVscDcVzUH6j/dwoG38C72ZESUCWzj68kgmRAuGg==");
    $request->addParam("parentMerchantNo", $parentMerchantNo);
    $request->addParam("requestNo", $_REQUEST['requestNo']);
    $request->addParam("merFullName", $_REQUEST['merFullName']);
    $request->addParam("merShortName", $_REQUEST['merShortName']);
	$request->addParam("merCertType", $_REQUEST['merCertType']);
    $request->addParam("merCertNo", $_REQUEST['merCertNo']);
    $request->addParam("legalName", $_REQUEST['legalName']); 
    $request->addParam("legalIdCard", $_REQUEST['legalIdCard']);
    
    $request->addParam("merLevel1No", $_REQUEST['merLevel1No']);
    $request->addParam("merLevel2No", $_REQUEST['merLevel2No']);
    $request->addParam("merProvince", $_REQUEST['merProvince']);
    $request->addParam("merCity", $_REQUEST['merCity']);
    $request->addParam("merDistrict", $_REQUEST['merDistrict']);
    $request->addParam("merAddress", $_REQUEST['merAddress']);
	$request->addParam("merContactName", $_REQUEST['merContactName']);
	$request->addParam("merLegalPhone", $_REQUEST['merLegalPhone']);
    $request->addParam("merLegalEmail", $_REQUEST['merLegalEmail']);
    $request->addParam("taxRegistCert", $_REQUEST['taxRegistCert']);
    $request->addParam("accountLicense", $_REQUEST['accountLicense']);
    $request->addParam("orgCode", $_REQUEST['orgCode']);
    $request->addParam("isOrgCodeLong", $_REQUEST['isOrgCodeLong']);
    $request->addParam("orgCodeExpiry", $_REQUEST['orgCodeExpiry']);

    $request->addParam("cardNo", $_REQUEST['cardNo']);
    $request->addParam("headBankCode", $_REQUEST['headBankCode']);
    $request->addParam("bankCode", $_REQUEST['bankCode']);
    $request->addParam("bankProvince", $_REQUEST['bankProvince']);
    $request->addParam("bankCity", $_REQUEST['bankCity']);
    $request->addParam("productInfo", $_REQUEST['productInfo']);
    $request->addParam("fileInfo", $_REQUEST['fileInfo']);            
   // $request->addParam("businessFunction", $_REQUEST['businessFunction']);
    $request->addParam("notifyUrl", $_REQUEST['notifyUrl']);
	$request->addParam("merAuthorizeType", $_REQUEST['merAuthorizeType']);
	
	$request->addParam("merContactPhone", "13760049089");
 
 
 
    $response = YopClient3::post("/rest/v1.0/sys/merchant/enterprisereginfoadd", $request);
    if($response->validSign==1){
        echo "返回结果签名验证成功!\n";
	}
	var_dump($response);
    //取得返回结果
    $data=object_array($response);
    
    return $data;
    
 }
  $array=enterprisereginfoadd();  
   
 if( $array['result'] == NULL)
 {
 	echo "error:".$array['error'];
  return;}
 else{
 $result= $array['result'] ;
 
}
?> 


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> 企业注册--返回参数 </title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					企业注册--返回参数 
				</th>
		  	</tr>
	<tr >
				<td width="25%" align="left">&nbsp;请求返回码</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $result['returnCode'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">returnCode</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;请求返回信息</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['returnMsg'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">returnMsg</td> 
			</tr>
 
 
			
			<tr>
				<td width="25%" align="left">&nbsp;代理商编号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['parentMerchantNo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">parentMerchantNo</td> 
			</tr>
			
			<tr >
				<td width="25%" align="left">&nbsp;商户编号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $result['merchantNo'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">merchantNo</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;入网请求号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['requestNo'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">requestNo</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;内部流水号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['externalId'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">externalId</td> 
			</tr>
 
			
			 

		</table>

	</body>
</html>