import gulp from 'gulp'
import sass from 'gulp-sass'
import autoprefixer from 'gulp-autoprefixer'

const ruta = {
    entrada: './sass/*.sass', //entrada
    salida: './' //saluda
}

gulp.task('style',() => {
    gulp.src( ruta.entrada )
        .pipe(sass())
        .pipe(gulp.dest( ruta.saluda ))
})

gulp.task('default',['style'], ()=>{
    gulp.watch(ruta.entrada, ['sass'])
})