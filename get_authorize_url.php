<?
if(empty($_GET['redirect_uri']))$_GET['redirect_uri']='';
$hago = shell_exec("curl -A 'Spanacom-Curl/1.0' -d '{\"client_id\": \"\",\"apikeyapp\": \"5c54c01b2a6f99353c64fa90\",\"redirect_uri\": \"".urlencode($_GET['redirect_uri'])."\"}' 'https://app.datalyse.io/api/1.0/oauth/get_authorize_url.json'");

$hago = json_decode($hago);
//$hago->redirect_uri_login = urldecode($hago->redirect_uri_login);

//<a href='$hago->redirect_uri_login'>$hago->redirect_uri_login</a> 
echo "
Redirect to login for get token...

<script> 
setTimeout(function(){
window.location='".$hago->redirect_uri_login."';
},1);
</script> 
";

?>