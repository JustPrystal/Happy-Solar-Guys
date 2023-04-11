<section class="form" style=" background-image: url('<?php echo($block["background_image"])?>');">
    <div class="inner">
    <?php 
        echo do_shortcode('[gravityform id="1" title="true" description="true" ajax="true"]'); 
    ?>
    </div>
</section>
<div class="choice-img-wrap"></div>
<script>
    // var topLock = function(){

    // } 
    // // var bruhInterval = ;
    // var stop = 
    // var stopLock =  function(){ 
    //     for (let i = 0; i < 10; i++) {
    //         setTimeout(() => {
    //             $('html, body').animate({scrollTop:0}, 'slow');
    //             console.log("ssss")
    //         }, 100);
    //     }
    // }
    // var i = 1;                  //  set your counter to 1

    // function loop() {         //  create a loop function
    // setTimeout(function() {   //  call a 3s setTimeout when the loop is called
    //     $('html, body').animate({scrollTop:0}, "slow");
    //     console.log("ssss")   //  your code here
    //     i++;                    //  increment the counter
    //     if (i < 500) {           //  if the counter < 10, call the loop function
    //     loop();             //  ..  again which will trigger another 
    //     }                       //  ..  setTimeout()
    // }, 20)
    // }

 

    // setInterval(topLock, 100)

    // stopLock();


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
            if($("#gform_page_1_1").css('display') !== 'none'){
                $(".gf_progressbar,.back_btn ").css({"opacity": "0", "pointer-events": "none"})
            }
            else{
                $(".gf_progressbar,.back_btn ").css({"opacity": "1", "pointer-events": "all"})
            }
            if($("#gform_page_1_8").css("display") == "flex"){
				$('.form').css('--myVar', '-370px');
			}else{
				$('.form').css('--myVar', '0px');
			}
            if($(".appointment_widgets--confirmation").length){
                $("#gform_submit_button_1").fadeIn()
            }
            // $("#gform_page_1_7 .gform_next_button").click(function(){
            //     setTimeout(() => {
            //         let first_name = $(".name_first input").val()
            //         let last_name = $(".name_last input").val()
            //         let email= $(".ginput_container_email input").val()
            //         let phone = $(".ginput_container_phone input").val()
            //         $(".hl_widget-step2 #first_name").value = `${first_name}`
            //         $(".hl_widget-step2 #last_name").value = `${last_name}`
            //         $(".hl_widget-step2 #phone").value = `${phone}`
            //         $(".hl_widget-step2 input[type='email']").value = `${email}`
            //         console.log(first_name, last_name, email, phone)
            //     }, 3000);
            // })
        }, 500);  
        // setTimeout(() => {
        //     $(".gform_next_button").click(function(){
        //         $('html, body').animate({scrollTop:0}, "slow");
        //         setTimeout(() => {
        //             $("#gform_page_1_2 .gfield_radio .gchoice").click(function(){
        //                 $('html, body').animate({scrollTop:0}, "slow");
        //                 setTimeout(() => {
        //                     $("#gform_page_1_3 .gfield_radio .gchoice").click(function(){
        //                         $('html, body').animate({scrollTop:0}, "slow");
        //                     })
        //                 }, 1000);
        //             })
        //         }, 1000);
        //     })
        // }, 1000);

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


