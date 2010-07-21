		var TabSet = new Class({
			options: {
				activeClass: 'active', //css class
				startIndex: 0, //start with this item if no cookie or active
				tabPosition: 'top',
				topMargin: 0, 
				bottomMargin: 0, 
				leftMargin: 0 ,
				rightMargin: 0 
			},
			Implements: [Options,Events],
			initialize: function(container,tabs,contents,options) {
				//handle arguments
				this.setOptions(options);
				$(container).setStyles({
					'position': 'relative'
				});
				this.container = $(container).getParent().getParent();
				this.toggler = this.container.getParent();

				this.tabs = $$(tabs);
				
				
				this.contents = $$(contents);
				//process each tab and content
				this.tabs.each(function(tab,i) {
					this.processItem(tab,this.contents[i],i);
				},this);
				//determine the "active" tab
				var active = this.options.startIndex;
				this.activeTab = this.tabs[active];
				this.activeTab.getParent().addClass(this.options.activeClass);
				this.activeContent = this.contents[active].setStyle('height','auto');
				this.activeContent.fade('in');
				this.container.setStyle('height',this.calculateSize());
				this.toggler.setStyle('height',this.container.getSize().y + this.options.bottomMargin);
				//tabs are ready -- load it!
				this.fireEvent('load');
			},
			
			calculateSize:function(){
				var size = 0;
				
				if(this.options.tabPosition == 'top')
				{
					size = this.activeContent.getSize().y + this.options.topMargin + this.options.bottomMargin;
				
				} else if (this.options.tabPosition == 'left'){
					var minHeight = ( this.tabs.length * 40 ) + 60;
					var contentSize = this.activeContent.getSize().y + this.options.topMargin + this.options.bottomMargin;
					if(contentSize < minHeight)
					{
						size = minHeight;
					} else {
						size = contentSize;					
					}
				}
				
				return size;
			},
			
			processItem:function(tab,content,i) {
				var contentHeight = content.getScrollSize().y;
				content.setStyles({
						width:'100%',
						position:'absolute',
						display:'block',
						top:this.options.topMargin,
						left:this.options.leftMargin,
						'background-color':'#FFFFFF',
						'-moz-opacity':0,
						opacity:0,
						margin:0,
						padding:0
					});
					
				tab.getParent().setStyles({
					'cursor':'pointer'
				});

				//add a click event to the tab
				tab.addEvent('click',function(e) {
					//stop!
					if(e) e.stop();
					//if it's not the active tab
					if(tab != this.activeTab) {
						//remove the active class from the active tab
						this.activeTab.getParent().removeClass(this.options.activeClass);
						//make the clicked tab the active tab
						(this.activeTab = tab).getParent().addClass(this.options.activeClass);

						this.activeContent.fade('out');
						content.setStyle('height',content.getScrollSize().y);
						content.fade('in').get('tween').chain(function() {
							this.container.setStyle('height',this.calculateSize());
						});
						this.activeContent = content;
							this.container.setStyle('height',this.calculateSize());
							this.toggler.setStyle('height',this.container.getSize().y + this.options.bottomMargin);
					};
						
				}.bind(this));
			}
		});

/**
 *	SlideItMoo v1.1 - Image slider
 *	(c) 2007-2010 Constantin Boiangiu <http://www.php-help.ro>
 *	MIT-style license.
 **/	
var SlideItMoo=new Class(
{
	Implements:[Events,Options],
	options:{
		overallContainer:null,
		elementScrolled:null,
		thumbsContainer:null,
		itemsSelector:null,
		itemsVisible:5,
		elemsSlide:null,
		itemWidth:null,
		itemHeight:null,
		navs:{fwd:".SlideItMoo_forward",bk:".SlideItMoo_back"},
		slideVertical:false,
		showControls:1,
		transition:Fx.Transitions.linear,
		duration:800,direction:1,
		autoSlide:false,
		mouseWheelNav:false,
		startIndex:null},
		
		initialize:function(A){
			this.setOptions(A);
			this.elements=$(this.options.thumbsContainer).getElements(this.options.itemsSelector);
			this.totalElements=this.elements.length;
			if(this.totalElements<=this.options.itemsVisible){return}
			var B=this.elements[0].getSize();
			this.elementWidth=this.options.itemWidth||B.x;
			this.elementHeight=this.options.itemHeight||B.y;
			this.currentElement=0;
			this.direction=this.options.direction;
			this.autoSlideTotal=this.options.autoSlide+this.options.duration;
			if(this.options.elemsSlide==1){
				this.options.elemsSlide=null
			}
			this.begin()
		},
		
		begin:function(){
			this.addControls();
			this.setContainersSize();
			this.myFx=new Fx.Tween(this.options.thumbsContainer,{
				property:(this.options.slideVertical?"margin-top":"margin-left"),
				wait:true,
				transition:this.options.transition,
				duration:this.options.duration});
				if(this.options.mouseWheelNav&&!this.options.autoSlide)
				{
					$(this.options.thumbsContainer).addEvent("mousewheel",function(B){
						new Event(B).stop();
						this.slide(-B.wheel)
					}.bind(this))
				}
				if(this.options.startIndex&&this.options.startIndex>0&&this.options.startIndex<this.elements.length)
				{
					for(var A=1;A<this.options.startIndex;A++){
						this.rearange()
					}
				}
				if(this.options.autoSlide&&this.elements.length>this.options.itemsVisible)
				{
					this.startAutoSlide()
				}
			},
			
			resetAll:function(){
				$(this.options.overallContainer).removeProperty("style");
				$(this.options.elementScrolled).removeProperty("style");
				$(this.options.thumbsContainer).removeProperty("style");
				this.stopAutoSlide();
				if($defined(this.fwd))
				{
					this.fwd.dispose();
					this.bkwd.dispose()
				}
				this.initialize()
			},
			
			setContainersSize:function(){
				var F={};
				var E={};
				var B={};
				if(this.options.slideVertical)
				{
					E.height=this.options.itemsVisible*this.elementHeight;
					B.height=this.totalElements*(this.elementHeight+10)
				}else{
					var D=0;
					if(this.options.showControls){
						var C=this.fwd.getSize();
						var A=this.bkwd.getSize();
						var D=C.x+A.x
					}
					F.width=this.options.itemsVisible*this.elementWidth+D;
					E.width=this.options.itemsVisible*this.elementWidth;
					B.width=this.totalElements*(this.elementWidth+10)
				}
				$(this.options.overallContainer).set({styles:F});
				$(this.options.elementScrolled).set({styles:E});
				$(this.options.thumbsContainer).set({styles:B})
			},
			
			addControls:function(){
				if(!this.options.showControls||this.elements.length<=this.options.itemsVisible){
					return
				}
				this.fwd=$(this.options.overallContainer).getElement(this.options.navs.fwd);
				this.bkwd=$(this.options.overallContainer).getElement(this.options.navs.bk);
				if(this.fwd){this.fwd.addEvent("click",this.slide.pass(1,this))}
				if(this.bkwd){this.bkwd.addEvent("click",this.slide.pass(-1,this))}
			},
			
			slide:function(D){
				if(this.started){
					return
				}
				this.direction=D?D:this.direction;
				var A=this.currentIndex();
				if(this.options.elemsSlide&&this.options.elemsSlide>1&&this.endingElem==null){
					this.endingElem=this.currentElement;
					for(var B=0;B<this.options.elemsSlide;B++){
						this.endingElem+=D;
						if(this.endingElem>=this.totalElements){
							this.endingElem=0
						}
						if(this.endingElem<0){
							this.endingElem=this.totalElements-1
						}
					}
				}
				var C=new Hash();
				var E=0;
				if(this.options.slideVertical){
					C.include("margin-top",-this.elementHeight);
					E=this.direction==1?-this.elementHeight:0
				}else{
					C.include("margin-left",-this.elementWidth);
					E=this.direction==1?-this.elementWidth:0
				}
				if(this.direction==-1){
					this.rearange();
					$(this.options.thumbsContainer).setStyles(C)
				}
				this.started=true;
				this.myFx.start(E).chain(function(){
					this.rearange(true);
					if(this.options.elemsSlide){
						if(this.endingElem!==this.currentElement){
							if(this.options.autoSlide){
								this.stopAutoSlide()
							}
							this.slide(this.direction)
						}else{
							if(this.options.autoSlide){
								this.startAutoSlide()
							}
							this.endingElem=null
						}
					}
				}.bind(this));
				this.fireEvent("onChange",A)
			},
			
			rearange:function(A){
				if(A){
					this.started=false
				}
				if(A&&this.direction==-1){
					return
				}
				this.currentElement=this.currentIndex(this.direction);
				var B=new Hash();
				if(this.options.slideVertical){
					B.include("margin-top",0)
				}else{
					B.include("margin-left",0)
				}
				$(this.options.thumbsContainer).setStyles(B);
				if(this.currentElement==1&&this.direction==1){
					this.elements[0].injectAfter(this.elements[this.totalElements-1]);
					return
				}
				if((this.currentElement==0&&this.direction==1)||(this.direction==-1&&this.currentElement==this.totalElements-1)){
					this.rearrangeElement(this.elements.getLast(),this.direction==1?this.elements[this.totalElements-2]:this.elements[0]);
					return
				}
				if(this.direction==1){
					this.rearrangeElement(this.elements[this.currentElement-1],this.elements[this.currentElement-2])
				}else{
					this.rearrangeElement(this.elements[this.currentElement],this.elements[this.currentElement+1])
				}
			},
			
			rearrangeElement:function(B,A){
				this.direction==1?B.injectAfter(A):B.injectBefore(A)
			},
			
			currentIndex:function(){
				var A=null;
				switch(this.direction){
					case 1:
						A=this.currentElement>=this.totalElements-1?0:this.currentElement+this.direction;
						break;
						
					case -1:
						A=this.currentElement==0?this.totalElements-1:this.currentElement+this.direction;
						break
				}
				return A
			},
			
			startAutoSlide:function(){
				this.startIt=this.slide.bind(this).pass(this.direction|1);
				this.autoSlide=this.startIt.periodical(this.autoSlideTotal,this);
				this.isRunning=true;this.elements.addEvents({
					mouseenter:function(){
						$clear(this.autoSlide);
						this.isRunning=false
					}.bind(this),
					mouseleave:function(){
						this.autoSlide=this.startIt.periodical(this.autoSlideTotal,this);
						this.isRunning=true}.bind(this)
					}
				)},
		
		stopAutoSlide:function(){
			$clear(this.autoSlide);
			this.isRunning=false
			}
});



		var Site = {
	
			start: function(){

				// Order is important! Zebratable, then Tabs, then Togglers
				if($('bloc_search')) Site.advancedSearch();
				if($$('.zebraTable')) Site.initZebraTable();
				//if($('horizontal')) Site.horizontal();
				//if($('accordion')) Site.accordion();
				if($$('a.ajoutFavoris')) Site.ajoutFavoris();
				if($$('a.suppressionFavoris')) Site.suppressionFavoris();
				if($$('div.ajaxPages')) Site.ajaxPages();
				if($$('.boxSlide')) Site.initSlider();
				if($$('div.toggledbox')) Site.boxtoggler();
				if($$('.boxTabs')) Site.initTabs();
				if($$('.boxTabsLeft')) Site.initTabsLeft();
			},
			
			initTabs : function(){
				$$('.boxTabs').each( function(tabs, i) {
					var tabset = new TabSet(tabs.id, '#' + tabs.id + ' .boxTabsNav li a','#' + tabs.id + ' .tabs', {topMargin : 50, bottomMargin:5, tabPosition: 'top'});

				});
			},
			
			initTabsLeft : function(){
				$$('.boxTabsLeft').each( function(tabs, i) {
					var tabset = new TabSet(tabs.id, '#' + tabs.id + ' .boxTabsNav li a','#' + tabs.id + ' .tabs', {topMargin : 10, bottomMargin:10, leftMargin:220, tabPosition: 'left'});

				});
			},

			initSlider : function(){
				$$('.boxSlide').each( function(slider, i) {

					var elementScrolled = slider.getFirst(' .slide');
					var thumbsContainer = elementScrolled.getFirst(' .items');
					alert(thumbsContainer.id);

					new SlideItMoo({
						overallContainer: slider.id,
						elementScrolled: elementScrolled.id,
						thumbsContainer: 'program_slide_items',		
						itemsVisible:1,
						duration:300,
						itemsSelector: '.item',
						itemWidth: 150,
						showControls:1,
						itemsVisible:4,
						startIndex:1,
						navs:{fwd:'.NavSlideLeft',bk:'.NavSlideRight'},
						onChange: function(index){}
					
					});

				});
			},

			initZebraTable : function(){
			
				$$('.zebraTable').each( function(table, i) {
					var zebraHtmlTable = new HtmlTable($(table.id), { classZebra: "odd", zebra:true});
				});
			},
			
			
			
			showModalBox: function(sender,message,style){
				// Creates the modal box system used throughout the site
				
				if(!style) style = 'info';
				
				var modalBoxOverlay = $('modalBoxOverlay');
		
				if (!modalBoxOverlay)
				{
					modalBoxOverlay = new Element('div').setProperty('id', 'modalBoxOverlay').setStyles({
						width:'100%',
						height:'100%',
						position:'absolute',
						top:0,
						left:0,
						'background-color':'#FFFFFF',
						'-moz-opacity':.6,
						opacity:.6,
						'z-index' : 10
					}).injectInside($(document.body));
					
				}
				var modalBox = $('modalBox');
				if (!modalBox)
				{
					var modalBox = new Element('div').setProperty('id', 'modalBox').setStyles({ 
						opacity:0, 
						display:'block',
						position:'absolute',
						top:'30px',
						left:'40%',
						'z-index' : 11

					}).injectInside($(document.body));
					modalBox.addClass('box_320');

					modalBoxTitle = new Element('div').setProperty('id', 'modalBoxTitle').injectInside($('modalBox'));
					modalBoxTitle.addClass('boxTopGris');
					boxBottom = new Element('div').setProperty('id', 'boxBottom').injectInside($('modalBox'));
					boxBottom.addClass('boxBottom');
					modalBox.setStyles({ 
						opacity:0, 
						display:'block' 
					}); 					
					boxShadow = new Element('div').setProperty('id', 'boxShadow').injectInside($('boxBottom'));
					boxShadow.addClass('ombreBox3');
					
				}
				
				var modalBoxTitle = $('modalBoxTitle');
				var boxBottom = $('boxBottom');
				var boxShadow = $('boxShadow');
				var modalBoxMessage  = $('modalBoxMessage');
				
				var scroll = window.getScroll().y;
	
				if(!modalBoxMessage)  var modalBoxMessage = new Element('div').setProperty('id', 'modalBoxMessage').injectInside($('boxShadow'));
				modalBoxMessage.set('html', '<p>' +message + '</p><div class="clear">&nbsp;</div>');
				modalBoxTitle.set('html', '<h1><img src="tl_files/fr/titre/boxTitle_alerte.png" alt="Alerte"></h1>');
				
				if(style == 'cancelDelete')
				{
					modalBoxCancelBtn = new Element('a').setProperty('id', 'modalBoxCancelBtn').inject($('boxShadow'));
					modalBoxCancelBtn.set('html', 'Cancel');
					modalBoxActionBtn = new Element('a').setProperty('id', 'modalBoxActionBtn').inject($('boxShadow'));
					modalBoxActionBtn.set('html', 'Delete');
					
					
					modalBoxCancelBtn.addEvent('click', function() { Site.closeModalBox(sender,'cancelled');} );
					modalBoxActionBtn.addEvent('click', function() {  Site.closeModalBox(sender,'confirmed');});
					
					var modalBoxCancelBtn = $('modalBoxCancelBtn');
					var modalBoxActionBtn = $('modalBoxActionBtn');
					modalBoxActionBtn.addClass('delete');
									
				}
				modalBox.setStyle('top', (scroll + 300) + 'px');
				modalBox.setStyles({
						'-moz-opacity':0,
						opacity:0,
					});
				modalBox.show();
				modalBoxOverlay.show();
				modalBoxOverlay.setStyles({
						'-moz-opacity':.6,
						opacity:.6,
					});
				modalBox.fade('in');
								
			},
						
			closeModalBox: function(sender,event) {
				var modalBox = $('modalBox');
				var modalBoxOverlay = $('modalBoxOverlay');
				var modalBoxCancelBtn = $('modalBoxCancelBtn');
				var modalBoxActionBtn = $('modalBoxActionBtn');
				modalBox.hide();
				modalBoxOverlay.hide();
				if(modalBoxCancelBtn) modalBoxCancelBtn.dispose().destroy();
				if(modalBoxActionBtn) modalBoxActionBtn.dispose().destroy();
				sender.fireEvent(event);			
			},
			
			
			ajoutFavoris: function(){
				var roar = new CenteredRoar({ 
					duration: 3000, 
					margin: {x: 20, y: 50},
					offset: 10
				}); 
				
				$$('a.ajoutFavoris').each( function(favBtn, i) {

					
					favBtn.addEvent('click', function(e){
						e.stop();
					    var req = new Request.JSON({  
					        method: 'get',  
					        url: favBtn.href,  
							onSuccess: function(response) {
						
								// Reload the target element with content received.
								var content = response.content;
								if (content!==''){
									roar.alert('+1',content);
									favBtn.hide();
								}
								
								// Process any post action
								var postAction = response.postAction;
								if(postAction !==''){
									eval(postAction);
								}					
				
								// Return any value to calling script
								var returnedValue = response.returnedValue;
								if(returnedValue !==''){
									return returnedValue;
								}					
							}
						}).send();  

						return false;
					});
				});

			},
			
			suppressionFavoris: function(){
				
				$$('a.suppressionFavoris').each( function(delBtn, i) {

					
					delBtn.addEvent('click', function(e){
						
						row = delBtn.getParent();
						row = row.getParent();
						isRowOdd = row.hasClass('odd');
						
						if(isRowOdd)
						{	
							row.swapClass('odd','ToDelete');						
						} else {
							row.addClass('ToDelete');						
						}
						
						Site.showModalBox(delBtn, '<?php echo $GLOBALS['TL_CONFIG']['bdi']['ajax']['deleteMsg']; ?>', 'cancelDelete')
						e.stop();

						return false;
					});
					
					delBtn.addEvent('cancelled', function(e){
					
						if(isRowOdd)
						{	
							row.swapClass('ToDelete','odd');						
						} else {
							row.removeClass('ToDelete');						
						}					
					});
					delBtn.addEvent('confirmed', function(e){

						var roar = new Roar({ 
							duration: 3000,
							position: 'lowerRight', 
							margin: {x: 20, y: 50},
							offset: 10
						}); 

					    var req = new Request.JSON({  
							url: delBtn.href,  
							method: 'get',
							onRequest: function() {
								new Fx.Tween(row,{
									duration:300
								}).start('background-color', '#fb6c6c');
							},
							onSuccess: function(response) {

								new Fx.Tween(row,{
									duration:300,
									property: 'opacity',
									onComplete: function() {
										row.dispose();
										zebraSortableTable.updateZebras();
								}
							}).start(0);
							var content = response.content;
							if (content!==''){
								roar.alert('-1',content);
							}

							}
						}).send();
					});
					
				});

			},

			ajaxPages: function(){
				var ajaxPages = $$('div.ajaxPages');
								
				ajaxPages.each( function(page, i){
					var links = page.getElements('div.ajaxPagination li a');
					
					links.each( function(link, i) {
	
						link.onclick = function(){

						    var req = new Request.JSON({  
						        method: 'get',  
						        url: link.href + '&ajax=true',  
								onRequest: function(){
									page.fade('out');								
								},
								
								onSuccess: function(response) {
							
									// Reload the target element with content received.
									var content = response.content;
									if (content!==''){
										page.set('html', content);
										page.fade('in')
										Site.ajaxPages();
									}
									
									// Process any post action
									var postAction = response.postAction;
									if(postAction !==''){
										eval(postAction);
									}					
								}
							}).send();  
							
							return false;
						
						}
						
						
					});
				});
				

			},

			

			boxtoggler: function(){
				var list = $$('div.toggledbox div.boxBottom');
				var headings = $$('div.boxtoggler');
				var collapsibles = new Array();
				
				headings.each( function(heading, i) {

					var collapsible = new Fx.Slide(list[i], { 
						duration: 500, 
						transition: Fx.Transitions.linear,
						onComplete: function(request){ 
							var open = request.getStyle('margin-top').toInt();
							if(open >= 0) new Fx.Scroll(window).toElement(headings[i]);
						}
					});
					
					collapsibles[i] = collapsible;
					
					heading.onclick = function(){

						if(heading.hasClass('open'))
						{
							heading.swapClass('open', 'close');
						} else {
							heading.swapClass('close', 'open');
						
						}						
						collapsible.toggle();
						return false;
					}
					
					collapsible.hide();
					
				});
				headings.each( function(heading, i) {
						collapsibles[i].show();
						var span = $('span', heading);
						if(span) span.setHTML('-');
					});

			},
			
			advancedSearch: function(){
				var searchBlock = $('advancedSearch');
				var searchToggler = $('searchtoggler');
				
				var searchBox = new Fx.Slide(searchBlock, { 
					duration: 500, 
					transition: Fx.Transitions.linear,
					onComplete: function(request){ 
						var open = request.getStyle('margin-top').toInt();
						if(open >= 0) new Fx.Scroll(window).toElement($('advancedSearch'));
					}
				});
				
				searchToggler.addEvent('click', function(){

						if(searchToggler.hasClass('open'))
						{
							searchToggler.swapClass('open', 'close');
						} else {
							searchToggler.swapClass('close', 'open');
						
						}						
						searchBox.toggle();
						return false;
				});
				
				searchBox.hide();

			},
			
			
			accordion: function(){
				var list = $$('#accordion li div.collapse');
				var headings = $$('#accordion li h3');
				var collapsibles = new Array();
				var spans = new Array();
				
				headings.each( function(heading, i) {

					var collapsible = new Fx.Slide(list[i], { 
						duration: 500, 
						transition: Fx.Transitions.quadIn
					});
					
					collapsibles[i] = collapsible;
					spans[i] = $E('span', heading);
					
					heading.onclick = function(){
						var span = $E('span', heading);

						if(span){
							var newHTML = span.innerHTML == '+' ? '-' : '+';
							span.setHTML(newHTML);
						}
						
						for(var j = 0; j < collapsibles.length; j++){
							if(j!=i) {
								collapsibles[j].slideOut();
								if(spans[j]) spans[j].setHTML('+');
							}
						}
						
						collapsible.toggle();
						
						return false;
					}
					
					collapsible.hide();
					
				});
			},
			
			requestOld: function(el,target,ctr,act,params,jsparams)
			{
				
				if(!$defined(jsparams)) {jsparams = '';}
				
				/* make the ajax call */  
			    
			    var req = new Request.JSON({  
			        method: 'post',  
			        url: '/system/modules/xkn_ajax/AjaxDispatcher.php',  
			        data: { 'act' : act, 'ctr' : 'Ajax' + ctr, 'params' : params, 'jsparams' : jsparams, 'isXkn' : 'true'},  
					onSuccess: function(response) {
				
						// Reload the target element with content received.
						var content = response.content;
						if (content!==''){
							$(target).set('html', content);
						}
						
						// Process any post action
						var postAction = response.postAction;
						if(postAction !==''){
							eval(postAction);
						}					
		
						// Return any value to calling script
						var returnedValue = response.returnedValue;
						if(returnedValue !==''){
							return returnedValue;
						}					
					}
				}).send();  
			}			
			
		};
		window.addEvent('domready', Site.start);

