
<?php if(have_rows(INHNI_CONTACT,'option')):?>
    <?php $contact_value=get_field(INHNI_CONTACT,'option');?>
    <p class="name"><?= $contact_value['_company_name'];?></p>
    <p class="desc"><?= htmlentities($contact_value['_description']);?></p>
    <p class="addr1"><?= $contact_value['_address_1'];?></p>
    <p class="addr2"><?= $contact_value['_address_2'];?></p>
    <p class="phone"><?= $contact_value['_phone'];?></p>
<?php endif;

