var app = require('http').createServer();
var io = require('socket.io')(app);
var Redis = require('ioredis');
var redis = new Redis();
app.listen(9000, function() {
    console.log('Server is running!');
});
function handler(req, res) {
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.writeHead(200);
    res.end('');
}
io.on('connection', function(socket) {
    //
});
// redis.subscribe('private-dummyChannel');
 redis.psubscribe('*', function(err, count) {
     console.log("Hit on here");
     console.log(err);
     console.log(count);
 });
redis.on('message', function(channel, message) {
    message = JSON.parse(message);
    console.log('Channel is ' + channel + ' and message is ' + message);
    io.emit(channel, message.data);
});
