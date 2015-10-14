var SalaryService = {

	getIndex: function(salary, callback) {
		$.ajax({
		  url: 'services/Salary.action.php',
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