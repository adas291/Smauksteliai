$(document).ready(function(){
    $('#plusBtn').on('click', function(){
        var timeInput = $('#timeinput').val();
        var checkedDays = [];
        $('.btn-check:checked').each(function(){
            checkedDays.push($(this).attr('id'));
        });
        if (checkedDays.length > 0) {
            var table = $('.table tbody');
            var rowFound = false;
            
            for (var i = 0; i < checkedDays.length; i++) {
                table.find('tr').each(function() {
                    var row = $(this);
                    var day = checkedDays[i];
                    var cell = row.find('.col-' + day);
                    if (cell.text() === '') {
                        cell.text(timeInput);
                        rowFound = true;
                        return false;
                    }
                });

                if (!rowFound) {
                    var newRow = $('<tr>');
                    for (var j = 1; j <= 5; j++) {
                        var newCell = $('<td>').addClass('col-' + j);
                        if (checkedDays[i] == j){
                            newCell.text(timeInput);
                        }
                        newRow.append(newCell);
                    }
                    table.append(newRow);
                }
            }
            
            
        }
    });
});
