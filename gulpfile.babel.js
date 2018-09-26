'use strict'

const gulp = require('gulp'),
    runSequence = require('run-sequence'),
    del = require('del'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    sourceMaps = require('gulp-sourcemaps'),
    browserSync = require('browser-sync'),
    imgMin = require('gulp-imagemin'),
    gulpIf = require('gulp-if'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify');

//
// Project folders
//
const dirs = {
    dev: '.',
    prod: './prod'
};

// del paths
const delPaths = {
    toDelete: `${dirs.prod}/**`,
    notDelete: `!${dirs.prod}`
};

//sass paths
const sassPaths = {
    dev: `${dirs.dev}/sass/**/*.scss`,
    prod: `${dirs.prod}/assets/css`
};

// php paths
const phpPaths = {
    dev: `${dirs.dev}/**/*.php`,
    prod: `${dirs.prod}/`,
    notToWatch: `!${dirs.prod}/`,
    notToWatchSub: `!${dirs.prod}/**/*.*`
};

// img paths
const imgPaths = {
    dev: `${dirs.dev}/img/**/*.*`,
    prod: `${dirs.prod}/assets/img`
};

//js paths 
const jsPaths = {
    dev: `${dirs.dev}/js/**/*.js`,
    prod: `${dirs.prod}/assets/js`
};

const dependences = [
    './style.css',
    './node_modules/jquery/dist/jquery.min.js',
];

//
// Gulp tasks
//
// copy dependences to project
gulp.task('dependences', () => {
    return gulp.src(dependences)
        .pipe(gulpIf('*.js', gulp.dest(jsPaths.prod)))
        .pipe(gulpIf('style.css', gulp.dest(dirs.prod)));
});

// clear production folder
gulp.task('clear', () => {
    return del.sync([delPaths.toDelete, delPaths.notDelete]);
});

// sass to css compilation
gulp.task('sass', () => {
    return gulp.src(sassPaths.dev)
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(sourceMaps.write('./maps'))
        .pipe(gulp.dest(sassPaths.prod))
        .pipe(browserSync.stream());
});

// browser sync 
gulp.task('browserSync', () => {
    browserSync.init({
        proxy: 'http://localhost/wordpress/'
    });
});

// php copy 
gulp.task('php', () => {
    return gulp.src([phpPaths.dev, phpPaths.notToWatch, phpPaths.notToWatchSub])
        .pipe(gulp.dest(phpPaths.prod))
        .pipe(browserSync.stream());
});

// img min and copy
gulp.task('img', () => {
    return gulp.src(imgPaths.dev)
        .pipe(imgMin())
        .pipe(gulp.dest(imgPaths.prod));
});

// js uglify and copy
gulp.task('js', () => {
    return gulp.src(jsPaths.dev)
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest(jsPaths.prod))
        .pipe(browserSync.stream());
});

// watch task
gulp.task('watch', ['sass', 'browserSync'], () => {
    gulp.watch(sassPaths.dev, ['sass']);
    gulp.watch([phpPaths.dev, phpPaths.notToWatch, phpPaths.notToWatchSub], ['php']);
    gulp.watch(jsPaths.dev, ['js']);
});

// develop tast
gulp.task('start-develop', () => {
    runSequence('clear', 'dependences', 'php', 'sass', 'js', 'img', 'watch');
});

// default gulp task
gulp.task('default', ['start-develop']);