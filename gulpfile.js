var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));

gulp.task ('sass', async function() {
    gulp.src('./themes/basic/inc/css/src/*.scss')
        .pipe(sass()).on('error', sass.logError)
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('./themes/basic/inc/css/'));
});
gulp.task ('sass:watch', async function() {
    gulp.watch('./themes/basic/inc/css/src/*.scss', gulp.parallel('sass'));
    gulp.watch('./themes/basic/inc/css/src/layouts/*.scss', gulp.parallel('sass'));

});