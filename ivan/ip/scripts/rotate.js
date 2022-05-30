$(document).ready(function(){
    jQuery("#mas5").rotate({ bind:{
       mousedown:function(){ $(this).rotate({animateTo: -90}) },     
    }});
    jQuery("#mas10").rotate({ bind:{
       mousedown:function(){ $(this).rotate({animateTo: -90}) },
    }});
    jQuery("#mas15").rotate({ bind:{
       mousedown:function(){ $(this).rotate({animateTo: -90}) },
    }});
});