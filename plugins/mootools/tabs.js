window.addEvent('domready', function(){
	if ($('tabs-nav')){	
	$('tabs-nav').getElements('li').each(function(i) {
		i.addEvent('click', function(event){
			event.stop();
			Tab(i.get('id'));
		});
	});
	}
});

function Tab(key){
	$('tabs-nav').getElements('li').each(function(i) {
		i.removeClass('active');
	})
	$(key).addClass('active');

	$('main').getElements('fieldset').each(function(i) {
		i.style.display='none';
	})

	var str = "pal_" + key;
	$('main').getElementById(str).style.display='block';
	$('main').getElementById(str).className = 'tl_box block';

/* Close ajax call for now! */
/*	var req = new Request({
		url: 'tab-change.php?tab=' + key,
		method: 'get',
		onRequest: function() {
			$(key + '-loading').set('html', '<img src=\'images/ajax-loader.gif\' width=\'16\' height=\'16\' alt=\'Loading\' />');
		},
		onSuccess: function(responseText) {
			$(key + '-loading').set('html','');
			$('tabs-content').set('html',responseText);
		}
	}).send();
*/	
}