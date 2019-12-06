<html>
<ul id="chat"></ul>
<input type="text" placeholder="chatte" id="text">
<button id="send">senden</button>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
$(function(){
var eingabe = $('#send');
var text = $('#text');
var ausgabe = $('#chat');
  var socket = io.connect('http://localhost/');
  socket.on('connect', function () {

eingabe.on('click',function(){
  socket.send(text.text());
});
    socket.on('message', function (msg) {
     ausgabe.append('<li>'+msg+'</li>');
    });
  });
})
</script>
</html> 