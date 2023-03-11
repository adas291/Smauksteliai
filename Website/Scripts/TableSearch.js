$(document).ready(function(){
    $("#searchBar").on("keyup",function(){
      var value= $(this).val().toLowerCase();
      $("#body tr").filter(function(){
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      })
    })
})