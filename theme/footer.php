<?php 
 $copyright = get_field("copyright", "option");
 $page_links = get_field("page_links", "option");
 $footer_text = get_field("footer_text", "option");
?>
<footer>
    <div class="back_btn">
        <button>< Back</button>
    </div>
    <div class="inner">
        <div class="top">
            
            <div class="f-links">
            <div class="copyright"><?php echo ($copyright);?></div>
                <?php foreach($page_links as $link){ ?>
                    <a href="<?php echo $link["page_link"]["url"] ;?>"><?php echo $link["page_link"]["title"] ;?></a>
                    <?php
                    }?>
            </div>
        </div>
        <div class="footer-text">
            <?php echo $footer_text ;?>
        </div>
    </div>
</footer>
  
       
    
    </div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>
