const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const minifyCSS = require('gulp-clean-css');

// Sass source files
const sassFiles = 'assets/scss/*.scss';

// Destination folder for compiled CSS
const cssDest = 'assets/css';

// Gulp task to compile Sass to CSS
gulp.task('sass', function () {
  return gulp.src(sassFiles)
    .pipe(concat('all.css')) // Concatenate all CSS files into a single file
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCSS())
    .pipe(gulp.dest(cssDest));
});

// Gulp task to watch for changes in Sass files
gulp.task('watch', function () {
  gulp.watch(sassFiles, gulp.series('sass'));
});

// Default Gulp task
gulp.task('default', gulp.series('sass', 'watch'));