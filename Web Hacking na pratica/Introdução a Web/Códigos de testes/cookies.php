<?php
setcookie('cookie_de_teste', 'teste123456', time() + 360, "/",'0.0.0.0',false,True);
echo "O valor do cookie de teste é = {$_COOKIE['cookie_de_teste']}";
?>
<script>alert(document.cookie)</script>