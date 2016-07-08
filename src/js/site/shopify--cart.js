$(function(){

	function getObjects(obj, key, val) {
		var objects = [];
		for (var i in obj) {
			if (!obj.hasOwnProperty(i)) continue;
			if (typeof obj[i] == 'object') {
				objects = objects.concat(getObjects(obj[i], key, val));
			} else if (i == key && obj[key] == val) {
				objects.push(obj);
			}
		}
		return objects;
	}

	$.getJSON('http://timeline-wood.myshopify.com/cart.json?callback=?').done(function(x){
		
		//console.log(x);
							
		var x_items = x.item_count;
		var x_total_cents = x.total_price;
		var x_total = x_total_cents / 100;
				
		if (x_total > 0) {
					
			var items = x.items;
			
			$.each(items, function(i, item) {
								   
				$.getJSON('http://timeline-wood.myshopify.com/products/' + items[i].handle + '.json?callback=?').done(function(p){
					
					//console.log(p);
					
					if (items[i].image) {
						var image = '<div class="fs-cell fs-all-half"><img class="img-responsive" src="' + items[i].image + '" alt=""></div>';
					} else {
						var image = '<img src="/assets/images/image-20.jpg" alt="">';
					}
					
					var variant = items[i].variant_id;
					
					var thevar = getObjects(p.product.variants, 'id', variant);
					
					//console.log(thevar);
					
					var vartitle = thevar[0].title;
					
					var price = (items[i].price / 100) * items[i].quantity;
					
					$('#items').append('<div class="item fs-row clearfix">' + image + '<div class="desc fs-cell fs-all-half text-left"><a href="http://timeline-wood.myshopify.comproducts/' + items[i].handle + '">' + p.product.title + '</a><br /><span>' + p.product.options[0].name + ' ' + vartitle + '</span></div><div class="price fs-cell fs-all-half text-left">$' + price + '</div></div>');
					
				});
		
			});
			
			$('#bagtotal').append('<div class="total clearfix">Subtotal <span>$' + x_total + '</span></div><div class="view centertext"><a href="http://timeline-wood.myshopify.com/cart">View or edit your bag</a></div><a href="http://timeline-wood.myshopify.com/cart" class="button_link centertext"><span>Checkout</span></a>');
			$('#mobile_bag').html(x_items);
			
		} else {
		
			$('#bagtotal').html('<div class="text-center">Your bag is empty!</div>');
			$('#mobile_bag').html('0');
		
		}

	});

	$('#open_bag').click(function(e) {
		e.preventDefault();
		$('#bag').addClass('is-visible');
	});

	$('#close_bag').click(function(e) {
		e.preventDefault();
		$('#bag').removeClass('is-visible');
	});

	$('#toggle').click(function(e) {
		e.preventDefault();
	    $('#nav').slideToggle('fast');
	});

})