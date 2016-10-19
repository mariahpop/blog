/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(function() {

console.log("hi maria");

$('*[id^="reply_button_"]').click(function(event){
   
         showReply(event.target.id.substr(13));
     });

});

function showReply(id){
    $("#add_reply_" + id ).removeAttr('hidden');
}