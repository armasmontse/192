<?php

global $general_options;

?>
<ul class="social__lista">
    <?php if($general_options['email']): ?>
        <li class="social__item"><a href="mailto:<?php echo $general_options['email'] ?>"><i class="fas fa-envelope"></i></a></li>
    <?php endif; ?>
    <?php foreach($general_options['social'] as $network): ?>
        <?php if($network['url']): ?>
            <li class="social__item"><a href="<?php echo $network['url']; ?>" target="_blank" ><i class="<?php echo $network['icon']; ?>"></i></a></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>

