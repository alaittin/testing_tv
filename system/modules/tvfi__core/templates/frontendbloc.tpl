<div class="box_<?php echo $this->bloc_width; ?> <?php echo $this->bloc_mode; ?> <?php echo $this->bloc_float; ?> <?php echo $this->class; ?>">

    <div class="boxTop<?php echo $this->bloc_color; ?>">
        <h1><?php if($this->bloc_useImageHeader): ?><img src="<?php echo $this->bloc_headerSRC; ?>" alt="<?php echo $this->headline ? $this->headline : ''; ?>" /><?php else: ?><?php echo $this->headline ? $this->headline : ''; ?><?php endif; ?></h1>
    </div><!-- fin top -->
    
    <div class="boxBottom">
 		<?php if($this->bloc_ombre): ?><div class="<?php echo $this->bloc_ombre; ?>"><?php endif; ?>
 		
 			<?php echo $this->content; ?>
        
 		<?php if($this->bloc_ombre): ?></div><?php endif; ?>
        <div class="clear">&nbsp;</div>
      
    
    </div><!-- fin bottom -->
    

</div><!-- fin box -->
<?php echo $this->bloc_moo_script; ?>
