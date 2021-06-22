
//Listener for nav buttons
//Switch to a specific function
$("nav a").click(function(){
    switch(this.id){
        case("home"):
            $("section").hide();
            $("#homesec").show();
            break;
        case("about"):
            $("section").hide();
            $("#aboutsec").show();
            break;
        case("search"):
            $("section").hide();
            $("#searchsec").show();
            break;
        case("calculator"):
            $("section").hide();
            $("#calculatorsec").show();
            break;

    }
});

//Call Python script
$(".btn").click(function(){ 
    console.log("Python Button Pressed");
 
    $.ajax({ 
         type:'get', 
         url:"/server/python/test.py", 
         cache:false, 
         async:'asynchronous', 
         dataType:'json', 
         success: function(data) { 
           console.log(JSON.stringify(data)) 
         }, 
         error: function(request, status, error) { 
           console.log("Error: " + error) 
         } 
      }); 
   }); 