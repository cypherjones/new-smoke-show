<div class="social">
  <ul>
    <li>
      <?php 

      $facebook  = get_field('facebook_url', 'option');
      $twitter   = get_field('twitter_url', 'option');
      $pinterest = get_field('pinterest_url', 'option');
      $instagram = get_field('instagram_url', 'option');
      $mobile    = get_field('mobile', 'option');
      $email     = get_field('email', 'option');

      ?>
        
      <?php if (! empty($facebook)) : ?>

        <div class="circle">
          <a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
        </div>

      <?php endif; ?>
    </li>
    <li>
        
      <?php if (! empty($twitter)) : ?>

        <div class="circle">
          <a href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a>
        </div>

      <?php endif; ?>
    </li>
    <li>
        
      <?php if (! empty($pinterest)) : ?>

        <div class="circle">
          <a href="<?php echo $pinterest ?>"><i class="fa fa-pinterest"></i></a>
        </div>

      <?php endif; ?>
    </li>
    <li>
        
      <?php if (! empty($instagram)) : ?>

        <div class="circle">
          <a href="<?php echo $instagram ?>"><i class="fa fa-instagram"></i></a>
        </div>

      <?php endif; ?>
    </li>
  </ul>
</div>