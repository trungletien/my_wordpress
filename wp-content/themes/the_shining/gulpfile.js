const gulp = require('gulp');
const concat = require('gulp-concat');
const minifyCSS = require('gulp-clean-css');

// Define a task to concatenate and minify CSS
gulp.task('minify-css', function () {
  return gulp
    .src('src/*.css') // Source files (you can modify the file path pattern)
    .pipe(concat('bundle.css')) // Concatenate all CSS files into a single file
    .pipe(minifyCSS()) // Minify the CSS
    .pipe(gulp.dest('dist/css')); // Output destination for the final minified CSS file
});