<?php
namespace CodeKitchen\SimpleProtobuf;

class Protobuf {
    public function parse($input, $proto)
    {
        ob_start();
        passthru('../vendor/bin/protoc --decode transit_realtime.FeedMessage gtfs-realtime.proto < gtfs.pb');
        $result = ob_get_flush();
    }
}
  