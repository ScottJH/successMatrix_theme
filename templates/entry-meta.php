<?php
 
if(get_field('guest'))
{
	echo '<p><span class="pod-guest">Guest: ' . get_field('guest') . '</span></p>';
}
 
?>