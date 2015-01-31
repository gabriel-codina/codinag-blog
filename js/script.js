$("document").ready(function() {
  
   $(".index").bind('click', indexclick);
   
   function indexclick(){
       $(".index").addClass("active");
   }
});
