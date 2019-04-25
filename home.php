hello
<br/><br/>
apikeyapp:<br/>
<input id="apikeyapp" type="text" value="5c54c01b2a6f99353c64fa90"/><br/><br/>
redirect_uri:<br/>
<input id="redirect_uri" type="text" value="https://datalyse.io/app_example/redirect_uri.php?extravar1=extravar11&extravar2=extravar22" size="100"/><br/><br/>
<a href="javascript:gotoappurl()">Example Process to get_authorize_url.json
</a>

<script>
function gotoappurl(){
var apikeyappurl = 'get_authorize_url.php?apikeyapp='+document.getElementById('apikeyapp').value+'&redirect_uri='+encodeURIComponent(document.getElementById('redirect_uri').value);
window.location= apikeyappurl;
}
</script>
