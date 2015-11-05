/*************************************************************
Document ready
*************************************************************/
$(document).ready(function () {
	$("#menu-item-47 a").click(showHideSubNav);//about link click
	$(".sub-menu a").unbind();//unbind subnav links

	$('#main_nav_close_btn').click(closeMainNavDrawer); 
    $('#main_nav_open_btn').click(openMainNavDrawer); 

    if($("#homepage_banner_content_holder").length>0){
        animateHomePageImage();
    }
});	


/*************************************************************
animate top image
*************************************************************/
function animateHomePageImage(){
    
    cloudsLeft($("#ha_cloud_layer_2"));
    cloudsRight($("#ha_cloud_layer_1"));


    //arm layer
    //ro$("#ha_arm_layer").animate({rotate: '-10'}, 400);
    var rotation = .7;
    var swingtime = 1600;

    function init() {
        $('#ha_arm_layer_holder').animate({rotate: rotation}, 0, function () {
            $('#ha_arm_layer_holder').css("display", "block");
            rotation *= -1;
            armSwing();
        });
    }

    function armSwing() {
        $('#ha_arm_layer_holder').animate({rotate: rotation},swingtime, "swing", function(){
             rotation *= -1;

            setTimeout((function() {
                    armSwing();
                }), 3000);  
        });
    }

    init();
}

/*************************************************************
functions to animate clouds
*************************************************************/
function cloudsLeft(cloudObject){
        //cloud layer 2
        cloudObject.stop().animate({
            left: +300
              }, 100000, "easeOutExpo", function() {
            //animation done 
            cloudsRight(cloudObject);            
    });
}

function cloudsRight(cloudObject){
    //cloud layer 1
    cloudObject.stop().animate({
        left: -300
          }, 100000, "easeOutExpo", function() {
        //animation done   
        cloudsLeft(cloudObject);         
    });    
}

/*************************************************************
expand about drawer
*************************************************************/
function showHideSubNav(event){
	event.preventDefault();
	var activeNavItem = $(event.currentTarget).parent();

	$(activeNavItem.find('.sub-menu')).slideToggle( 400, function() {
            
    });
}

/*************************************************************
close the related items drawer
*************************************************************/
function closeMainNavDrawer(event){

    //close drawer
    $("#main_nav_holder .contents").stop().animate({
        left: -1000
          }, 1000, "easeOutExpo", function() {
        //animation done            
    });

    $('#main_nav_open_btn').stop().delay(400).animate({
            left: 0
              }, 600, "easeOutExpo", function() {
            //animation done
            $("#main_nav_holder").hide();
        });
}

/*************************************************************
open the related items drawer
*************************************************************/
function openMainNavDrawer(event){
    
    $("#main_nav_holder").show();

    //fade on msg then remove
    $('#main_nav_open_btn').stop().animate({
        left: -50
          }, 600, "easeOutExpo", function() {
        //animation done
        $("#main_nav_holder .contents").stop().animate({
            left: 0
              }, 600, "easeOutExpo", function() {
            //animation done  
        });
    });
}
