var SalaryService = {

	getIndex: function(salary, callback) {
		$.ajax({
		  url: 'services/bmi.action.php',
		  data: {'salary': salary},
		  success: function(result) {
		  	callback(parseFloat(result));
		  },
		  error: function() {
		  	callback(null);
		  }
		});
	},
	
	getDescription: function (index) {
	
		return "";
	}
	
};