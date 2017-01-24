const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    //mix.sass('app.scss')
    mix.webpack('app.js');

   //  mix.scripts([

			// 		'lib/jquery.min.js',
			// 		'lib/bootstrap-timepicker.min.js',
			// 		'lib/autocomplete/jquery.autocomplete.js',
			// 		'lib/notify/pnotify.core.js',
			// 		'lib/notify/pnotify.buttons.js',
			// 		'lib/jquery.inputmask.bundle.js',
			// //		'lib/handlebars.min.js',
			// 		'lib/oauth.js',
			// 		'lib/bootstrap.min.js',
			// 		'lib/nicescroll/jquery.nicescroll.min.js',
			// 		'lib/moment/moment.min.js',
			// 		'lib/chartjs/chart.min.js',
			// 		// 'bootstrap-toggle/bootstrap-toggle.min.js',
			// 		'lib/progressbar/bootstrap-progressbar.min.js',
			// 		'lib/icheck/icheck.min.js',
			// 		'lib/datepicker/daterangepicker.js',
					
			// 		'lib/dropzone/dropzone.js',
			// 		//'lib/papaparse/papaparse.js',
			// 		'lib/sparkline/jquery.sparkline.min.js',
			// 		'lib/jquery.validate.min.js',
			// 		'lib/datatables/js/datatables.min.js',
			// 		// 'lib/datatables/js/jquery.dataTables.js',
			// 		'lib/datatables/tools/js/dataTables.tableTools.js',
			// 		'lib/jquery.smartWizard.js',
			// 		'lib/pace/pace.min.js',
			// 		'lib/echart/echarts-all.js',
			// 		'lib/echart/green.js',
			// 		'../lib_config.js',
			// 		'lib/custom.js'

			// 	],
			// 	"public/main.lib.js"
			// 	);
				
			// mix.scriptsIn('app/', 'public/bundel.js')
			// 	.webpack('app.js');
				//.livereload();
});
