var http = reuire("http");
http
.createServer(function (red, res){
    res.writeHead(200, {"content-type": "text/plain"});
    res.write("Hello World!");
    res.end();
})
.listen(3000);