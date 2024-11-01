<?php
    $songID = intval($_GET['id']);

    // $xmlurl = 'http://www.xiami.com/song/playlist/id/'.$songID;
    // $xmlurl = 'http://www.xiami.com/song/playlist/id/'.$songID.'/object_name/default/object_id/0/cat/xml';
    // $xmlContents = trim(@file_get_contents($xmlurl));
    // $pos1 = strpos($xmlContents, '<location>') + strlen('<location>');
    // $pos2 = strpos($xmlContents, '</location>');
    // $location = substr($xmlContents, $pos1, $pos2 - $pos1);
    // echo $location;

    // $jsonURL = 'http://www.xiami.com/song/playlist/id/'.$songID.'/object_name/default/object_id/0/cat/json?callback=';
    // $jsonContents = trim(@file_get_contents($jsonURL));
    // $jsonData = @json_decode($jsonContents);
    // echo $jsonData->data->trackList[0]->location;

    // $jsonURL = 'http://www.duoluohua.com/api/xiami/getsong/?action=getsong&appname=xiamimusicscript&version=1.1.0&songid='.$songID;
    $jsonURL = 'http://api.erohentai.xxx/xiami/gethqsong.php?id='.$songID;
    $jsonContents = trim(@file_get_contents($jsonURL));
    $jsonData = @json_decode($jsonContents);
    echo $jsonData->location;
?>