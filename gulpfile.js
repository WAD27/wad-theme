var gulp = require('gulp')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()

// ------------------------------------------------- configs
var paths = {
  sass: {
    src: 'sass/**/*.{scss,sass}',
    dest: 'css'
  }
};
// ---------------------------------------------- Gulp Tasks
gulp.task('sass', function () {
  return gulp.src(paths.sass.src)
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest(paths.sass.dest))
  .pipe(browserSync.reload({
    stream: true
  }))
});

// ------------------------------------ Gulp Testing Message
gulp.task('message', function(){
  console.log('Yeahhh!!');
});
//
gulp.task('browserSync', function() {
  browserSync.init({
    proxy: 'http://localhost/wad',// for php as index
    options: {
      reloadDelay: 100
    },
  })
})
//
// //
var watcher1 = gulp.watch('scss/**/*.scss', gulp.series('sass'),browserSync.reload)
var watcher2 = gulp.watch('secciones/**/*.php', browserSync.reload);
var watcher3 = gulp.watch('js/**/*.js', browserSync.reload);
//

gulp.task('default', gulp.parallel('browserSync','sass','message', function() {
  watcher1.on('change', function(path, stats) {});
  watcher2.on('change', function(path, stats) {});
  watcher3.on('change', function(path, stats) {});
}))
