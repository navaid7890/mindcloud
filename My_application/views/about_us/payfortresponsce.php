<h1>Responce here</h1>
<?php


// var_dump($_GET['response_code']) ;


$newstring = substr($_GET['response_code'], -3);

if ($newstring == 000) {

?>
<script>

location.href = '<?=l('thankyou')?>';
</script>

<?
}

?>