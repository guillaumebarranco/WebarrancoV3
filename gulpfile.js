'use strict';

/************************/
/*  IMPORT DES PACKAGES */
/************************/

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify'),
    //uncss = require('gulp-uncss'),
    rename = require("gulp-rename"),
    // fontgen = require('gulp-fontgen'),

    concat = require('gulp-concat'),

    argv = require('yargs').argv

    // Pas utilisé pour le moment jasmine = require('gulp-jasmine-node')
;

require('es6-promise').polyfill();

/************************/
/*        TACHES        */
/************************/

/*
*   Tâche pour compilation SASS
*/

var input = 'webroot/sass/*.scss';

gulp.task('style', function () {
    gulp
        .src(input)
        // .pipe(sourcemaps.init())

        .pipe(sass({outputStyle:'compressed'}).on('error', sass.logError))

        .pipe(autoprefixer())
        // .pipe(sourcemaps.write())

        .pipe(rename(function(path){
            path.dirname = path.dirname.replace('sass', 'css');
        }))

        // .pipe(concat('dist/style.min.css'))

        .pipe(gulp.dest(function(file) {
            return file.base.replace('sass', 'css');
        }))
});

// Même tâche mais en watch
gulp.task('style:watch', function () {
    gulp.watch(input, ['style']);
});

gulp.task('concatJs', function() {
  return gulp.src(['app/assets/javascript/jquery.min.js', 'app/assets/javascript/main.js'])
    .pipe(concat('min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('app/assets/javascript/dist/'));
});

gulp.task('prepare', ['style', 'concatJs']);
