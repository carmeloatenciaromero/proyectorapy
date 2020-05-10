$('.add_product').click(function (e) {
	e.preventDefault();
	var product=$(this).attr('product')
	alert(product);
});