$(function(){
			
			//SETUP ICONS
			$.each($('[data-icon]'), function(){
				var icon = $(this).attr('data-icon');
				var text = $(this).html();
				$(this).html('<i class="fa fa-'+icon+'"></i> '+text);	
			});
			
			//DATE PICKER
			$('.datepicker').datepicker();
			
			//CLASSES ADD DAY AND TIME
			$('.addClassDay').click(function(){
				var topOffset = $(document).scrollTop();				
				var typeSelector = $('#classDay');
				var countDays = $('.classTime').length+1;
				$(typeSelector)
					.clone()
					.removeClass('hide')
					.addClass('classTime well')					
					.attr('id', 'class_'+countDays)					
					.appendTo('#classTimes');	
				$('#class_'+countDays+' select')
					.attr('id', 'type_'+countDays)
					.attr('name', 'type_'+countDays);
				$(window).trigger('resize');
								
			});
			
			
			$(document).on('change', '.classTypeSelector', function(evt){
				evt.stopPropagation();
				var type = $(this).val();
				var id = $(this).attr('id');
				var parentId = '#'+id.replace('type_', 'class_');
				
				if(type == 'weekly'){
					var params = $('#weeklyType');	
				}
				else if (type == 'monthly') {
					var params = $('#monthlyType');
				}
				else if (type == 'oneTime') {
					var params = $('#oneTimeType');
				}
				var dayId = parentId.replace('class_', '');
				$('#params_'+dayId).remove();				
				$(params)
					.clone()
					.attr('id', 'params_'+dayId)
					.removeClass('hide')
					.appendTo(parentId);	
				$(window).trigger('resize');							
			});
			
			$(document).on('click', '.removeClassTime', function(){
				$(this).parent().parent().parent().parent().parent().parent().remove();	
			})

			$('form').validate({
				highlight: function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight: function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				errorElement: 'span',
				errorClass: 'help-block',
				errorPlacement: function(error, element) {
					if(element.parent('.input-group').length) {
						error.insertAfter(element.parent());
					} else {
						error.insertAfter(element);
					}
				}
			});
			
			$('#messageModal').modal('show');				
			$('.confirmModal').click(function(event){
				event.preventDefault();	
				confirmLink = $(this).attr('href')
				$('#confirmModal').modal('show');
				$('.confirmBtn').click(function(){
					window.location.replace(confirmLink);
				})
				
			})
			$('.clickableRow a').click(function(){
				event.stopPropagation();	
			})
			$('.clickableRow').click(function(){
				target = $(this).attr('data-target');
				window.location.replace(target);
			})
			$('.headerSubmit').click(function(){
				$(':submit').click();	
			})
			
			$('form').on('change keyup keydown', 'input, textarea, select', function (e) {
				$(this).addClass('changed-input');
				
			}); 
			
			/*$('.sticky').sticky('.stickyContainer', {
				offset:95,
				startOffset:78,
				stopOffset:50			
			});	*/
			
			var moveSticky = function(){
				
			}
			
			
			//$.each($('.sticky'), function(){
				
				//CALCULATE STICKY OFFSETS
				var stickyHeight = $('.sticky').outerHeight();
				var stickyInnerHeight = $('.sticky').height();
				var stickyPadding = stickyHeight-stickyInnerHeight;
				var stickyYOffset = $('.sticky').offset().top+stickyPadding;						
				var stickyXOffset = $('.sticky').offset().left;			
				var stickyParent = $('.sticky').closest('.stickyContainer');
				var stickyParentHeight = $(stickyParent).outerHeight();
				var stickyParentInnerHeight = $(stickyParent).height();
				var stickyParentPadding = stickyParentHeight-stickyParentInnerHeight;
				var stickyParentPadding = stickyParentPadding/2;
				var stickyParentOffset = $(stickyParent).offset().top;
				var offsetFromParent = stickyYOffset-stickyParentOffset;
				var stickyOffset = stickyParentOffset-offsetFromParent;
				var stickyOffset = stickyOffset-stickyHeight;
				var stickyStart = stickyOffset-stickyParentPadding;
				var stickyOffset = stickyOffset+stickyParentPadding;
				var stickyStop = stickyParentHeight;
				var halfStickyPadding = stickyPadding/2;
				var stickyStopOffset =	stickyStop-stickyOffset+halfStickyPadding;
				
				
				$(window).scroll(function(){
					var y = $(window).scrollTop();
					if(y > stickyStart && y < stickyStop-stickyParentPadding-halfStickyPadding){
						//alert(stickyStop-stickyParentPadding-halfStickyPadding);					
						$('.sticky')
							.css('position', 'fixed')
							.css('top', stickyOffset)
							.css('left', stickyXOffset);	
					}
					else if(y < stickyYOffset){
						$('.sticky').attr('style', '');
					}
					else if(y >= stickyStop-stickyHeight-stickyPadding-stickyPadding-stickyPadding){
						//alert(stickyStop-stickyHeight-stickyPadding-stickyPadding-stickyPadding)
						$('.sticky').attr('style', '');			
						$('.sticky')
							.css('position', 'absolute')
							.css('top', stickyStopOffset)
						;						
					}
				})
			//})
			
			
			
				
			
			
			//$('form').dirtyForms();
			
			$.DirtyForms.dialog = {
				selector: '#unsavedChanges',
				fire: function(message, dlgTitle) {
					$('#unsavedChanges').modal('show');
				},
				// Bind binds the continue and cancel functions to the correct links
				bind : function(){
					$('#unsavedChanges .cancel').click($.DirtyForms.decidingCancel);
					$('#unsavedChanges .confirmBtn').click($.DirtyForms.decidingContinue);
					$(document).bind('decidingcancelled.dirtyforms', function(){
						$(document).trigger('close.facebox');
					});
				},
				refire: function(content) {
					return false;
				},
				stash: function() {
					return false;
				}
			}
		})