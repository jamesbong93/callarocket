
<style>
#qwe{
	
	color:blue;
	
}

</style>
<?php
	
if(@$_GET["action"]=="getTime"){
  $time1 = time();
  date_default_timezone_set("Asia/Kuala_Lumpur");
  $date1 =  date("h:i:sa",$time1);
  echo date("Y-m-d"); 
  echo "   ";
  echo $date1  ; // time output for ajax request
  
  die();  
}
?>



<script type="text/javascript">   
  window.onload = startInterval;  
  function startInterval() {  
    setInterval("startTime();",1000);  
  }
  function startTime() {
    AX = new ajaxObject("?action=getTime", showTime)
    AX.update(); // start Ajax Request   
  } 
  // CallBack 
  function showTime( data ){
    document.getElementById('qwe').innerHTML = data;
  }  
</script>  



<script type="text/javascript">
// Ajax Object - Constructor
function ajaxObject(url, callbackFunction) {
  var that=this;
  this.updating = false;
  this.abort = function() {
    if (that.updating) {
      that.updating=false;
      that.AJAX.abort();
      that.AJAX=null;
    }
  };
  this.update =
  function(passData,postMethod) {
    if (that.updating) { return false; }
    that.AJAX = null;
    if (window.XMLHttpRequest) {
      that.AJAX=new XMLHttpRequest();
    }else{
      that.AJAX=new ActiveXObject("Microsoft.XMLHTTP");
    }
    if (that.AJAX==null) {
      return false;
    }else{
      that.AJAX.onreadystatechange = function() {
        if (that.AJAX.readyState==4) {
          that.updating=false;
          that.callback( that.AJAX.responseText, that.AJAX.status, that.AJAX.responseXML, that.AJAX.getAllResponseHeaders() );
          that.AJAX=null;
        }
      };
      that.updating = new Date();
      if (/post/i.test(postMethod)) {
        var uri=urlCall+(/\?/i.test(urlCall)?'&':'?')+'timestamp='+that.updating.getTime();
        that.AJAX.open("POST", uri, true);
        that.AJAX.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        that.AJAX.setRequestHeader("Content-Length", passData.length);
        that.AJAX.send(passData);
      }else{
        var uri=urlCall+(/\?/i.test(urlCall)?'&':'?')+passData+'&timestamp='+(that.updating.getTime());
        that.AJAX.open("GET", uri, true);
        that.AJAX.send(null);
      }
      return true;
    }
  };
  var urlCall = url;
  this.callback = callbackFunction || function (){};
}
</script>