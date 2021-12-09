<style>
    h1 {
        text-align: center;
        font-size: 29px;
        color: red;
        padding: 100px 0px;
    }

    header {
        display: none;
    }

    footer {
        display: none;
    }

    .copyright-top {
        display: none;
    }

    .copyright {
        display: none;
    }
</style>
<?php


// var_dump($_GET['response_code']) ;
$newstring = substr($_GET['response_code'], -3);

// debug($newstring);

if ($newstring == "000") :

?>
    <script>
        location.href = '<?= l('thankyou') ?>';
    </script>
<? elseif ($newstring == "093") : ?>

    <h1>Service inactive.</h1>

<? else : ?>
    <h1>Try Again</h1>
<? endif; ?>