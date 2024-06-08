$(document).ready(function () {
  // Load product list from server
  $.get('get_products.php', function (data) {
    $('#product-list').html(data);
  });

  // Handle form submission
  $('#shipping-form').submit(function (e) {
    e.preventDefault();

    var products = [];
    var quantities = [];

    $('.product').each(function () {
      var id = $(this).data('id');
      var quantity = $(this).find('.quantity').val();

      if (quantity > 0) {
        products.push(id);
        quantities.push(quantity);
      }
    });

    var data = $(this).serializeArray();
    data.push({ name: 'products', value: JSON.stringify(products) });
    data.push({ name: 'quantities', value: JSON.stringify(quantities) });

    $.post('submit_form.php', data, function (response) {
      alert('Form submitted successfully!');
    });
  });
});
