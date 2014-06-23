$(function(){
	
			
			//SETUP ICONS
			$.each($('[data-icon]'), function(){
				var icon = $(this).attr('data-icon');
				var text = $(this).html();
				$(this).html('<i class="fa fa-'+icon+'"></i> '+text);	
			});
			
			//DATE PICKER
			$('.datepicker').datepicker();
					
			//STICKY
			additionalOffset = 78;			
			stickyHeight = $('.sticky').outerHeight();
			stickyYOffset = $('.sticky').offset().top;
			stickyParent = $('.sticky').closest('.stickyContainer');
			stickyParentOffset = $(stickyParent).offset().top;
			offsetFromParent = stickyYOffset-stickyParentOffset;
			
			$(window).resize(function(){				
				stickyParentHeight = $(stickyParent).outerHeight(true);				
				stickyParentInnerHeight = $(stickyParent).innerHeight();							
				stickyStop = stickyStart+stickyParentInnerHeight-stickyHeight-offsetFromParent-offsetFromParent;
				stickyStopOffset = stickyParentInnerHeight-stickyHeight-offsetFromParent-offsetFromParent;
			});	
			
			stickyStart = stickyParentOffset-additionalOffset;
			stickyOffset = offsetFromParent+additionalOffset;			
				
			//INITIAL WINDOW SIZE
			$(window).trigger('resize');				
			$(window).scroll(function(){
				var y = $(window).scrollTop();
				if(y > stickyStart && y < stickyStop){
					$('.sticky')
						.css('position', 'fixed')
						.css('top', stickyOffset);
				}
				else if(y < stickyStart){
					$('.sticky').attr('style', '');	
				}
				else if(y > stickyStop){
					$('.sticky')
						.css('position', 'absolute')
						.css('top', stickyStopOffset);
				}
			})
			
			
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
					.attr('name', 'time['+countDays+'][type]');
				$(window).trigger('resize');							
			});
			
			
			$(document).on('change', '.classTypeSelector', function(evt){
				evt.stopPropagation();
				var type = $(this).val();
				var id = $(this).attr('id');
				var parentId = '#'+id.replace('type_', 'class_');
				var dayId = parentId.replace('class_', '');
				var dayId = dayId.replace('#', '');
				$('#params_'+dayId).remove();
				
				var datePicker = '<div class="row"><div class="col-sm-12"><div class="form-group"><label for="date" class="control-label">Date</label><div class="bfh-datepicker"></div></div></div></div>';
				
				var startTime = '<div class="col-sm-6"><div class="form-group"><label for="startTime" class="control-label">Start Time</label><div class="bfh-timepicker startTime"></div></div></div>';
				
				var endTime = '<div class="col-sm-6"><div class="form-group"><label for="startTime" class="control-label">End Time</label><div class="bfh-timepicker endTime"></div></div></div>';
				
				var week = '<div class="form-group"><label for="week_'+dayId+'" class="control-label">Week</label><select class="form-control" id="week_'+dayId+'" name="time['+dayId+'][week]"><option value="1">First</option><option value="2">Second</option><option value="3">Third</option><option value="4">Fourth</option></select></div>';
				
				var day = '<div class="form-group"><label for="day_'+dayId+'" class="control-label">Day</label><select class="form-control" id="day_'+dayId+'" name="time['+dayId+'][day]"><option value="0">Monday</option><option value="1">Tuesday</option><option value="2">Wednesday</option><option value="3">Thursday</option><option value="4">Friday</option><option value="5">Saturday</option><option value="6">Sunday</option></select></div>';
				
				var weekAndDay = '<div class="row"><div class="col-sm-6">'+week+'</div><div class="col-sm-6">'+day+'</div></div>';
				
				var times = '<div class="row">'+startTime+endTime+'</div>';
				
				//START THE PARAMS CONTAINER
				$(parentId).append('<div id="params_'+dayId+'"></div>');
				
				if(type == 'weekly'){
					
					//ADD DAY
					$(parentId+' #params_'+dayId).append('<div class="row"><div class="col-sm-12">'+day+'</div></div>');
						
				}
				else if (type == 'monthly') {
					
					//ADD WEEK AND DAY
					$(parentId+' #params_'+dayId).append(weekAndDay);				
				}
				else if (type == 'once') {									
					
					//ADD A DATEPICKER
					$(parentId+' #params_'+dayId).append(datePicker);
					$('.bfh-datepicker').bfhdatepicker();
					$(parentId+' .bfh-datepicker input').attr('name', 'time['+dayId+'][date]');					
				}
				
				//ADD TIMES
				$(parentId+' #params_'+dayId).append(times);
				$('.bfh-timepicker').bfhtimepicker();
				$(parentId+' .startTime .hour input').attr('name', 'time['+dayId+'][start][hour]');
				$(parentId+' .startTime .minute input').attr('name', 'time['+dayId+'][start][min]');
				$(parentId+' .endTime .hour input').attr('name', 'time['+dayId+'][end][hour]');
				$(parentId+' .endTime .minute input').attr('name', 'time['+dayId+'][end][min]');	
				$(window).trigger('resize');
			});
			
			
			
			$(document).on('click', '.removeClassTime', function(){
				var removeParent = $(this).parent().parent().parent().parent().parent().parent();
				var removeParentHeight = $(removeParent).outerHeight();
				var newStickyEnd = stickyEnd+removeParentHeight;				
				stickyEnd = newStickyEnd;				
				$(removeParent).remove();	
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