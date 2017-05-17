<?php
    $phone_number = array_get($data, "phone_number");
    $email_address = array_get($data, "email_address");
    $website_url = array_get($data, "website_url");
    $street_address = array_get($data, "street_address");
?>

<table>
    <tr> 
        <td>Mobil</td>
        <td><a href="tel:<?= $phone_number ?>"><?= $phone_number ?></a></td>
    </tr>
    <tr>
        <td>E-post</td>
        <td><a href="mailto:<?= $email_address ?>"><?= $email_address ?></a></td>
    </tr>
    <tr>
        <td>Hemsida</td>
        <td><a href="http://<?= $website_url ?>"><?= $website_url ?></a></td>
    </tr>
    <tr>
        <td>Adress</td>
        <td><a href="#"><?= $street_address ?></a></td>
    </tr>
</table>