C = function(){
	var self = this;
	this.selected = 1;

	this.selectNext = function(){
		self.selected++;
		if(self.selected>3){
			self.selected=1;
		}

		for(var i=1; i<=3; ++i){
			if(i!=self.selected){
				$('#hero'+i).fadeOut(400);
			}
		}
		$('#hero'+self.selected).fadeIn(400);
	};

	this.interval = setInterval(this.selectNext, 5000);
	this.selectNext();
};

$(document).ready(function(){
	var c = new C();
	window.carrousel = c;
	$('#contactForm').modal({show: false});
	$('#submit').click(function(){
		var form = {};
		form.name = $('#name').val();
		form.email = $('#email').val();
		form.message = $('#message').val();
		$.ajax({
			type: 'POST',
			data: 'form='+JSON.stringify(form),
			success: function(r){
				$('#contactForm').modal('hide');
			}
		});
	});
});

