/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
     var table = $('#example').DataTable( {
//        "processing": true,
//        "serverSide": true,
        "ajax": {
            "url":"/testlist/getQuestionDetail/2.json",
        },
         "columns": [
            { "data": "questionID" },
            { "data": "content" },
            { "data": "choiceA" },
            { "data": "choiceB" },
            { "data": "choiceC" },
            { "data": "choiceD" },
            { "data": "type" },
            { "data": "level" },
        ]
    } );
} );