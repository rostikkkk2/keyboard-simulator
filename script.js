$(document).ready(function(){

var allLength = $('#text');
var mistakes = 0;
var position = 0;
var text = $('#text');
$('#length').text(text.text().length);

$('#user_text').keypress(compare);

function compare(e){
  if (e.originalEvent.key == text.text()[position]) {
    $('#press_symbols').text(position + 1);
    position++;
  }else {
    e.preventDefault();
    $('#mistakes').text(mistakes++);
  }
}





});
