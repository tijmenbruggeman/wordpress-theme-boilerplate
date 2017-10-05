var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var imagemin = require('gulp-imagemin');
var sourcemaps = require('gulp-sourcemaps');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var gp_concat = require('gulp-concat');

var onError = function (err) {
    console.log('An error occurred:', gutil.colors.magenta(err.message));
    gutil.beep();
    this.emit('end');
};

gulp.task('minify-css', function () {
    return gulp.src('./css/style.css')
        .pipe(cleanCSS({sourceMap: false}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./css/'));
});

gulp.task('compress-js', function (cb) {
    return gulp.src(['./js/src/slick.js', './js/src/scripts.js'])
        .pipe(plumber({errorHandler: onError}))
        .pipe(gp_concat('bundle.js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./js/'));
});

gulp.task('optimize-img', function () {
    return gulp.src(['./img/*', '../../uploads/**/*'])
        .pipe(imagemin())
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

gulp.task('sass', function () {
    return gulp.src('./sass/style.scss')
        .pipe(plumber({errorHandler: onError}))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./css/'));
});


gulp.task('watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass', 'minify-css']);
});

gulp.task('default', ['sass', 'watch']);