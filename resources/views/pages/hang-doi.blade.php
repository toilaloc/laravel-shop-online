<?php

if(Auth::user()->route != 0) {

$id = Auth::user()->id;

return view("/admin/nhat-ky/.$id")->with('success','Đơn hàng của bạn đã thanh toán thành công!');
}
else {

$id = Auth::user()->id;

return view("/homeuser/nhat-ky/.$id")->with('success','Đơn hàng của bạn đã thanh toán thành công!');
}

?>
