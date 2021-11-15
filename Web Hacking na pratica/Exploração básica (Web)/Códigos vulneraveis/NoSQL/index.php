<form action="/" method="POST">
    <input type="text" name="texto[]" placeholder="campo 1">
    <input type="text" name="texto[]" placeholder="campo 2"> 
    <input type="text" name="teste[]" placeholder="teste"><!-- isso para o php significa que estamos enviando um array-->
    <input type="submit" value="enviar">
</form>
<?php
if(isset($_POST['texto']) and !empty($_POST['texto'])){
    print_r($_POST['texto']);
    print_r($_POST['teste']);
}
?>