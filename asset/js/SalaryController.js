var SalaryController = {
	
	init: function() {
		SalaryController.setForm();
	},
	
	setForm: function() {
		var form = document.querySelector('form');
		form.addEventListener('submit', function(event) {
			SalaryController.calculateSalary(form);
			
			event.preventDefault();
		});
	},
	
	calculateSalary: function(form) {
		var 
			salary = parseFloat(form.salary.value),
            result = 0;
            resultinss = 0;
            resultirpf = 0;
            resultliquid = 0;
            
		
		var callback = function(result) {
			SalaryController.showResult(result);			
		};
		
		
		SalaryService.getIndex(salary, callback);
	},
	
	showResult: function(result) {
		var spanResult = document.querySelector('.result');
		spanResult.innerHTML = result.toFixed(4);
		SalaryController.showLoading(false);
	},
	
	

};

//initialization
SalaryController.init();
