/* [ ---- Gebo Admin Panel - calendar ---- ] */

	$(document).ready(function() {
		gebo_calendar.regular();
		gebo_calendar.google();
		//* resize elements on window resize
		var lastWindowHeight = $(window).height();
		var lastWindowWidth = $(window).width();
		$(window).on("debouncedresize",function() {
			if($(window).height()!=lastWindowHeight || $(window).width()!=lastWindowWidth){
				lastWindowHeight = $(window).height();
				lastWindowWidth = $(window).width();
				//* rebuild calendar
				$('#calendar').fullCalendar('render');
				$('#calendar_google').fullCalendar('render');
			}
		});
	});
	
	//* calendar
	gebo_calendar = {
		regular: function() {
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			var calendar = $('#calendar').fullCalendar({
				header: {
					left: 'prev next',
					center: 'title,today',
					right: 'month,agendaWeek,agendaDay'
				},
				buttonText: {
					prev: '<i class="icon-chevron-left cal_prev" />',
					next: '<i class="icon-chevron-right cal_next" />'
				},
				aspectRatio: 2,
				selectable: true,
				selectHelper: true,
				select: function(start, end, allDay) {
					var title = prompt('Event Title:');
					if (title) {
						calendar.fullCalendar('renderEvent',
							{
								title: title,
								start: start,
								end: end,
								allDay: allDay
							},
							true // make the event "stick"
						);
					}
					calendar.fullCalendar('unselect');
				},
				editable: true,
				theme: false,
				events: [
					{
						title: 'All Day Event',
						start: new Date(y, m, 1),
                        color: '#aedb97',
                        textColor: '#3d641b'
					},
					{
						title: 'Click for Google',
						start: new Date(y, m, 28),
						end: new Date(y, m, 29),
						url: 'http://google.com/'
					}
				],
				eventColor: '#bcdeee'
			})
		},
		google: function() {
			var calendar = $('#calendar_google').fullCalendar({
				header: {
					left: 'prev next',
					center: 'title,today',
					right: 'month,agendaWeek,agendaDay'
				},
				buttonText: {
					prev: '<i class="icon-chevron-left cal_prev" />',
					next: '<i class="icon-chevron-right cal_next" />'
				},
				aspectRatio: 3,
				theme: false,
				events: {
					url:'http://www.google.com/calendar/feeds/usa__en%40holiday.calendar.google.com/public/basic',
					title: 'Italian Holidays',
					color: '#bcdeee'
				},
				eventClick: function(event) {
					// opens events in a popup window
					window.open(event.url, 'gcalevent', 'width=700,height=600');
					return false;
				}
				
			})
		}
	};