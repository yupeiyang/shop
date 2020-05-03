/*
* Slides, A Slideshow Plugin for jQuery
* Intructions: http://slidesjs.com
* By: Nathan Searles, http://nathansearles.com
* Version: 1.1.9
* Updated: September 5th, 2011
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*/
(function($){
	$.fn.slides = function( option ) {
		// override defaults with specified option
		option = $.extend( {}, $.fn.slides.option, option );

		return this.each(function(){
			// wrap slides in control container, make sure slides are block level
			$('.' + option.container, $(this)).children().wrapAll('<div class="slides_control"/>');
			
			var elem = $(this),
				control = $('.slides_control',elem),
				total = control.children().size(),
				width = control.children().outerWidth(),
				height = control.children().outerHeight(),
				start = option.start - 1,
				effect = option.effect.indexOf(',') < 0 ? option.effect : option.effect.replace(' ', '').split(',')[0],
				paginationEffect = option.effect.indexOf(',') < 0 ? effect : option.effect.replace(' ', '').split(',')[1],
				next = 0, prev = 0, number = 0, current = 0, loaded, active, clicked, position, direction, imageParent, pauseTimeout, playInterval;
			
			// is there only one slide?
			if (total < 2) {
				// Fade in .slides_container
				$('.' + option.container, $(this)).fadeIn(option.fadeSpeed, option.fadeEasing, function(){
					// let the script know everything is loaded
					loaded = true;
					// call the loaded funciton
					option.slidesLoaded();
				});
				// Hide the next/previous buttons
				$('.' + option.next + ', .' + option.prev).fadeOut(0);
				return false;
			}

			// animate slides
			function animate(direction, effect, clicked) {
				if (!active && loaded) {
					active = true;
					// start of animation
					option.animationStart(current + 1);
					switch(direction) {
						case 'next':
							// change current slide to previous
							prev = current;
							// get next from current + 1
							next = current + 1;
							// if last slide, set next to first slide
							next = total === next ? 0 : next;
							// set position of next slide to right of previous
							position = width*2;
							// distance to slide based on width of slides
							direction = -width*2;
							// store new current slide
							current = next;
						break;
						case 'prev':
							// change current slide to previous
							prev = current;
							// get next from current - 1
							next = current - 1;
							// if first slide, set next to last slide
							next = next === -1 ? total-1 : next;								
							// set position of next slide to left of previous
							position = 0;								
							// distance to slide based on width of slides
							direction = 0;		
							// store new current slide
							current = next;
						break;
						case 'pagination':
							// get next from pagination item clicked, convert to number
							next = parseInt(clicked,10);
							// get previous from pagination item with class of current
							prev = $('.' + option.paginationClass + ' li.'+ option.currentClass +' a', elem).attr('href').match('[^#/]+$');
							// if next is greater then previous set position of next slide to right of previous
							if (next > prev) {
								position = width*2;
								direction = -width*2;
							} else {
							// if next is less then previous set position of next slide to left of previous
								position = 0;
								direction = 0;
							}
							// store new current slide
							current = next;
						break;
					}

					// fade animation
					if (effect === 'fade') {
						// fade animation with crossfade
						if (option.crossfade) {
							// put hidden next above current
							control.children(':eq('+ next +')', elem).css({
								zIndex: 10
							// fade in next
							}).fadeIn(option.fadeSpeed, option.fadeEasing, function(){
								if (option.autoHeight) {
									// animate container to height of next
									control.animate({
										height: control.children(':eq('+ next +')', elem).outerHeight()
									}, option.autoHeightSpeed, function(){
										// hide previous
										control.children(':eq('+ prev +')', elem).css({
											display: 'none',
											zIndex: 0
										});								
										// reset z index
										control.children(':eq('+ next +')', elem).css({
											zIndex: 0
										});									
										// end of animation
										option.animationComplete(next + 1);
										active = false;
									});
								} else {
									// hide previous
									control.children(':eq('+ prev +')', elem).css({
										display: 'none',
										zIndex: 0
									});									
									// reset zindex
									control.children(':eq('+ next +')', elem).css({
										zIndex: 0
									});									
									// end of animation
									option.animationComplete(next + 1);
									active = false;
								}
							});
						} else {
							// fade animation with no crossfade
							control.children(':eq('+ prev +')', elem).fadeOut(option.fadeSpeed,  option.fadeEasing, function(){
								// animate to new height
								if (option.autoHeight) {
									control.animate({
										// animate container to height of next
										height: control.children(':eq('+ next +')', elem).outerHeight()
									}, option.autoHeightSpeed,
									// fade in next slide
									function(){
										control.children(':eq('+ next +')', elem).fadeIn(option.fadeSpeed, option.fadeEasing);
									});
								} else {
								// if fixed height
									control.children(':eq('+ next +')', elem).fadeIn(option.fadeSpeed, option.fadeEasing, function(){
										// fix font rendering in ie, lame
										if($.browser.msie) {
											$(this).get(0).style.removeAttribute('filter');
										}
									});
								}									
								// end of animation
								option.animationComplete(next + 1);
								active = false;
							});
						}
					// slide animation
					} else {
						// move next slide to right of previous
						control.children(':eq('+ next +')').css({
							left: position,
							display: 'block'
						});
						// animate to new height
						if (option.autoHeight) {
							control.animate({
								left: direction,
								height: control.children(':eq('+ next +')').outerHeight()
							},option.slideSpeed, option.slideEasing, function(){
								control.css({
									left: -width
								});
								control.children(':eq('+ next +')').css({
									left: width,
									zIndex: 5
								});
								// reset previous slide
								control.children(':eq('+ prev +')').css({
									left: width,
									display: 'none',
									zIndex: 0
								});
								// end of animation
								option.animationComplete(next + 1);
								active = false;
							});
							// if fixed height
							} else {
								// animate control
								control.animate({
									left: direction
								},option.slideSpeed, option.slideEasing, function(){
									// after animation reset control position
									control.css({
										left: -width
									});
									// reset and show next
									control.children(':eq('+ next +')').css({
										left: width,
										zIndex: 5
									});
									// reset previous slide
									control.children(':eq('+ prev +')').css({
										left: width,
										display: 'none',
										zIndex: 0
									});
									// end of animation
									option.animationComplete(next + 1);
									active = false;
								});
							}
						}
					// set current state for pagination
					if (option.pagination) {
						// remove current class from all
						$('.'+ option.paginationClass +' li.' + option.currentClass, elem).removeClass(option.currentClass);
						// add current class to next
						$('.' + option.paginationClass + ' li:eq('+ next +')', elem).addClass(option.currentClass);
					}
				}
			} // end animate function
			
			function stop() {
				// clear interval from stored id
				clearInterval(elem.data('interval'));
			}

			function pause() {
				if (option.pause) {
					// clear timeout and interval
					clearTimeout(elem.data('pause'));
					clearInterval(elem.data('interval'));
					// pause slide show for option.pause amount
					pauseTimeout = setTimeout(function() {
						// clear pause timeout
						clearTimeout(elem.data('pause'));
						// start play interval after pause
						playInterval = setInterval(	function(){
							animate("next", effect);
						},option.play);
						// store play interval
						elem.data('interval',playInterval);
					},option.pause);
					// store pause interval
					elem.data('pause',pauseTimeout);
				} else {
					// if no pause, just stop
					stop();
				}
			}
				
			// 2 or more slides required
			if (total < 2) {
				return;
			}
			
			// error corection for start slide
			if (start < 0) {
				start = 0;
			}
			
			if (start > total) {
				start = total - 1;
			}
					
			// change current based on start option number
			if (option.start) {
				current = start;
			}
			
			// randomizes slide order
			if (option.randomize) {
				control.randomize();
			}
			
			// make sure overflow is hidden, width is set
			$('.' + option.container, elem).css({
				overflow: 'hidden',
				// fix for ie
				position: 'relative'
			});
			
			// set css for slides
			control.children().css({
				position: 'absolute',
				top: 0, 
				left: control.children().outerWidth(),
				zIndex: 0,
				display: 'none'
			 });
			
			// set css for control div
			control.css({
				position: 'relative',
				// size of control 3 x slide width
				width: (width * 3),
				// set height to slide height
				height: height,
				// center control to slide
				left: -width
			});
			
			// show slides
			$('.' + option.container, elem).css({
				display: 'block'
			});

			// if autoHeight true, get and set height of first slide
			if (option.autoHeight) {
				control.children().css({
					height: 'auto'
				});
				control.animate({
					height: control.children(':eq('+ start +')').outerHeight()
				},option.autoHeightSpeed);
			}
			
			// checks if image is loaded
			if (option.preload && control.find('img:eq(' + start + ')').length) {
				// adds preload image
				$('.' + option.container, elem).css({
					background: 'url(' + option.preloadImage + ') no-repeat 50% 50%'
				});
				
				// gets image src, with cache buster
				var img = control.find('img:eq(' + start + ')').attr('src') + '?' + (new Date()).getTime();
				
				// check if the image has a parent
				if ($('img', elem).parent().attr('class') != 'slides_control') {
					// If image has parent, get tag name
					imageParent = control.children(':eq(0)')[0].tagName.toLowerCase();
				} else {
					// Image doesn't have parent, use image tag name
					imageParent = control.find('img:eq(' + start + ')');
				}

				// checks if image is loaded
				control.find('img:eq(' + start + ')').attr('src', img).load(function() {
					// once image is fully loaded, fade in
					control.find(imageParent + ':eq(' + start + ')').fadeIn(option.fadeSpeed, option.fadeEasing, function(){
						$(this).css({
							zIndex: 5
						});
						// removes preload image
						$('.' + option.container, elem).css({
							background: ''
						});
						// let the script know everything is loaded
						loaded = true;
						// call the loaded funciton
						option.slidesLoaded();
					});
				});
			} else {
				// if no preloader fade in start slide
				control.children(':eq(' + start + ')').fadeIn(option.fadeSpeed, option.fadeEasing, function(){
					// let the script know everything is loaded
					loaded = true;
					// call the loaded funciton
					option.slidesLoaded();
				});
			}
			
			// click slide for next
			if (option.bigTarget) {
				// set cursor to pointer
				control.children().css({
					cursor: 'pointer'
				});
				// click handler
				control.children().click(function(){
					// animate to next on slide click
					animate('next', effect);
					return false;
				});									
			}
			
			// pause on mouseover
			if (option.hoverPause && option.play) {
				control.bind('mouseover',function(){
					// on mouse over stop
					stop();
				});
				control.bind('mouseleave',function(){
					// on mouse leave start pause timeout
					pause();
				});
			}
			
			// generate next/prev buttons
			if (option.generateNextPrev) {
				$('.' + option.container, elem).after('<a href="#" class="'+ option.prev +'">Prev</a>');
				$('.' + option.prev, elem).after('<a href="#" class="'+ option.next +'">Next</a>');
			}
			
			// next button
			$('.' + option.next ,elem).click(function(e){
				e.preventDefault();
				if (option.play) {
					pause();
				}
				animate('next', effect);
			});
			
			// previous button
			$('.' + option.prev, elem).click(function(e){
				e.preventDefault();
				if (option.play) {
					 pause();
				}
				animate('prev', effect);
			});
			
			// generate pagination
			if (option.generatePagination) {
				// create unordered list
				if (option.prependPagination) {
					elem.prepend('<ul class='+ option.paginationClass +'></ul>');
				} else {
					elem.append('<ul class='+ option.paginationClass +'></ul>');
				}
				// for each slide create a list item and link
				control.children().each(function(){
					$('.' + option.paginationClass, elem).append('<li><a href="#'+ number +'">'+ (number+1) +'</a></li>');
					number++;
				});
			} else {
				// if pagination exists, add href w/ value of item number to links
				$('.' + option.paginationClass + ' li a', elem).each(function(){
					$(this).attr('href', '#' + number);
					number++;
				});
			}
			
			// add current class to start slide pagination
			$('.' + option.paginationClass + ' li:eq('+ start +')', elem).addClass(option.currentClass);
			
			// click handling 
			$('.' + option.paginationClass + ' li a', elem ).mouseover(function(){
				// pause slideshow
				if (option.play) {
					 pause();
				}
				// get clicked, pass to animate function					
				clicked = $(this).attr('href').match('[^#/]+$');
				// if current slide equals clicked, don't do anything
				if (current != clicked) {
					animate('pagination', paginationEffect, clicked);
				}
				return false;
			});
			
			// click handling 
			$('a.link', elem).click(function(){
				// pause slideshow
				if (option.play) {
					 pause();
				}
				// get clicked, pass to animate function					
				clicked = $(this).attr('href').match('[^#/]+$') - 1;
				// if current slide equals clicked, don't do anything
				if (current != clicked) {
					animate('pagination', paginationEffect, clicked);
				}
				return false;
			});
		
			if (option.play) {
				// set interval
				playInterval = setInterval(function() {
					animate('next', effect);
				}, option.play);
				// store interval id
				elem.data('interval',playInterval);
			}
		});
	};
	
	// default options
	$.fn.slides.option = {
		preload: false,                     // 预载图像，图像的幻灯片设置为true
		preloadImage: '/img/loading.gif',    // preloader的加载图像的名称和位置. 默认为 "/img/loading.gif"
		container: 'slides_container',       // 幻灯片容器类的名称. 默认为 "slides_container"
		generateNextPrev: false,            // 自动生成下一个/上一个按钮
		next: 'next',                        // 下一个按钮的类名
		prev: 'prev',                        // 上一个按钮的类名
		pagination: true,                   // 如果你不使用分页，您可以设置为false
		generatePagination: true,           // 自动生成分页
		prependPagination: false,           // 前置分页
		paginationClass: 'pagination',       // 用于分页的类的名称
		currentClass: 'current',             // 当前类的类名
		fadeSpeed: 350,                      // 设定的速度以毫秒为单位的褪色动画
		fadeEasing: '',                      // 扩展jQuery的插件前必须加载 http://gsgd.co.uk/sandbox/jquery/easing/
		slideSpeed: 350,                     // 设定的速度以毫秒为单位的滑动动画
		slideEasing: '',                     // 扩展jQuery的插件前必须加载 http://gsgd.co.uk/sandbox/jquery/easing/
		start: 1,                            // 设定的速度以毫秒为单位的滑动动画
		effect: 'slide',                     // 选择两种简单的切换过渡方式'slide, fade'
		crossfade: false,                   // 在基于图像的幻灯片淡出淡入图像
		randomize: false,                   // 设置为true，随机幻灯片
		play: 0,                             // 自动播放幻灯片, 正数将设置为true，并在毫秒时间之间的幻灯片动画
		pause: 0,                            // 点击下一页/上一页或分页暂停幻灯片. 正数将设置为true，以毫秒为单位的暂停时间
		hoverPause: false,                  // 设置为真和悬停在幻灯片将暂停
		autoHeight: false,                  // 设置为自动调整高度真实
		autoHeightSpeed: 350,                // 设置自动高度动画的时间，以毫秒为单位
		bigTarget: false,                   // 设置为true，整个幻灯片上点击链接到下一张幻灯片
		animationStart: function(){},      // 在动画的开始调用的函数
		animationComplete: function(){},   // 在动画完成后调用的函数
		slidesLoaded: function() {}        // 函数被调用时，滑块满载
	};
	
	// Randomize slide order on load
	$.fn.randomize = function(callback) {
		function randomizeOrder() { return(Math.round(Math.random())-0.5); }
			return($(this).each(function() {
			var $this = $(this);
			var $children = $this.children();
			var childCount = $children.length;
			if (childCount > 1) {
				$children.hide();
				var indices = [];
				for (i=0;i<childCount;i++) { indices[indices.length] = i; }
				indices = indices.sort(randomizeOrder);
				$.each(indices,function(j,k) { 
					var $child = $children.eq(k);
					var $clone = $child.clone(true);
					$clone.show().appendTo($this);
					if (callback !== undefined) {
						callback($child, $clone);
					}
				$child.remove();
			});
			}
		}));
	};
})(jQuery);