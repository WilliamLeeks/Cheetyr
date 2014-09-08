var project = 'Cheetyr';

var gulp = require('gulp');
var autoprefix = require('gulp-autoprefixer');
var sass = require('gulp-ruby-sass');
var notify = require('gulp-notify');
var livereload = require('gulp-livereload');

gulp.task('css', function() {
	return gulp.src('scss/style.scss')
		.pipe(sass({style: 'compressed'}))
		.pipe(autoprefix('last 2 version'))
		.pipe(gulp.dest('css'))
		.pipe(notify({message: project + " CSS Updated."}));
});

gulp.task('watch', function() {
	livereload.listen();
	gulp.watch('scss/*.scss', ['css']);
	gulp.watch(['css/*.css', '*.php']).on('change', livereload.changed);
});

gulp.task('default', ['watch']);