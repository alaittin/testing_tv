var doAjax = function(e){
  e.stop(); // prevent the form from submitting

  new Request({
    url: window.location + '?isAjax=1',
    method: 'post',
    data: this,
    onRequest: function(){
      $('cd_collection').fade('out');
    },
    onSuccess: function(r){
      // the 'r' is response from server
      $('cd_collection').set('html', r).fade('in');
    }
  }).send();
}

addEvent('domready', function(){
  $('form').addEvent('submit', doAjax);
});
