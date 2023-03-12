$(document).ready(function(){
    $('#role').on('change', function() {
        if ( this.value == 'teacher')
        {
            $("#stud").hide();
            $("#teach").show();
        }
        else  if ( this.value == 'student')
        {
            $("#teach").hide();
            $("#stud").show();
        }
        else  
        {
            $("#teach").hide();
            $("#stud").hide();
        }
    })
})