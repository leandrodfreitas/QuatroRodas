var gulp = require('gulp');
var connect = require('gulp-connect');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var files = [
   'index.html',
   'assets/css/style.css'
];

// LIVERELOAD
gulp.task('files', function() {
	gulp.src(files).pipe(connect.reload());
});

gulp.task('watch', function() {
	gulp.watch(files, ['files']);
});

gulp.task('connect', function() {
	connect.server({livereload: true});
});

// CONCATENA E MINIFICA O JS
gulp.task('minify-js', function(){
	return gulp.src([
		'bower_components/jquery/dist/jquery.min.js',
		'assets/js/utils.js'
	])
   	.pipe(concat('scripts.js'))
   	.pipe(gulp.dest('assets/js'))
   	.pipe(rename('scripts.min.js'))
   	.pipe(uglify())
   	.pipe(gulp.dest('assets/js'));
});

gulp.task('default', [
	'connect',
   'minify-js',
	'watch'
]);