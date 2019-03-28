/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    $('#example').DataTable( {
//        "processing": true,
//        "serverSide": true,
        "ajax": {
            "url":"/testlist/getQuestionDetail/2.json",
        }
    } );
} );