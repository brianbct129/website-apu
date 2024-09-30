const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename'); // Import the rename plugin

// Task to compile and minify style.scss
gulp.task('styles', function() {
    return gulp.src('sass/style.scss') // Source SCSS file
        .pipe(sass().on('error', sass.logError)) // Compile SCSS
        .pipe(cleanCSS({ compatibility: 'ie8' })) // Minify CSS
        .pipe(rename('style.bundle.css')) // Rename to style.bundle.css
        .pipe(gulp.dest('css')); // Output to css/
});

// Task to compile and minify plugins.scss
gulp.task('plugins', function() {
    return gulp.src('sass/plugins.scss') // Source SCSS file for plugins
        .pipe(sass().on('error', sass.logError)) // Compile SCSS
        .pipe(cleanCSS({ compatibility: 'ie8' })) // Minify CSS
        .pipe(rename('plugins.bundle.css')) // Rename to plugins.bundle.css
        .pipe(gulp.dest('plugins/global')); // Output to plugins/global/
});

// Watch task to monitor changes
gulp.task('watch', function() {
    gulp.watch('sass/style.scss', gulp.series('styles')); // Watch style.scss
    gulp.watch('sass/plugins.scss', gulp.series('plugins')); // Watch plugins.scss
});

// Default task
gulp.task('default', gulp.series(gulp.parallel('styles', 'plugins'), 'watch')); // Default task to run both styles and plugins
