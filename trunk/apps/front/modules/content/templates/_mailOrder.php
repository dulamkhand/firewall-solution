www.simpedilmongolia.mn сайтад дараах хүсэлт ирсэн байна:<br>
--------------------------------------------------------------------------------<br>
<b>Бүтээгдэхүүн:</b> <?php echo $product->getTitle().' ('.$product->getTitleEn().') - '.$product->getCode()?><br>
<b>Байгууллага:</b> <?php echo $order->getOrganization()?><br>
<b>Албан тушаал:</b> <?php echo $order->getPosition()?><br>
<b>Нэр:</b> <?php echo $order->getName()?><br>
<b>Имэйл:</b> <?php echo $order->getEmail()?><br>
<b>Утас:</b> <?php echo $order->getPhone()?><br>
<b>Зурвас:</b> "<?php echo $order->getMessage()?>"<br>
<b>Огноо:</b> "<?php echo $order->getCreatedAt()?>"<br>
--------------------------------------------------------------------------------<br>
Админ панел: <a href="http://www.simpedilmongolia.mn/admin.php">http://www.simpedilmongolia.mn/admin.php</a>