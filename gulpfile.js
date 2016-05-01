var gulp          = require('gulp');
var autoprefixer  = require('gulp-autoprefixer');
var sass          = require('gulp-sass');
var cssmin        = require('gulp-cssmin');
var rename        = require('gulp-rename');

gulp.task('css', function() {
  return gulp.src('field/assets/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(rename('style.css'))
    .pipe(cssmin())
    .pipe(gulp.dest('field/assets/css'));
});

gulp.task('watch', function() {
  gulp.watch('field/assets/scss/**/*.scss', ['css']);
});
