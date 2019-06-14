
var sass = require('gulp-sass');

[crayon-5caaf999900f5993511187 inline="true" ]
gulp.task('sass', function(){
    gulp.src('source-files')
        .pipe(sass()) // Using gulp-sass
        .pipe(gulp.dest('destination'))
});