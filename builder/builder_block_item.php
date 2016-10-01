<?php
foreach($block_items as $bi_row){
?>
<span class="block_component_control--title"><?php echo $bi_row['block_group_name'];?></span>
<ul class="blocks blocks_item--content">
    <?php 
    foreach($bi_row['blocks'] as $b_row){
    ?>
    <li class="blocks_item--section" data-type="header" data-id="<?php echo $b_row->block_id;?>"><img src="<?php echo base_url().'media/'.$b_row->block_thumb; ?>" /></li>
    <?php 
    }
    ?>
</ul>
<?php 
}
?>