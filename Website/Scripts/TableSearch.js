$(document).ready(function(){
  $("#filterStudents, #filterTeachers, #filterManagers").on("change", function() {
      showStudents = $("#filterStudents").is(":checked");
      showTeachers = $("#filterTeachers").is(":checked");
      showManagers = $("#filterManagers").is(":checked");

      $("#searchBar").trigger("keyup");
  });

  $("#searchBar").on("keyup", function(){
      var searchText = $(this).val().toLowerCase();
      var noneChecked = !showStudents && !showTeachers && !showManagers;
      
      $("#body tr").filter(function(){

        //this requires revision cause anybody with first name "student" will show up too, temp solution rn
          var text = $(this).text().toLowerCase();
          var isStudent = text.indexOf("student") > -1;
          var isTeacher = text.indexOf("teacher") > -1;
          var isManager = text.indexOf("manager") > -1;

          var textMatches = text.indexOf(searchText) > -1;
          var showBasedOnFilter = noneChecked || (showStudents && isStudent) || (showTeachers && isTeacher) || (showManagers && isManager);

          $(this).toggle(textMatches && showBasedOnFilter);
      });
  });
});
