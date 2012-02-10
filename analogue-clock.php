<center>
<!-- $Id$ -->
<?php
  $clockOffsetX = 25;
  $clockOffsetY = 2;
?>
<div style="position: relative;">
  <img src="<?php echo Yii::app()->request->baseUrl;?>/images/analogue-clock-base.png">
    <div class="hourHand" style="width:104px;height:104px;background-image:url(<?php echo Yii::app()->request->baseUrl;?>/images/analogue-clock-hands.png);background-repeat:no-repeat;position:absolute;"></div>
    <div class="minuteHand" style="width:104px;height:104px;background-image:url(<?php echo Yii::app()->request->baseUrl;?>/images/analogue-clock-hands.png);background-repeat:no-repeat;position:absolute;"></div>
    <div class="secondHand" style="width:104px;height:104px;background-image:url(<?php echo Yii::app()->request->baseUrl;?>/images/analogue-clock-hands.png);background-repeat:no-repeat;position:absolute;"></div>
</div>
<script type="text/javascript">
   /*<![CDATA[*/
   $(document).ready(function() {
       var left = $(".clock_window").width()/2-104/2;
       $(".hourHand").css('left', left+'px');
       $(".minuteHand").css('left', left+'px');
       $(".secondHand").css('left', left+'px');
       var top = $(".clock_window").height()/2-104/2;
       $(".hourHand").css('top', top+'px');
       $(".minuteHand").css('top', top+'px');
       $(".secondHand").css('top', top+'px');
       animation();
       setInterval(function(){
           animation();
         }, 1000);
       function animation() {
	 var currentTime = new Date();
	 var s = currentTime.getSeconds();
	 var m = currentTime.getMinutes();
	 var h = Math.floor(5*(currentTime.getHours()%12)+m/12);
	 $('.hourHand').css('background-position', -h*104+'px 0px');
	 $('.minuteHand').css('background-position', -m*104+'px -104px');
	 $('.secondHand').css('background-position', -s*104+'px -208px');
       }
     });
/*]]>*/
</script>
</center>
