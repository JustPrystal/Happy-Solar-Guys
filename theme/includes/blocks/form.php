<section class="form" style=" background-image: url('<?php echo($block["background_image"])?>');">
    <div class="inner">
    <?php 
        echo do_shortcode('[gravityform id="1" title="true" description="true" ajax="true"]'); 
    ?>
    </div>
</section>
<div class="choice-img-wrap"></div>
<script>

    jQuery(document).ready(function(){
        window.setInterval(() => {
            jQuery("#gform_page_1_2 .gchoice input").click(function(){
		        jQuery("#gform_next_button_1_12").click()
            })
            jQuery("#gform_page_1_3 .gchoice input").click(function(){
                jQuery("#gform_next_button_1_15").click()
            })
            $(".sunlight-choice").click(function(){
                 let index = $(this).index();
                $("#input_1_34 .gchoice").eq(index).children()[0].click();
                $("#gform_next_button_1_8").click();
            })
    if($("#gform_page_1_1").css('display') != 'none'){
        $(".gf_progressbar,.back_btn ").css("display", "none")
    }
    else{
        $(".gf_progressbar,.back_btn ").css("display", "block")
    }
         
        }, 500);  
  

    })
        
    //     $("#choice_1").click(function(){
    //             var index =  $(this).index();
    //             console.log(index);
    //         //    if($(this).parent().find($(".sunlight-choice").hasClass("active"))){
    //             $("#gform_next_button_1_22").click();
                
    //         //    }
    //         })
	// })

    // $(".gchoice gchoice_1_34_0").click()

</script>


