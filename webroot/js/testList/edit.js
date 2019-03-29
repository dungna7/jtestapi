/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    var table = $('#example').DataTable({
//        "processing": true,
//        "serverSide": true,
        "ajax": {
            "url": "/testlist/getAllQuestionDetail.json",
        },
        "columns": [
            {"data": true},
            {"data": "questionID"},
            {"data": "content"},
            {"data": "choiceA"},
            {"data": "choiceB"},
            {"data": "choiceC"},
            {"data": "choiceD"},
            {"data": "type"},
            {"data": "level"},
        ],
        "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell (defined by the
                // `data` option, which defaults to the column being worked with, in
                // this case `data: 0`.
                "render": function ( data, type, row ) {
                      return'<input type="checkbox" name="vehicle" checked="'+data+'" value="Bike">';
                },
                "targets": 0,
                "orderable": false
            },
        ]
    });
    $('#example tbody').on( 'click', 'input', function() {
      var data = table.row( $(this).parents('tr') ).data();
      alert( data[ "questionID"] +"'s salary is: "+ data[ "content"] );
       $.ajax({
            type: "POST",
            url: "/Testquestion/add",
            data: {"questionID":data[ "questionID"],"testID":testID},
            success: function(data){
                console.log(data);
            }
        });
    });
});