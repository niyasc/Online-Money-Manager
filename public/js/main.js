$(function() {
	$('#sidemenu-toggler').click(function() {
		$('#sidemenu').show();
	});
	$('#close').click(function() {
		$('#sidemenu').hide();
	});
});

function isValidDate(date_val)
{
	var matches = /(\d{4})[-\/](\d{2})[-\/](\d{2})/.exec(date_val);

	if (matches == null)
	{
		alert("Enter Date in YYYY-MM-DD format")
		return false;
	}
	return true;
}

function checkDates() {
	var to = document.getElementsByName('date2')[0].value;
	var from = document.getElementsByName('date1')[0].value;
	var curdate=new Date();
	if(to>curdate||to<from||from==''||to==''||!isValidDate(to)||!isValidDate(from))
	{
		alert('Please verify dates!');
		return false;
	}
}