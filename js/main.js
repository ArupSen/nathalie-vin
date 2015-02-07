// Site specific js code
(function(){
  'use strict';
	jQuery('#carousel').carouFredSel({
				width: '100%',
				items: {visible: 3,
					start: 0 
				},
				scroll: {
					items: 1,
					duration: 600,
					timeoutDuration: 3000
				},
				prev: '#prev',
				next: '#next'
			});
}());
