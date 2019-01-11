<?php

class WebsocketTest
{
    public $server;
    public function __construct()
    {
        $this->server = new Swoole\WebSocket\Server("0.0.0.0", 9501);
        $this->server->on('open', function (swoole_websocket_server $server, $request) {
            echo "server: handshake success with fd{$request->fd}\n";
        });
        $this->server->on('message', function (Swoole\WebSocket\Server $server, $frame) {
            echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";

            $redis = new Swoole\Coroutine\Redis();
            $redis->connect(__DOCKER_REDIS__, 6379);
            $redis->auth('Hjd123!@#');
            $val = $redis->set('key',333);
            $val = $redis->get('key');
            var_dump($val);

            $server->push($frame->fd, "this is server");
        });
        $this->server->on('close', function ($ser, $fd) {
            echo "client {$fd} closed\n";
        });
        // $this->server->on('request', function ($request, $response) {
        //     // 接收http请求从get获取message参数的值，给用户推送
        //     // $this->server->connections 遍历所有websocket连接用户的fd，给所有用户推送
        //     foreach ($this->server->connections as $fd) {
        //         $this->server->push($fd, $request->get['message']);
        //     }
        // });
        $this->server->on('request', function (swoole_http_request $request, swoole_http_response $response) {
            $response->end(<<<HTML
            <h1>Swoole WebSocket Server</h1>
            <script>
        var wsServer = 'ws://127.0.0.1:9501';
        var websocket = new WebSocket(wsServer);
        websocket.onopen = function (evt) {
            console.log("Connected to WebSocket server.");
            // for(var i=0;i<100;i++){
            websocket.send('hello'+(Date.parse( new Date())));
        // }
        };
        websocket.onclose = function (evt) {
            console.log("Disconnected");
        };
        websocket.onmessage = function (evt) {
            console.log('Retrieved data from server: ' + evt.data);
        };
        websocket.onerror = function (evt, e) {
            console.log('Error occured: ' + evt.data);
        };

        </script>
HTML
            );
        });

        $this->server->start();
    }
}
new WebsocketTest();
