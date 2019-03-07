<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript">
window.onload=init;
function init() 
{
clock("LON",0,"london");
setTimeout("init()",1000);
}
function clock(prefix, offset, elementid)
{
  var TimezoneOffset = offset 
  var localTime = new Date()
  var ms = localTime.getTime() 
             + (localTime.getTimezoneOffset() * 60000)
             + TimezoneOffset * 3600000
  var time =  new Date(ms) 
  var date = time.getDate()
  var month = time.getMonth()+1  
  var hour = time.getHours() 
  var minute = time.getMinutes()
  var second = time.getSeconds()
  var curTime =((hour > 12) ? hour - 12 : hour)
  if(hour==0) curTime = "12"
  curTime += ((minute < 10) ? ":0" : ":") + minute
  curTime += ((second < 10) ? ":0" : ":") + second
  curTime += (hour >= 12) ? " <pm>PM</pm>" : " <am>PM</am>"
return document.getElementById(elementid).innerHTML="<hora>"+curTime+"<br></hora>";
} 

</script>

</head>
<body>
<div id='london' style="font-weight: bold;color:#f00!important;"></div>
</body>
</html>
  