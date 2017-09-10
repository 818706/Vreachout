<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vreachout";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$phone=$_POST['phno'];
$location=$_POST['loc'];
$query="select * from hospital where Location='$location'";
$result=$conn->query($query);
 while($row=$result->fetch_assoc())
{
         echo $row['Name'].' '.$row['Phno'].'<br/>';
 }?>


<!-- Start of Async Drift Code -->
<script>
!function() {
  var t;
  if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0, 
  t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
  t.factory = function(e) {
    return function() {
      var n;
      return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
    };
  }, t.methods.forEach(function(e) {
    t[e] = t.factory(e);
  }), t.load = function(t) {
    var e, n, o, i;
    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"), 
    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js", 
    n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
  });
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('xtyxtx5um8ek');
</script>
<script>(function(v,p){
var s=document.createElement('script');
s.src='https://app.toky.co/resources/widgets/toky-widget.js?v='+v;
s.onload=function(){Toky.load(p);};
document.head.appendChild(s);
})('3076def', {"$username":"superteam","$bubble":false,"$position":"left","$text":"Call us for free!","$color":"blue"})
</script>
<!-- End of Async Drift Code -->
</body>
</html>
