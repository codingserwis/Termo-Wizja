var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourceMaps = require('gulp-sourcemaps'),
    autoPrefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync');



// SASS compilation
gulp.task('sass', function() {
    return gulp.src('./sass/**/*.scss')
        .pipe(sourceMaps.init())
        .pipe(sass({
                outputStyle: 'compressed'
            }).on('error', sass.logError))
        .pipe(autoPrefixer({
                browsers: ['last 2 versions']
            }))
        .pipe(sourceMaps.write('./maps'))
        .pipe(gulp.dest('../assets/css'))
        .pipe(browserSync.stream());
});

// Browser Sync
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'http://localhost/WP-4_8_1/'
    });
});

// Php files copy
gulp.task('php-copy', function() {
    return gulp.src('./**/*.php')
        .pipe(gulp.dest('../'))
        .pipe(browserSync.stream());
});

// Gulp watch files
gulp.task('watch', ['sass', 'browser-sync'], function() {
    gulp.watch('sass/**/*.scss', ['sass']);
    gulp.watch('./**/*.php', ['php-copy']);
});

// Gulp default
gulp.task('default', ['watch']);