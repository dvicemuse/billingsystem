$(function(){
	
			
			//SETUP ICONS
			$.each($('[data-icon]'), function(){
				var icon = $(this).attr('data-icon');
				var text = $(this).html();
				$(this).html('<i class="fa fa-'+icon+'"></i> '+text);	
			});
			
			//CREATE FORM SECTION MENU
			function convertToSlug(Text)
			{
				return Text
					.toLowerCase()
					.replace(/ /g,'-')
					.replace(/[^\w-]+/g,'')
					;
			}
			
			if($('.form-menu').length > 0){
				$('.form-menu').append('<ul class="nav form-nav"></ul>');
				$.each($('section'), function(i,v){
					var sectionTitle = $(this).find('h3:first').text();
					var camelId = convertToSlug(sectionTitle);
					$(this).prepend('<a class="anchor" id="'+camelId+'"></a>');
					$('.form-nav').append('<li><a href="#'+camelId+'">'+sectionTitle+'</a></li>');
					
				}, function(){
					$(this).scrollspy('refresh')	
				});
				
			}
			
			//IF BIlLING SAME IS CHECKED/UNCHECKED
			var getAddressForm = $('#addressForm').html();
			$('#billingSame').change(function(){
				if($(this).is(':checked')){
					$('#ccAddress').html('');	
				}
				else{
					
					$('#ccAddress').html(getAddressForm);
					$('#ccAddress #addr1').attr('name', 'card[address][addr1]').removeAttr('id');
					$('#ccAddress #addr2').attr('name', 'card[address][addr2]').removeAttr('id');
					$('#ccAddress #city').attr('name', 'card[address][city]').removeAttr('id');
					$('#ccAddress #state').attr('name', 'card[address][state]').removeAttr('id');
					
					//INJECT FORM VALIDATION ON ZIP
					var newZip = $('#ccAddress #zip').html();
					var inject = '<i class="form-control-feedback" data-bv-icon-for="zip" style="display: none;"></i><small data-bv-validator="notEmpty" data-bv-validator-for="zip" class="help-block" style="display: none;">The zipcode is required</small><small data-bv-validator="zipCode" data-bv-validator-for="zip" class="help-block" style="display: none;">This is not valid zipcode</small>';
					$('#ccAddress #zip').after(inject).parent().addClass('has-feedback');
					//$('#ccAddress #zip').attr('name', 'card[address][zip]').removeArrt('id');
					
					
				}
			})
			
			//FORM VALIDATION
			$('form').bootstrapValidator({
				live: 'enabled',
				trigger: 'focus blur',
				message: 'This field is required',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					email: {
						validators: {
							emailAddress: {
								message: 'This is not a valid email address'
							}
						}
					},
					phone: {
						validators: {
							regexp : {
								regexp: /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{4,4}?$/,
								message: 'This is not a valid phone number'
							}
						}
					},
					zip: {
						selector: '.zipVal',
						validators: {
							notEmpty: {
								message: 'The zipcode is required'
							},
							zipCode: {
								country: 'US',
								message: 'This is not valid zipcode'
							}
						}
					},
					ccNumber: {
						selector: '.ccNumber',
						validators: {
							notEmpty: {
								message: 'The credit card number is required'
							},
							creditCard: {
								message: 'The credit card number is not valid'
							}
						}
					},
					
					cvc: {
						selector: '.cvcVal',
						validators: {
							notEmpty: {
								message: 'The cvc number is required'
							},
							cvv: {
								message: 'The cvc number is not valid'
							}
						}
					},
					
				}
			});
			
			//SETUP PHONE NUMBER VALIDATION
			$.each($('.phone-format'), function(){
				$(this).focus(function(){
					$(this).attr('maxlength', '14');
					$(this).keypress(function(e){
						if(
							e.keyCode == 48 ||
							e.keyCode == 49 ||
							e.keyCode == 50 ||
							e.keyCode == 51 ||
							e.keyCode == 52 ||
							e.keyCode == 53 ||
							e.keyCode == 54 ||
							e.keyCode == 55 ||
							e.keyCode == 56 ||
							e.keyCode == 57						
						){
							$(this).keyup(function(e){								
								if(e.keyCode !== 8){
									
									var inputVal = $(this).val();
									var inputLength = $(this).val().length;
																		
									if(inputLength == 1){										
										if(inputVal !== '(');
										$(this).val('('+inputVal);	
									}
									if(inputLength == 4){
										$(this).val(inputVal+') ');	
									}
									if(inputLength == 9){
										$(this).val(inputVal+'-');	
									}	
								}
							})
						}
						else{
							e.preventDefault();
						}					
					})	
				})
			})
			
			//ADDITIONAL PACKAGES FOR CLIENTS
			$('.addPackageBtn').click(function(){
				var packageCount = $('.packageSelect').length;
				if(packageCount == 1){
					$(this).before('<div id="additionalPackages"></div>');	
				}
				$('#package0')
					.clone()
					.attr('id', 'package'+packageCount)
					.attr('name', 'package['+packageCount+']')
					.appendTo('#additionalPackages');
				$('#package'+packageCount)
					.wrap('<div class="form-group"><div class="row" id="packageWrap'+packageCount+'"><div class="col-sm-10"></div></div></div>');
				$('#packageWrap'+packageCount)	
					.append('<div class="col-sm-2"><a class="btn btn-default deleteClientPackage"><i class="fa fa-trash-o"></i></a></div>');
			});
			
			$(document).on('click', '.deleteClientPackage', function(){
				$(this).parent().parent().parent().remove();
				var packageCount = $('.packageSelect').length;
				if(packageCount == 1){
					$('#additionalPackages').remove();
				}
			})
			
					
			if($('.sticky').length > 0){
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
			}
			
			
			
			//CLASSES ADD DAY AND TIME
			$('.addClassDay').click(function(){
				var topOffset = $(document).scrollTop();				
				var typeSelector = $('#classDay');
				var countDays = $('.classTime').length+1;
				$(typeSelector)
					.clone()
					.removeClass('hide')
					.addClass('classTime')					
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
				$(parentId+' .panel-body').append('<div id="params_'+dayId+'"></div>');
				
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
				if(type !== ''){
					//ADD TIMES
					$(parentId+' #params_'+dayId).append(times);
					$('.bfh-timepicker').bfhtimepicker();
					$(parentId+' .startTime .hour input').attr('name', 'time['+dayId+'][start][hour]');
					$(parentId+' .startTime .minute input').attr('name', 'time['+dayId+'][start][min]');
					$(parentId+' .endTime .hour input').attr('name', 'time['+dayId+'][end][hour]');
					$(parentId+' .endTime .minute input').attr('name', 'time['+dayId+'][end][min]');	
					$(window).trigger('resize');
				}
			});
			
			
			
			$(document).on('click', '.removeClassTime', function(){
				$(this).closest('.classDay').remove();	
				$(window).trigger('reize');
			})
			
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
				//event.stopPropagation();	
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