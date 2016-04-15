$(document).ready(function() {

	var data_id;
	var data_type;
	var projects_content;
	var timeline_content;
	var tab_dates = new Array();

	displayProjects('Personnel');

	$('.project-type li a').off('click');
	$('.project-type li a').on('click', function(e) {

		e.preventDefault();
		$('.project-type li a').removeClass('active-project');
		$(this).addClass('active-project');

		if(parseInt($(this).attr('data-display')) === 0) {
			$('.project-type li a').attr('data-display', 0);
			$(this).attr('data-display', 1);
			$('.timeline').empty();
			$('.all-projects').empty();
			data_type = $(this).attr('data-type');
			displayProjects(data_type);
		}
	});

	$(document).off('click', '.timeline-circle');
	$(document).on('click', '.timeline-circle', function() {

		var that = $(this);

		$('.project[data-project='+data_id+']').animate({
		    left: "+=1000"
		  }, 500, function() {

		  	$('.project[data-project='+data_id+']').hide();
		  	$('.project[data-project='+data_id+']').css('left', '-1000px');

		  	$('.timeline-circle').removeClass('circle_active');
			that.addClass('circle_active');

			data_id = that.attr('data-timeline');

			$('.project[data-project='+data_id+']').show();
			$('.project[data-project='+data_id+']').animate({
			    left: "+=1000"
			  }, 500, function() {
			});

			$('body,html').animate({scrollTop:0},200);

		});
		
	});

	$('.timeline-circle[data-timeline=1]').css('margin-left', '0px');

	$('.next').hide();

	$('.previous').on('click', function() {
		var block = $('.timeline-circle[data-timeline=1]');
		//if(block.css('margin-left') != '0px') {
			$(block).animate({
			    marginLeft: "-=220"
			  }, 500, function() {
			});	
		//}

		if($('.next').css('display') === 'none') {
			$('.next').fadeIn();
		}
	});

	$('.next').on('click', function() {
		var block = $('.timeline-circle[data-timeline=1]');

		var block_ml = parseInt(block.css('margin-left').replace('px', ""));

		if(block_ml < -5) {
			$(block).animate({
			    marginLeft: "+=220"
			  }, 500, function() {
			  	if(block_ml > -225) {
			  		$('.next').fadeOut();
			  	}
			});	
		}
	});

	function displayProjects(type, callback) {
		
		$.ajax({
			type : "POST",
			url : WEB_URL+"/projects/view/"+type,
			success: function(response){

				var tab_dates = new Array();

				for (var p = 0; p < response.projects.length; p++) {

					projects_content = 
						'<div class="project" data-project="'+(p+1)+'">'+
							'<div class="project-picture">' +
								'<img src="'+response.projects[p].Project.Cover +'" alt="'+response.projects[p].Project.Alt +'" />' +
							'</div>' +
							'<div class="project-content">' +
								'<h2 class="project-title">'+response.projects[p].Project.Name +'</h2>' +
							
								'<p class="project-description">' +
									response.projects[p].Project.Content +
								'</p>'+

								'<div class="project-technos">' +
									response.projects[p].Project.technos +
								'</div>'+
								'<br />' +
								'<a href="'+response.projects[p].Project.link_website +'" target="_blank" class="button">Voir le projet</a>' +
							'</div>' +
							
						'</div>'
					;

					$('.all-projects').append(projects_content);

					timeline_content =
						'<div class="timeline-line">'
					;

					if(tab_dates.indexOf(response.projects[p].Project.date) == -1) {
						tab_dates.push(response.projects[p].Project.date);
						timeline_content +=
							'<div class="timeline-date">' +
								'<span class="date">'+response.projects[p].Project.date +'</span>' +
							'</div>'
						;
					}					

					timeline_content +=
						'</div>' +

						'<div class="timeline-circle" data-timeline="'+(p+1)+'">'+
							'<div class="bubble">'+response.projects[p].Project.Name +'</div>' +
							'<img src="'+response.projects[p].Project.Cover +'" alt="'+response.projects[p].Project.Alt +'"/>' +
						'</div>' +
						'<div class="timeline-line"></div>'
					;

					$('.timeline').append(timeline_content);
				}
				data_id = 1;

				$('.project[data-project='+data_id+']').show();
				$('.project[data-project='+data_id+']').animate({
				    left: "+=1000"
				  }, 500, function() {
				});
			},

			error: function(){
				console.log('error');
            }
		});

		if(callback) callback();
	}


});