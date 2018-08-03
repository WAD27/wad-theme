var gulp = require('gulp')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()

var paths = {
  sass: {
    src: 'scss/app.scss',
    dest: 'css/'
  }
};
//

gulp.task('sass', function () {
  return gulp.src(paths.sass.src)
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest(paths.sass.dest))
  .pipe(browserSync.reload({
    stream: true
  }))
});
//
gulp.task('message', function(){
  for (var i = 0; i < 7; i++) {
    console.log('Hola WAD dev' );
  }
});
gulp.task('message_sass', function(){
  console.log('Go WAD sass' );
});
gulp.task('message_php', function(){
  console.log('Go WAD php' );
});
gulp.task('message_js', function(){
  console.log('Go WAD javascript' );
});
//
gulp.task('browserSync', function() {

  browserSync.init({
    proxy: 'http://localhost/wad',
    options: {
      reloadDelay: 100
    },
  })

})
//
gulp.task('watch', function() {

  gulp.watch('scss/**/*.scss', gulp.series('sass','message_sass')).on('change', browserSync.reload)
  gulp.watch('secciones/**/*.php', gulp.series('message_php')).on('change', browserSync.reload, function(file) {
    console.log('1 file changed: ' + file);
  })
  gulp.watch('js/**/*.js', gulp.series('message_js')).on('change', browserSync.reload, function(file) {
    console.log('1 file changed: ' + file);
  })

})

gulp.task('default', gulp.parallel('sass','browserSync','message','watch'))

//
// exports.watch = watch
