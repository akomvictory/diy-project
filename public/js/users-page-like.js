$('.like').on('click', function(event){

	event.preventDefault();
	postId = event.target.parentNode.dataset['postid'];
	var isLike = event.target.previousElementSibling == null;

		$.ajax({

			method : 'POST',

			url : ....,
			data : ....

			data : {isLike: isLike, postId: postId, _token: token}

				})

		.done(function() {

			event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this page' : 'Like' : event.target.innerText == 'Dislike' ? 'You dont like this page' :  'Dislike';
			
			if(isLike){

				event.target.nextElementSibling.innerText = 'Dislike';
  				
  				} else{

				event.target.nextElementSibling.innerText = 'Like';

  				}

		});

});