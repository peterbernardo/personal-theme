var gulp = require('gulp'),
    less = require('gulp-less'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');

var path = require('path');

gulp.task('less', function () {
  return gulp.src('less/style.less')
    .pipe(less())
    .pipe(minifycss())
    .pipe(gulp.dest('.'))
});

gulp.task('clean', function() {
    return del(['./style.css']);
});

gulp.task('default', ['clean','less','watch']);

gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('less/**/*.less', ['less']);
});

gulp.task('watch', function() {

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch(['assets/**']).on('change', livereload.changed);

});

