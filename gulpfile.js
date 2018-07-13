'use strict'

const autoprefixer = require('gulp-autoprefixer'),
      csso = require('gulp-csso'),
      del = require('del'),
      gulp = require('gulp'),
      htmlmin = require('gulp-htmlmin'),
      runSequence = require('run-sequence'),
      uglify = require('gulp-uglify-es').default,
      browserSync = require('browser-sync').create(),
      imagemin = require('gulp-imagemin'),
      imageminPngQuant = require('imagemin-pngquant'),
      args = ['**/*.php','**/assets/css/*.css','**/assets/js/*.js'];

const AUTOPREFIXER_BROWSERS = [
        'ie >= 10',
        'ie_mob >= 10',
        'ff >= 30',
        'chrome >= 34',
        'safari >= 7',
        'opera >= 23',
        'ios >= 7',
        'android >= 4.4',
        'bb >= 10'
        ];

gulp.task('serve',() => {
    browserSync.init({
        proxy:"http://localhost/megustadigital"
    });
    gulp.watch(args).on('change',browserSync.reload);
});

gulp.task('images', () =>
    gulp.src(['assets/img/*','/*'])
        .pipe(imagemin([imageminPngQuant()]))
        .pipe(gulp.dest('dist/assets/img'))
);

gulp.task('styles', () => {
  return gulp.src('assets/css/*.css')
    // Auto-prefix css styles for cross browser compatibility
    .pipe(autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
    // Minify the file
    .pipe(csso())
    // Output
    .pipe(gulp.dest('dist/assets/css'))
});

gulp.task('scripts', () => {
    return gulp.src('assets/js/*.js')
      // Minify the file
      .pipe(uglify())
      // Output
      .pipe(gulp.dest('dist/assets/js'))
  });

  // Gulp task to minify HTML files
  gulp.task('pages-1', () => {
    return gulp.src(['./*.php','!./functions.php'])
       .pipe(htmlmin({
         collapseWhitespace: true,
         removeComments: true
       }))
       .pipe(gulp.dest('dist'));
   });

gulp.task('pages-2', () => {
   return gulp.src('./page-templates/*.php')
      .pipe(htmlmin({
        collapseWhitespace: true,
        removeComments: true
      }))
      .pipe(gulp.dest('dist/page-templates'));
  });

  // Clean output directory
gulp.task('clean', () => del(['dist']));

// Gulp task to minify all files
gulp.task('default', () => {
  runSequence(
    'images',
    'styles',
    'scripts',
    'pages-1',
    'pages-2'
  );
});
