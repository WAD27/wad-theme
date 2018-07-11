var gulp = require('gulp')
var sass = require('gulp-sass')
var browserSync = require('browser-sync').create()

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
  // return gulp.src('scss/**/*.scss')//accept any file in scss folder
  .pipe(sass())
  .pipe(gulp.dest('css/'))
  .pipe(browserSync.reload({
    stream: true
  }))
})

gulp.task('browserSync', function() {
  browserSync.init({
    // server: {
    //   basedir: './' //for html as index
    // }
    proxy: 'http://localhost/wad',// for php as index
    options: {
      reloadDelay: 100
    },
  })
})
// gulp.task('watch', ['browserSync','sass']/*order*/, function() {
//   gulp.watch('scss/**/*.scss',['sass'])
//   gulp.watch('secciones/**/*.php', browserSync.reload);
//   gulp.watch('js/**/*.js', browserSync.reload);
// })
gulp.task('default', gulp.series(['browserSync','sass']/*order*/, function() {
  gulp.watch('scss/**/*.scss',['sass'])
  gulp.watch('secciones/**/*.php', browserSync.reload);
  gulp.watch('js/**/*.js', browserSync.reload);
}))
