<?php 

$key = $_GET['apikey'];

if ($key != "SabrinaAss"){
    echo json_encode(array('success' => 'false','msg'=>'This Key Is Invalid'));
    exit();
}
    
    array("https://i.ibb.co/vDHR2CW/0d109e4c6c1e.jpg",
    "https://i.ibb.co/1dbBcKM/b67e4e440335.jpg",
    "https://i.ibb.co/ZWtPHQL/6c83162759d4.jpg", 
    "https://i.ibb.co/zsgJNRT/c0fbdfe2910d.jpg",
    "https://i.ibb.co/GW4CCK7/1f21ec829923.jpg",
    "https://i.ibb.co/Y749k73/68baceb0a736.jpg",
    "https://i.ibb.co/SP3mt4Z/6820277516eb.jpg",
    "https://i.ibb.co/cwv1mQd/423e18fa31a2.jpg",
    "https://i.ibb.co/dbrYkdt/121d292ce473.jpg",
    "https://i.ibb.co/RPrdB2t/a4d98462ef55.jpg",
    "https://i.ibb.co/87LR14X/9a559fa180b2.jpg",
    "https://i.ibb.co/WgpzMsH/0d12ebc87d88.jpg",
    "https://i.ibb.co/TKPRN2J/dcbb9278b031.jpg",
    "https://i.ibb.co/87Vtjky/3bde0e011bb4.jpg",
    "https://i.ibb.co/bvLv06d/45bba67a29a7.jpg",
    "https://i.ibb.co/JH77wNn/2c7f08e77d76.jpg",
    "https://i.ibb.co/0cS61Ly/4346081fe8f1.jpg");
    $result_array = $array [rand(0, count($array)-1)];
    
    echo json_encode(array('success' => 'true','msg'=>$result_array));
    exit();

?>