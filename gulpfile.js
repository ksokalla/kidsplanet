'use strict';
var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('browserSync', function() {
  browserSync.init({
        port: 8080,
        proxy: "http://localhost/wordpresss/"
    });
})

gulp.task('watch', ['browserSync'], function(){
	gulp.watch('*.css', browserSync.reload)
	gulp.watch('css/**/*.css', browserSync.reload);
	gulp.watch('*.html', browserSync.reload); 
    gulp.watch('js/**/*.js', browserSync.reload); 
	

});