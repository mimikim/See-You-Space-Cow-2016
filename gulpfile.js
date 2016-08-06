// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var jshint = require('gulp-jshint'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    changed  = require('gulp-changed'),
    imagemin = require('gulp-imagemin'),
    autoprefixer = require('gulp-autoprefixer');


// Images
gulp.task('images', function() {
    return gulp.src('assets/images/**')
        .pipe(changed('dist/images')) // Only apply to changed files
        .pipe(imagemin()) // Optimize
        .pipe(gulp.dest('dist/images'));
});

// Lint Task
gulp.task('lint', function() {
    return gulp.src('assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('assets/scss/*.scss')
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer())
        .pipe(gulp.dest('dist/css'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {

    gulp.src(['assets/js/plugins/**']).pipe(gulp.dest('dist/js/vendor'));

    return gulp.src('assets/js/*.js')
        .pipe(concat('all.js'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

// Transfer Font Directories
gulp.task('fonts', function() {

    gulp.src(['assets/fonts/**/*']).pipe(gulp.dest('dist/fonts'));

});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('assets/scss/**', ['sass']);
    gulp.watch('assets/images/**', ['images']);
    gulp.watch('assets/fonts/**', ['fonts']);
});

// Default Task
gulp.task('default', ['images', 'lint', 'sass', 'scripts', 'watch', 'fonts']);