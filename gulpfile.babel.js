

// var gulp = require('gulp'),
//     sass = require('gulp-sass'),
//     sourceMaps = require('gulp-sourcemaps'),
//     autoPrefixer = require('gulp-autoprefixer'),
//     imgMin = require('gulp-imagemin'),
//     browserSync = require('browser-sync'),
//     typeScript = require('gulp-typescript'),
//     tsProject = typeScript.createProject('tsconfig.json'),
//     uglify = require('gulp-uglify');

// // images optimalisation
// gulp.task('img', function() {
// 	return gulp.src('./assets/img/*.*')
// 		.pipe(imgMin())
// 		.pipe(gulp.dest('../assets/img'));
// });

// // SASS compilation
// gulp.task('sass', function() {
//     return gulp.src('./sass/**/*.scss')
//         .pipe(sourceMaps.init())
//         .pipe(sass({
//                 outputStyle: 'compressed'
//             }).on('error', sass.logError))
//         .pipe(autoPrefixer({
//                 browsers: ['last 2 versions']
//             }))
//         .pipe(sourceMaps.write('./maps'))
//         .pipe(gulp.dest('../assets/css'))
//         .pipe(browserSync.stream());
// });

// // Browser Sync
// gulp.task('browser-sync', function() {
//     browserSync.init({
//         proxy: 'http://localhost/WP-4_8_1/'
//     });
// });

// // Php files copy
// gulp.task('php-copy', function() {
//     return gulp.src('./**/*.php')
//         .pipe(gulp.dest('../'))
//         .pipe(browserSync.stream());
// });

// //TS
// gulp.task('ts', function() {
//     var tsResult = gulp.src('./ts/**/*.ts')
//         .pipe(tsProject())
       
//         return tsResult.js
//                 .pipe(uglify())
//                 .pipe(gulp.dest('../assets/js'))
//                 .pipe(browserSync.stream());
// });

// // Gulp watch files
// gulp.task('watch', ['sass', 'browser-sync'], function() {
//     gulp.watch('sass/**/*.scss', ['sass']);
//     gulp.watch('./**/*.php', ['php-copy']);
//     gulp.watch('./ts/**/*.ts', ['ts']);
// });

// // Gulp default
// gulp.task('default', ['watch']);